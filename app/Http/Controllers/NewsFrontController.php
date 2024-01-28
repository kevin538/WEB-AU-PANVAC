<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsFrontController extends Controller
{
    //
    public function facilitiesressources()
    {
        $titre = "AUPANVAC-Facilities and Ressources";
        $soustitre = "Facilities and Ressources";
        return view('frontviews.facilitiesressources', compact('titre','soustitre'));
    }
    public function trainingandeducation()
    {
        $titre = "AUPANVAC-Training  and Education Support Program";
        $soustitre = "Training  and Education Support Program";
        return view('frontviews.trainingandeducation', compact('titre','soustitre'));
    }
    public function pressrelease()
    {
        $titre = "AUPANVAC-Press Release";
        $soustitre = "Press Relesae";
        return view('frontviews.pressrelease', compact('titre','soustitre'));
    }
}
