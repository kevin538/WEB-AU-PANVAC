<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function policy()
    {
        $titre = "Panvac-policy";
        $soustitre = "policy";
        return view('frontviews.policy', compact('titre','soustitre'));
    }
    public function ourmission()
    {
        $titre = "Panvac-Our mission";
        $soustitre = "Our mission";
        return view('frontviews.ourmission', compact('titre','soustitre'));
    }
    public function mandates()
    {
        $titre = "Panvac-Mandates";
        $soustitre = "Mandates";
        return view('frontviews.mandates', compact('titre','soustitre'));
    }
    public function ourgovernance()
    {
        $titre = "Panvac-Our Governance";
        $soustitre = "Our Governance";
        return view('frontviews.ourgovernance', compact('titre','soustitre'));
    }
    public function internationalrecognitions()
    {
        $titre = "Panvac-international Recognitions";
        $soustitre = "international Recognitions";
        return view('frontviews.internationalrecognitions', compact('titre','soustitre'));
    }
}
