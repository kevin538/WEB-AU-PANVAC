<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceFrontController extends Controller
{
    //
    public function qualitycontrolvaccine()
    {
        $titre = "AUPANVAC-Quality Control of Veterinary
        Vaccines";
        $soustitre = "Quality Control of Veterinary
        Vaccines";
        return view('frontviews.qualitycontrolvaccine', compact('titre','soustitre'));
    }
    public function productionsupply()
    {
        $titre = "AUPANVAC-Production and Supply of
        Diagnostics and Biologicals";
        $soustitre = "Production and Supply of
        Diagnostics and Biologicals";
        return view('frontviews.productionsupply', compact('titre','soustitre'));
    }
    public function capacitybuildinng()
    {
        $titre = "AUPANVAC-Capacity Building";
        $soustitre = "Capacity Building";
        return view('frontviews.capacitybuildinng', compact('titre','soustitre'));
    }
    public function inprovementvaccineproduction()
    {
        $titre = "AUPANVAC-Improvement of vaccine
        production";
        $soustitre = "Improvement of vaccine
        production";
        return view('frontviews.inprovementvaccineproduction', compact('titre','soustitre'));
    }
    public function repositories()
    {
        $titre = "AUPANVAC-Repositories";
        $soustitre = "Repositories";
        return view('frontviews.repositories', compact('titre','soustitre'));
    }
    public function supportsurveillance()
    {
        $titre = "AUPANVAC-Support Surveillance of animal
        Diseases";
        $soustitre = "Support Surveillance of animal
        Diseases";
        return view('frontviews.supportsurveillance', compact('titre','soustitre'));
    }
    public function onehealthsupport()
    {
        $titre = "AUPANVAC-ONE HEALTH Support";
        $soustitre = "ONE HEALTH Support";
        return view('frontviews.onehealthsupport', compact('titre','soustitre'));
    }

}
