<?php

namespace Biscommakers\Http\Controllers;

use Illuminate\Http\Request;

class CompanyIdentityController extends Controller
{  
    function index()
    {
        $title = 'Company Identity';

        return view('companyIdentity.index',compact('title'));
    }
}
