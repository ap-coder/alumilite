<?php

namespace App\Http\Controllers;

use App\Models\ContentCategory;
use App\Models\ContentTag;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class BlogController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        // $minutes = 360;

        // $articles = Cache::remember('blog-articles', $minutes, function () {
        //     return Post::where('published', 1)->orderBy('id', 'DESC')->paginate(6);
        // });

        $category=$request->category;
        $search=$request->search;
        $sliders = Slider::published()->get();

        if ($category) {
            $articles = Post::published()->whereHas('categories', function ($query) use ($category) {
                $query->where('slug', $category);
            })->orderBy('id', 'DESC')->paginate(12);
        }elseif($search){
            $articles = Post::where('title','LIKE','%' . $search . '%')->published()->orderBy('id', 'DESC')->paginate(12);
        } else {
            $articles = Post::published()->orderBy('id', 'DESC')->paginate(12);
        }

        $categories = ContentCategory::all();

        return view('site.blog.index', compact('articles', 'sliders', 'categories'));
    }


    /**
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function more_data(Request $request)
    {
        if ($request->ajax()) {
            $skip = $request->skip;
            $take = 8;
            $articles = Post::skip($skip)->take($take)->get();

            return response()->json($articles);
        } else {
            return response()->json('Direct Access Not Allowed!!');
        }
    }

    /**
     * @param  \App\Models\Post  $post
     * @param $slug
     *  @return \Illuminate\View\View
     */
    public function show(Post $post, $slug)
    {
        $article = Post::where('slug', $slug)->with('categories', 'tags')->first();

        $categoryIds = $article->categories()->pluck('content_categories.id');

        $relatedPosts = Post::whereHas('categories', function ($query) use ($categoryIds) {
            $query->whereIn('content_categories.id', $categoryIds);
        })->where('id', '!=', $post->id)
            ->where('status', 'published')
            ->latest()
            ->take(2)
            ->get();

        // $post = Cache::remember('published-post-'.$slug, 1440, function () use ($slug) {
        //    return Post::where('slug', $slug)->with('categories', 'tags')->first();
        // });

        // if (app()->environment() === 'production') {
        //     views($post)->record();
        // }

        //$recent_posts = Cache::remember('recent-posts-'.$post->id, 60, function () use ($post) {
        //     return Post::where('published', true)
        //         ->whereNotIn('id', [$post->id])
        //         ->orderByUniqueViews()
        //         ->take(4)
        //         ->get();
        // });

        views($article)->record();

        $viewcount = views($article)->unique()->remember()->count();

        return view('site.blog.show', compact('article', 'viewcount', 'relatedPosts'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function more_press_blog(Request $request)
    {
        $articles = Post::where('published', 1)->orderBy('id', 'DESC')->paginate(6);

        // $html = view('site.blog.partials.timeline-items', compact('articles'))->render();

        // echo json_encode($html);
    }
}
