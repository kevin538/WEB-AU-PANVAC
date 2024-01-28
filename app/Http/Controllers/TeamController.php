<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        $teams = DB::table('teams')
            ->orderBy('id', 'DESC')
            ->get();
        $section = "Team";
        $titre = "Dashboard-Team";
        return view('backviews.teams.index', compact('section', 'titre', 'teams'));

    }
    public function destroy($id)
    {
        $album = Team::findOrFail($id);
        $album->delete();
        return redirect()->route('indexteam')->with('success', 'Element deleted Sucessfully !');

    }
    public function create()
    {
        $section = "Team";
        $titre = "Dashboard-Team";
        return view('backviews.teams.create', compact('section', 'titre'));

    }
    public function edit()
    {
        $section = "Team";
        $titre = "Dashboard-Team";
        return view('backviews.teams.edit', compact('section', 'titre'));

    }
    public function save(Request $request)
    {
        /* dd($request->all()); */
        try {

            $logo = $request->file('picture'); // Pour les fichiers, utilise 'file' au lieu de 'input'

            // Vérifier si un fichier a été téléchargé
            if ($logo) {
                // Valider le fichier (par exemple, vérifier s'il s'agit d'une image)
                $validatedData = $request->validate([
                    'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Exemple de validation pour une image
                ]);
                // Définir le nom du fichier
                $imageName = $logo->getClientOriginalName();

                $imagesFolder = public_path('teams');
                if (!file_exists($imagesFolder)) {
                    mkdir($imagesFolder, 0777, true);
                }
                try {
                    // Déplacer le fichier vers le répertoire public/images avec le nom 'logo'
                    $logo->move(public_path('teams'), $imageName);
                    // Insertion réussie
                } catch (\Exception $e) {
                    // Échec de l'insertion
                    dd($e->getMessage());
                }

            }

            $name = $request->input('name');
            $designationfr = $request->input('designationfr');
            $designationen = $request->input('designationen');

            $team = Team::create([
                'Name' => $name,
                'Designationfr' => $designationfr,
                'DesignationEn' => $designationen,
                'Picture' => $imageName,
                'Empty1' => ''
            ]);
            // Vérifier si l'insertion s'est bien passée
            if ($team) {
                
                return redirect()->route('indexteam')->with('success', 'The insertion was successfull !');
            } else {
                return redirect()->route('indexteam')->with('error', 'Something went wrong, try later.');
            }
        } catch (\Exception $e) {
            dd($e);
            // En cas d'erreur, tu peux traiter l'exception ici
            return redirect()->back()->with('error', 'An error occured.');
        }


    }
}