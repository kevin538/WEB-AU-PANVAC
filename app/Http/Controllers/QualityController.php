<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualityController extends Controller
{
    //
   
    public function qualitymanegmentsystem()
    {
        $titre = "Panvac-Quality Mangement System";
        $soustitre = "Quality Mangement System";
        return view('frontviews.qualitymanegmentsystem', compact('titre','soustitre'));
    }
    public function bioriskmanegmentsystem()
    {
        $titre = "Panvac-Biorisk Management Sytem";
        $soustitre = "Biorisk Management Sytem";
        return view('frontviews.bioriskmanegmentsystem', compact('titre','soustitre'));
    }
}
