<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Build;
use App\Models\Review;

class BuildsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $builds = Build::where('published', 1)->orderBy('id', 'DESC')->get();

        return view('site.builds.index', compact('builds'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Build $build)
    {
        views($build)->record();

        $viewcount = views($build)->unique()->count();

        if ($build->brand) {
            $similarBuilds = Build::whereHas('brand', function ($query) use ($build) {
                $query->where('id', $build->brand->id);
            })
                ->where('id', '!=', $build->id)
                ->take(6)
                ->get();
        } else {
            $similarBuilds = collect();
        }
        
//        $similarBuilds = Build::whereHas('brand', function ($query) use ($build) {
//            $query->where('id', $build->brand->id);
//        })
//        ->where('id', '!=', $build->id)
//        ->take(6)
//        ->get();

        return view('site.builds.show', compact('build','viewcount','similarBuilds'));
    }

    public function review_store(Request $request)
    {
        $review = Review::create($request->all());

        if($request->hasFile('avatar')){
            $review->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }

        if($request->hasFile('photo')){
            $review->addMediaFromRequest('photo')->toMediaCollection('photo');
        }

        return redirect()->back()->with('success', 'Successfully submitted your review!');
    }
}
