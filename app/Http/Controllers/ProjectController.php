<?php

namespace Biscommakers\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function index()
    {
        $title = 'Project';

        return view('project.index',compact('title'));
    }
}
