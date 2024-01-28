<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    //
    public function index()
    {
        
        $section = "Doc";
        $titre = "Documentation";
        return view('backviews.documentation', compact('section', 'titre'));

    }
}
