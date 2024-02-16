<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyContentPageRequest;
use App\Http\Requests\StoreContentPageRequest;
use App\Http\Requests\UpdateContentPageRequest;
use App\Models\ContentCategory;
use App\Models\ContentPage;
use App\Models\ContentTag;
use App\Models\Pagesection;
use App\Models\ContentSection;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\File;

class ContentPageController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('content_page_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ContentPage::with(['categories', 'tags'])->select(sprintf('%s.*', (new ContentPage)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'content_page_show';
                $editGate      = 'content_page_edit';
                $deleteGate    = 'content_page_delete';
                $crudRoutePart = 'content-pages';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('published', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->published ? 'checked' : null) . '>';
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('category', function ($row) {
                $labels = [];
                foreach ($row->categories as $category) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $category->name);
                }

                return implode(' ', $labels);
            });
            $table->editColumn('tag', function ($row) {
                $labels = [];
                foreach ($row->tags as $tag) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $tag->name);
                }

                return implode(' ', $labels);
            });
            $table->editColumn('excerpt', function ($row) {
                return $row->excerpt ? $row->excerpt : '';
            });
            $table->editColumn('featured_image', function ($row) {
                if ($photo = $row->featured_image) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });
            $table->editColumn('slug', function ($row) {
                return $row->slug ? $row->slug : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'published', 'category', 'tag', 'featured_image']);

            return $table->make(true);
        }

        return view('admin.contentPages.index');
    }

    public function create()
    {
        abort_if(Gate::denies('content_page_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $photos = [];

        $photoDirectory = public_path('site/img/landing-pages');

        if (is_dir($photoDirectory)) {
            foreach (File::allFiles($photoDirectory) as $file) {

                $photos[] = array(
                    "filename" => $file->getFilename(),
                    "filesize" => $file->getSize(), // returns size in bytes
                    "fileext" => $file->getExtension()
                );
            }
        }

        $attachments = [];

        $attachmentDirectory = public_path('site/attachments/landing-pages');

        if (is_dir($attachmentDirectory)) {
            foreach (File::allFiles($attachmentDirectory) as $attachment) {

                $attachments[] = array(
                    "filename" => $attachment->getFilename(),
                    "filesize" => $attachment->getSize(), // returns size in bytes
                    "fileext" => $attachment->getExtension()
                );
            }
        }

        return view('admin.contentPages.create', compact('photos','attachments'));
    }

    public function store(StoreContentPageRequest $request)
    {
        $page = ContentPage::create($request->all());

        if ($request->input('featured_image', false)) {
            $page->addMedia(storage_path('tmp/uploads/' . $request->input('featured_image')))->toMediaCollection('featured_image', 'public');
        }

        foreach ($request->input('photos', []) as $file) {
            File::ensureDirectoryExists('site/img/landing-pages');
            File::move(storage_path('tmp/uploads/' . basename($file)), public_path('site/img/landing-pages/'.basename($file)));
            File::delete(storage_path('tmp/uploads/' . basename($file)));
        }

        foreach ($request->input('attachments', []) as $file) {
            File::ensureDirectoryExists('site/attachments/landing-pages');
            File::move(storage_path('tmp/uploads/' . basename($file)), public_path('site/attachments/landing-pages/'.basename($file)));
            File::delete(storage_path('tmp/uploads/' . basename($file)));
        }

        return redirect()->route('admin.content-pages.edit', $page->id);
    }

    public function edit(ContentPage $contentPage)
    {
        abort_if(Gate::denies('content_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $page_sections=Pagesection::published()->get()->pluck('section_nickname','id')->prepend(trans('global.pleaseSelect'), '');

        $existing_crud = Pagesection::published()->where('use_crud_section', '!=', 0)->get()->pluck('section_nickname', 'id')->prepend(trans('global.pleaseSelect'), '');

        $photoDirectory = public_path('site/img/landing-pages');

        $photos = [];

        if (is_dir($photoDirectory)) {
            foreach (File::allFiles($photoDirectory) as $file) {

                $photos[] = array(
                    "filename" => $file->getFilename(),
                    "filesize" => $file->getSize(), // returns size in bytes
                    "fileext" => $file->getExtension()
                );
            }
        }

        $attachments = [];

        $attachmentDirectory = public_path('site/attachments/landing-pages');

        if (is_dir($attachmentDirectory)) {
            foreach (File::allFiles($attachmentDirectory) as $attachment) {

                $attachments[] = array(
                    "filename" => $attachment->getFilename(),
                    "filesize" => $attachment->getSize(), // returns size in bytes
                    "fileext" => $attachment->getExtension()
                );
            }
        }

        return view('admin.contentPages.edit', compact('page_sections', 'contentPage', 'existing_crud','photos','attachments'));
    }

    public function update(UpdateContentPageRequest $request, ContentPage $contentPage)
    {
        $contentPage->update($request->all());

        if ($request->input('featured_image', false)) {
            if (!$contentPage->featured_image || $request->input('featured_image') !== $contentPage->featured_image->file_name) {
                if ($contentPage->featured_image) {
                    $contentPage->featured_image->delete();
                }

                $contentPage->addMedia(storage_path('tmp/uploads/' . $request->input('featured_image')))->toMediaCollection('featured_image', 'public');
            }
        } elseif ($contentPage->featured_image) {
            $contentPage->featured_image->delete();
        }

        foreach ($request->input('photos', []) as $file) {
            File::ensureDirectoryExists('site/img/landing-pages');
            File::move(storage_path('tmp/uploads/' . basename($file)), public_path('site/img/landing-pages/'.basename($file)));
            File::delete(storage_path('tmp/uploads/' . basename($file)));
        }

        foreach ($request->input('attachments', []) as $file) {
            File::ensureDirectoryExists('site/attachments/landing-pages');
            File::move(storage_path('tmp/uploads/' . basename($file)), public_path('site/attachments/landing-pages/'.basename($file)));
            File::delete(storage_path('tmp/uploads/' . basename($file)));
        }
        
        if ($request->preview) {
            if ($contentPage->is_homepage == 1) {
                if ($contentPage->slug) {
                    echo json_encode($contentPage->slug);
                } else {
                    echo json_encode('homepage');
                }
            } else {
                if ($contentPage->path_segments == 0) {
                    echo json_encode($contentPage->slug);
                }elseif ($contentPage->path_segments == 1) {
                    echo json_encode($contentPage->path.'/'.$contentPage->slug);
                }elseif ($contentPage->path_segments == 2) {
                    echo json_encode($contentPage->path.'/'.$contentPage->path2.'/'.$contentPage->slug);
                } elseif ($contentPage->path_segments == 3) {
                    echo json_encode($contentPage->path.'/'.$contentPage->path2.'/'.$contentPage->path3.'/'.$contentPage->slug);
                } elseif ($contentPage->path_segments == 4) {
                    echo json_encode($contentPage->path.'/'.$contentPage->path2.'/'.$contentPage->path3.'/'.$contentPage->path4.'/'.$contentPage->slug);
                } else {
                    echo json_encode($contentPage->slug);
                }
            }
        } else {
            return redirect()->route('admin.content-pages.index');
        }
    }

    public function show(ContentPage $contentPage)
    {
        abort_if(Gate::denies('content_page_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contentPage->load('categories', 'tags');

        return view('admin.contentPages.show', compact('contentPage'));
    }

    public function destroy(ContentPage $contentPage)
    {
        abort_if(Gate::denies('content_page_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contentPage->delete();

        return back();
    }

    public function massDestroy(MassDestroyContentPageRequest $request)
    {
        $contentPages = ContentPage::find(request('ids'));

        foreach ($contentPages as $contentPage) {
            $contentPage->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('content_page_create') && Gate::denies('content_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ContentPage();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

    public function GetPageContentSectionModalForm(Request $request)
    {
        $contentSection=ContentSection::find($request->id);
        $html= view('admin.contentPages.partials.content-section-modal', compact('contentSection'))->render();

        echo $html;
    }

    public function AddPageContentSection(Request $request)
    {
        
        if($request->id){
            $contentSection=ContentSection::find($request->id);
            $contentSection->update($request->all());
        }else{
            $contentSection = ContentSection::create($request->all());
        }

        $contentSection->assign_contentPages()->sync($request->input('contentPages', []));

        $ContentPage = ContentPage::where('id',$request->contentPages)->first();

        $contentSections=$ContentPage->pagesContentSections;

        $html= view('admin.contentPages.partials.content-section-loop', compact('contentSections'))->render();

        echo $html;
    }

    public function ChangePageContentSectionOrder(Request $request)
    {
        $ids=$request->params;
        foreach ($ids as $key => $id) {
            ContentSection::where('id',$id['value'])->update([
                'order' => $key+1,
            ]);
        }
        echo 1;
    }

    public function GetPageSectionModalForm(Request $request)
    {
        $pageSection=PageSection::find($request->id);
        $html= view('admin.contentPages.partials.page-section-modal', compact('pageSection'))->render();

        echo $html;
    }

    public function AddPageSection(Request $request)
    {
        
        if($request->id){
            $pageSection=Pagesection::find($request->id);
            $pageSection->update($request->all());
        }else{
            $pageSection = Pagesection::create($request->all());
        }

        $pageSection->assign_pages()->sync($request->input('contentPages', []));

        $ContentPage = ContentPage::where('id',$request->contentPages)->first();

        $pageSections=$ContentPage->pagesPagesections;

        $html= view('admin.contentPages.partials.page-section-loop', compact('pageSections'))->render();

        echo $html;
    }

    public function ChangePageSectionOrder(Request $request)
    {
        $ids=$request->params;
        foreach ($ids as $key => $id) {
            Pagesection::where('id',$id['value'])->update([
                'order' => $key+1,
            ]);
        }
        echo 1;
    }

    public function AddExistingPageSection(Request $request)
    {
        $updatePage = ContentPage::where('id',$request->pages)->first();

        $updatePage->pagesPagesections()->toggle($request->input('page_sections', []));        

        $ContentPage = ContentPage::where('id',$request->pages)->first();

        $pageSections=$ContentPage->pagesPagesections;

        $html= view('admin.contentPages.partials.page-section-loop', compact('pageSections'))->render();

        echo $html;
    }

    public function clearAllExistingPageSection(Request $request)
    {
        $updatePage = ContentPage::where('id',$request->pages)->first();
        $updatePage->pagesPagesections()->detach();
        $page = ContentPage::where('id',$request->pages)->first();

        $pageSections=$page->pagesPagesections;

        $html= view('admin.contentPages.partials.page-section-loop', compact('pageSections'))->render();

        echo $html;
    }

    public function getpreviewimage(Request $request)
    {
        $id = $request->id;

        $section = Pagesection::where('id', $id)->first();

        if ($section->section_preview) {
            echo $section->section_preview->getUrl();
        } else {
            echo '';
        }
    }
    
    public function removeMedia(Request $request)
    {
        $name = $request->name;
        $type = $request->type;

        if ($type=='photo') {
            File::delete(public_path('site/img/landing-pages/' . basename($name)));
        } else {
            File::delete(public_path('site/attachments/landing-pages/' . basename($name)));
        }

        echo 1;
        
    }
}
