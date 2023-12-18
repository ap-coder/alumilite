<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Build;

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

        return view('site.builds.show', compact('build','viewcount'));
    }
}
