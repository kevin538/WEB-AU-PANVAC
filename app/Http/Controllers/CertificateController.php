<?php

namespace App\Http\Controllers;

use App\Models\Certificat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificateController extends Controller
{
    //
    public function index()
    {
        $certificat = DB::table('certificats')
            ->orderBy('id', 'DESC')
            ->get();

        $section = "Certificate";
        $titre = "Dashboard-Certificate";
        return view('backviews.certificates.index', compact('section', 'titre', 'certificat'));

    }
    public function destroy($id)
    {
        $album = Certificat::findOrFail($id);
        $album->delete();
        return redirect()->route('indexcertificate')->with('success', 'Element deleted Sucessfully !!');

    }
    public function create()
    {
        $section = "Certificate";
        $titre = "Dashboard-Certificate";
        return view('backviews.certificates.create', compact('section', 'titre'));

    }
    public function save(Request $request)
    {
        $section = "Certificat";
        $titre = "Dashboard-Certificat";


        $dernierCode = Certificat::latest()->value('Code');
        if ($dernierCode) {
            // Extraire le numéro du code existant et l'incrémenter
            $numero = (int) substr($dernierCode, -6) + 1;
        } else {
            // Si aucun code n'existe, commencer à partir de 1
            $numero = 1;
        }
        $code = 'Panvac' . sprintf('%06d', $numero);

        /*  dd($code); */

        $panref = $request->input('panref');
        $sumby = $request->input('sumby');
        $prodby = $request->input('prodby');
        $vacctyp = $request->input('vacctyp');

        $batchnum = $request->input('batchnum');
        $proddate = $request->input('proddate');
        $expdate = $request->input('expdate');
        // no code needed then the value od the code is, panvac reference number
        $certificat = Certificat::create([
            'PanvacRef' => $panref,
            'DateProduction' => $proddate,
            'DateExpired' => $expdate,
            'SubmittedBy' => $vacctyp,
            'ProducedBy' => $panref,
            'VaccineType' => $vacctyp,
            'BatchNumber' => $batchnum,
            'Code' => $panref
        ]);

        if ($certificat) {

            return redirect()->route('indexcertificate')->with('success', 'The insertion was successfull !');
        } else {
            return redirect()->route('indexcertificate')->with('error', 'Something went wrong, try later.');
        }
    }
}