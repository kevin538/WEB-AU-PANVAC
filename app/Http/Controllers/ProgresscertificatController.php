<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progresscertificat;
use Illuminate\Support\Facades\DB;

class ProgresscertificatController extends Controller
{
    //
    public function index()
    {
        $certificat = DB::table('progresscertificats')
            ->orderBy('id', 'DESC')
            ->get();

        $section = "Test-Progress";
        $titre = "Dashboard-Test-Progress";
        return view('backviews.testprogress.index', compact('section', 'titre', 'certificat'));

    }
    public function destroy($id)
    {
        $album = Progresscertificat::findOrFail($id);
        $album->delete();
        return redirect()->route('indextestinprogress')->with('success', 'Element deleted Sucessfully !!');

    }
    public function create()
    {
        $section = "Test-Progress";
        $titre = "Dashboard-Test-Progress";
        return view('backviews.testprogress.create', compact('section', 'titre'));

    }
    public function save(Request $request)
    {
        $section = "Test-Progress";
        $titre = "Dashboard-Test-Progress";


        $dernierCode = Progresscertificat::latest()->value('Code');
        if ($dernierCode) {
            // Extraire le numéro du code existant et l'incrémenter
            $numero = (int) substr($dernierCode, -6) + 1;
        } else {
            // Si aucun code n'existe, commencer à partir de 1
            $numero = 1;
        }
        $code = 'TestPanvac' . sprintf('%06d', $numero);

        /*  dd($code); */

        $panref = $request->input('panref');
        $daterec = $request->input('datereceived');
        $expdate = $request->input('expdate');
        $status = $request->input('status');

        $stability = $request->input('stability');
        $identity = $request->input('identity');
        $sterility = $request->input('sterility');

        $potency = $request->input('potency');
        $safety = $request->input('safety');

        // no code needed then the value od the code is, panvac reference number 
        
        $certificat = Progresscertificat::create([
            'PanvacRef' => $panref,
            'DateReceived' => $daterec,
            'DateExpected' => $expdate,
            'Status' => $status,
            'Stability' => $stability,
            'Identity' => $identity,
            'Sterility' => $sterility,
            'Potency' => $potency,
            'Safety' => $safety,
            'Code' => $panref
        ]);


        if ($certificat) {

            return redirect()->route('indextestinprogress')->with('success', 'The insertion was successfull !');
        } else {
            return redirect()->route('indextestinprogress')->with('error', 'Something went wrong, try later.');
        }
    }
}