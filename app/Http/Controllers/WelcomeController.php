<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        $news = DB::table('projects')
        ->orderBy('id', 'DESC')
        ->take(3)
        ->get();

        $service = DB::table('services')
        ->orderBy('id', 'DESC')
        ->take(6)
        ->get();

        $latestContact = DB::table('contacts')
            ->orderBy('id', 'DESC')
            ->first();
        $albums = DB::table('albums')
            ->orderBy('id', 'DESC')
            ->get();
        $teams = DB::table('teams')
            ->orderBy('id', 'DESC')
            ->get();
        $titre = "Home-Panvac";
        return view('welcome', compact('titre', 'albums','teams','latestContact','news','service'));

    }
}