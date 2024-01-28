<?php

namespace App\Http\Controllers;

use App\Models\Certificat;
use Illuminate\Http\Request;
use App\Models\Progresscertificat;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //
    public function contact()
    {
        $titre = "AUPANVAC-Contact";
        return view('frontviews.contact', compact('titre'));
    }
    public function service()
    {
        $service = DB::table('services')
        ->orderBy('id', 'DESC')
        ->get();
        $titre = "AUPANVAC-Service";
        return view('frontviews.service', compact('titre','service'));
    }
    public function aboutus()
    {
        $latestContact = DB::table('contacts')
        ->orderBy('id', 'DESC')
        ->first();
        $teams = DB::table('teams')
            ->orderBy('id', 'DESC')
            ->get();
        $titre = "Our History";
        return view('frontviews.aboutus', compact('titre','latestContact','teams'));
    }
    public function news()
    {
        $news = DB::table('projects')
        ->orderBy('id', 'DESC')
        ->get();
        $titre = "AUPANVAC-Events";
        return view('frontviews.news', compact('titre','news'));
    }

    public function passedvaccines()
    {
        $news = DB::table('projects')
        ->orderBy('id', 'DESC')
        ->get();
        $titre = "AUPANVAC-Passed Vaccine";
        return view('frontviews.passedvaccines', compact('titre','news'));
    }

    public function testprogressvaccine()
    {
        $news = DB::table('projects')
        ->orderBy('id', 'DESC')
        ->get();
        $titre = "AUPANVAC-Test Progress Vaccine";
        return view('frontviews.testprogressvaccine', compact('titre','news'));
    }

    public function search($reference)
    {
        // Effectuer la recherche dans la table Certificats
        $certificat = Certificat::where('Code', $reference)->first();

        // Retourner le résultat (peut être un objet JSON dans le cas d'une API)
        return response()->json($certificat);
    }
    public function testprogres($reference)
    {
        // Effectuer la recherche dans la table Certificats
        $certificat = Progresscertificat::where('Code', $reference)->first();

        // Retourner le résultat (peut être un objet JSON dans le cas d'une API)
        return response()->json($certificat);
    }
}