<?php

namespace Biscommakers\Http\Controllers;

use Illuminate\Http\Request;

class BudgetController extends Controller
{
    function index()
    {
        $title = 'title';

        return view('budget.index', compact('title'));
    }
}
