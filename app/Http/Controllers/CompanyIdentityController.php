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

    function mission()
    {
        $title = 'Misión';

        return view('companyIdentity.mission',compact('title'));
    }

    function vision()
    {
        $title = 'Vision';

        return view('companyIdentity.vision',compact('title'));
    }

    function organizationalStructure()
    {
        $title = 'Cuadro Organizacional';

        return view('companyIdentity.organizationalStructure',compact('title'));
    }

    function qualityPolicy()
    {
        $title = 'Politicas de Calidad';

        return view('companyIdentity.qualityPolicy',compact('title'));
    }
}
