<?php

namespace Biscommakers\Http\Controllers;

use Illuminate\Http\Request;

class TheoryController extends Controller
{
    function index()
    {
        $title = 'Theory';

        return view('theory.index',compact('title'));
    }
}
