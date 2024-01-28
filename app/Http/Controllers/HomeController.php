<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Album;
use App\Models\Service;
use App\Models\PageVisit;
use App\Models\Certificat;
use Illuminate\Http\Request;
use App\Models\Progresscertificat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $titre = "Dashboard-Panvac";
        $pageVisits = PageVisit::orderBy('created_at', 'desc')->paginate(6);;
        $countTeams = Team::count();
        $countservice = Service::count();
        $countalbum = Album::count();

        $certifiedCertificate = Certificat::count();
        $testinProgress = Progresscertificat::count();
        $section = "Stat";
        return view('home', compact('titre','section','pageVisits','countTeams','countservice','countalbum','certifiedCertificate','testinProgress'));
    }
}