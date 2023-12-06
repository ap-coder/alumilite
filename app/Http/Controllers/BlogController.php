<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

        $articles = Post::where('published', 1)->orderBy('id', 'DESC')->paginate(6);

        return view('site.blog.index', compact('articles'));
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
        $post = Cache::remember('published-post-'.$slug, 1440, function () use ($slug) {
            return Post::where('slug', $slug)->with('categories', 'tags')->first();
        });

        // if (app()->environment() === 'production') {
        //     views($post)->record();
        // }

        // $recent_posts = Cache::remember('recent-posts-'.$post->id, 60, function () use ($post) {
        //     return Post::where('published', true)
        //         ->whereNotIn('id', [$post->id])
        //         ->orderByUniqueViews()
        //         ->take(4)
        //         ->get();
        // });

        // $total_views = Cache::remember('total-views', 60, function () {
        //     return views(new Post())->count();
        // });

        // $total_views2 = Cache::remember('total-views-'.$post->id, 60, function () use ($post) {
        //     return views($post)->unique()->count();
        // });

        // $most_popular = Cache::remember('most-popular', 60, function () {
        //     return Post::orderByUniqueViews('asc')->take(3)->get();
        // });

        return view('site.blog.show', compact('post'));
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