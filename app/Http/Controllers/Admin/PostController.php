<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPostRequest;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\ContentCategory;
use App\Models\ContentTag;
use App\Models\Post;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PostController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('post_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Post::with(['categories', 'tags'])->select(sprintf('%s.*', (new Post)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'post_show';
                $editGate      = 'post_edit';
                $deleteGate    = 'post_delete';
                $crudRoutePart = 'posts';

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

        return view('admin.posts.index');
    }

    public function create()
    {
        abort_if(Gate::denies('post_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = ContentCategory::pluck('name', 'id');

        $tags = ContentTag::pluck('name', 'id');

        return view('admin.posts.create', compact('categories', 'tags'));
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->all());
        $post->categories()->sync($request->input('categories', []));
        $post->tags()->sync($request->input('tags', []));
        if ($request->input('featured_image', false)) {
            $post->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $post->id]);
        }

        $post = Post::findOrFail($post->id);
        $cleanDescription = strip_tags($post->page_text);
        $shortDescription = substr($cleanDescription, 0, 110);

        $menuName = \Str::of($post->slug)->replace('-', ' ')->title();

        if ($post->featured_image) {
            $seo_image_url = $post->featured_image->getUrl();
        } else {
            $seo_image_url = '';
        }

        $post->staticSeo()->create(
            [
                'post_id' => $post->id,
                'canonical' => '1',
                'content_type' => 'post',
                'menu_name' => $menuName,
                'page_name' => $menuName,
                'page_path' => 'blog/'.$post->slug,
                'open_graph_type' => 'article',
                'html_schema_1' => 'Thing',
                'html_schema_2' => 'CreativeWork',
                'html_schema_3' => 'Blog',
                'body_schema' => 'Article',
                'seo_image_url' => $seo_image_url,
                'meta_title' => $post->title,
                'facebook_title' => $post->title,
                'twitter_title' => $post->title,
                'facebook_description' => $shortDescription,
                'twitter_description' => $shortDescription,
                'meta_description' => $shortDescription,
            ]
        );

        return redirect()->route('admin.posts.index');
    }

    public function edit(Post $post)
    {
        abort_if(Gate::denies('post_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = ContentCategory::pluck('name', 'id');

        $tags = ContentTag::pluck('name', 'id');

        $post->load('categories', 'tags');

        return view('admin.posts.edit', compact('categories', 'post', 'tags'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->all());
        $post->categories()->sync($request->input('categories', []));
        $post->tags()->sync($request->input('tags', []));
        if ($request->input('featured_image', false)) {
            if (! $post->featured_image || $request->input('featured_image') !== $post->featured_image->file_name) {
                if ($post->featured_image) {
                    $post->featured_image->delete();
                }
                $post->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
            }
        } elseif ($post->featured_image) {
            $post->featured_image->delete();
        }

        $post = Post::findOrFail($post->id);
        $staticSeo = $post->staticSeo()->first();
        if ($staticSeo && !$staticSeo->deactivate_update) {
            $cleanDescription = strip_tags($post->page_text);
            $shortDescription = substr($cleanDescription, 0, 110);

            $menuName = \Str::of($post->slug)->replace('-', ' ')->title();

            if ($post->featured_image) {
                $seo_image_url = $post->featured_image->getUrl();
            } else {
                $seo_image_url = '';
            }

            $post->staticSeo()->updateOrCreate(
                [
                    'post_id' => $post->id,
                ],
                [
                    'post_id' => $post->id,
                    'canonical' => '1',
                    'content_type' => 'post',
                    'menu_name' => $menuName,
                    'page_name' => $menuName,
                    'page_path' => 'blog/' . $post->slug,
                    'open_graph_type' => 'article',
                    'html_schema_1' => 'Thing',
                    'html_schema_2' => 'CreativeWork',
                    'html_schema_3' => 'Blog',
                    'body_schema' => 'Article',
                    'seo_image_url' => $seo_image_url,
                    'meta_title' => $post->title,
                    'facebook_title' => $post->title,
                    'twitter_title' => $post->title,
                    'facebook_description' => $shortDescription,
                    'twitter_description' => $shortDescription,
                    'meta_description' => $shortDescription,
                ]
            );
        }

        return $request->preview ? response()->json($post->slug) : redirect()->route('admin.posts.index');
    }

    public function show(Post $post)
    {
        abort_if(Gate::denies('post_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $post->load('categories', 'tags');

        return view('admin.posts.show', compact('post'));
    }

    public function destroy(Post $post)
    {
        abort_if(Gate::denies('post_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $post->delete();

        return back();
    }

    public function massDestroy(MassDestroyPostRequest $request)
    {
        $posts = Post::find(request('ids'));

        foreach ($posts as $post) {
            $post->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('post_create') && Gate::denies('post_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Post();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
