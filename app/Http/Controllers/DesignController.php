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

    function logo()
    {
        $title = 'Logo';

        return view('design.logo',compact('title'));
    }
    function color()
    {
        $title = 'Color';

        return view('design.color',compact('title'));
    }
    function typography()
    {
        $title = 'Tipografia';

        return view('design.typography',compact('title'));
    }
    function infographic()
    {
        $title = 'Infografia';

        return view('design.infographic',compact('title'));
    }
}
