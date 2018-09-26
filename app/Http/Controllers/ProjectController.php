<?php

namespace Biscommakers\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function index()
    {
        $title = 'Proyecto';

        return view('project.index',compact('title'));
    }

    function food()
    {
      $title = 'Alimento';

      return view('project.food',compact('title'));
    }

    function transport()
    {
      $title = 'Transporte';

      return view('project.transport',compact('title'));
    }

    function technology()
    {
      $title = 'Tecnologia';

      return view('project.technology',compact('title'));
    }

    function health()
    {
      $title = 'Salud';

      return view('project.healt',compact('title'));
    }

    function agroindustry()
    {
      $title = 'Agroindustria';

      return view('project.agroindustry',compact('title'));
    }

    function esthetic()
    {
      $title = 'Estética';

      return view('project.esthetic',compact('title'));
    }
}
