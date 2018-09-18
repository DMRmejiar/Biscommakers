<?php

namespace Biscommakers\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
{
    function index()
    {
        $title = 'Design';

        return view('design.index',compact('title'));
    }
}
