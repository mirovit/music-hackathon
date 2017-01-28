<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        return view('site.profile.show', compact("title", "user", "hrAreas"));
    }

    //
    public function selectInstrument()
    {
        $user = auth()->user();
        return view('site.profile.show', compact("title", "user", "hrAreas"));
    }

    //
    public function compose()
    {
        $user = auth()->user();
        return view('site.projects.compose', compact("user", "hrAreas"));
    }
}
