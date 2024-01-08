<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentPage;

class PagesController extends Controller
{
    public function show(ContentPage $page)
    {
        $slug=basename(request()->path());
        $page = ContentPage::where('slug', $slug)->first();

        if ($page) {
            if ($page->is_homepage==1) {
                $page = ContentPage::where('is_homepage', 1)->first();
            } elseif ($page->path_segments==0) {
                $page = ContentPage::where('slug', $slug)->first();
            } elseif ($page->path_segments==1) {
                $page = ContentPage::where('slug', $slug)->where('path', request()->segment(1))->first();
            } elseif ($page->path_segments==2) {
                $page = ContentPage::where('slug', $slug)->where('path', request()->segment(1))->where('path2', request()->segment(2))->first();
            } elseif ($page->path_segments==3) {
                $page = ContentPage::where('slug', $slug)->where('path', request()->segment(1))->where('path2', request()->segment(2))->where('path3', request()->segment(3))->first();
            } elseif($page->path_segments==4) {
                $page = ContentPage::where('slug', $slug)->where('path', request()->segment(1))->where('path2', request()->segment(2))->where('path3', request()->segment(3))->where('path4', request()->segment(4))->first();
            }           
        } else {
            return abort(404);
        }

        if (empty($page)) {
            return abort(404);
        }

        return view('site.contentpage.show', compact('page'));

    }
}
