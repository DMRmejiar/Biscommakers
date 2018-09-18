<?php

namespace Biscommakers\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{  
    function index()
    {
        $title = 'Forms';

        return view('forms.index',compact('title'));
    }
}
