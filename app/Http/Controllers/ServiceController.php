<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $service = DB::table('services')
            ->orderBy('id', 'DESC')
            ->get();

        $section = "Service";
        $titre = "Dashboard-Service";
        return view('backviews.services.index', compact('section', 'titre', 'service'));

    }
    public function destroy($id)
    {
        $album = Service::findOrFail($id);
        $album->delete();
        return redirect()->route('indexcservice')->with('success', 'Element deleted Sucessfully !!');

    }
    public function create()
    {
        $section = "Service";
        $titre = "Dashboard-Service";
        return view('backviews.services.create', compact('section', 'titre'));

    }

    public function save(Request $request)
    {
        $section = "Service";
        $titre = "Dashboard-Service";

        $TitreFr = $request->input('titrefr');
        $TitreEn = $request->input('titreen');
        $DescriptionFr = $request->input('descriptionfr');
        $DescriptionEn = $request->input('descriptionen');

        $team = Service::create([
            'TitreFr' => $TitreFr,
            'TitreEn' => $TitreEn,
            'DescriptionFr' => $DescriptionFr,
            'DescriptionEn' => $DescriptionEn
        ]);

        if ($team) {

            return redirect()->route('indexcservice')->with('success', 'The insertion was successfull !');
        } else {
            return redirect()->route('indexcservice')->with('error', 'Something went wrong, try later.');
        }
    }
}