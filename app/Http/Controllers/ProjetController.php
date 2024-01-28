<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjetController extends Controller
{
    //
    public function index()
    {
        $news = DB::table('projects')
            ->orderBy('id', 'DESC')
            ->get();
        $section = "News";
        $titre = "Dashboard-News";
        return view('backviews.projets.index', compact('section', 'titre', 'news'));

    }
    public function destroy($id)
    {
        $album = Project::findOrFail($id);
        $album->delete();
        return redirect()->route('indexnews')->with('success', 'Element deleted Sucessfully !!');

    }
    public function create()
    {
        $section = "News";
        $titre = "Dashboard-News";

        return view('backviews.projets.create', compact('section', 'titre'));

    }
    public function save(Request $request)
    {
        
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
              
                $imagesFolder = public_path('news');
                if (!file_exists($imagesFolder)) {
                    mkdir($imagesFolder, 0777, true);
                }
                try {
                    // Déplacer le fichier vers le répertoire public/images avec le nom 'logo'
                    $logo->move(public_path('news'), $imageName);
                    // Insertion réussie
                } catch (\Exception $e) {
                    // Échec de l'insertion
                    dd($e->getMessage());
                }

            }

            $title = $request->input('title');
            $date = $request->input('date');
            $descriptionfr = $request->input('descriptionfr');
            $descriptionen = $request->input('descriptionen');


            $contact = Project::create([
                'Title' => $title,
                'DOT' => $date,
                'DescriptionFr' => $descriptionfr,
                'DescriptionEn' => $descriptionen,
                'Picture' => $imageName,

            ]);
            // Vérifier si l'insertion s'est bien passée
            if ($contact) {
                return redirect()->route('indexnews')->with('success', 'The insertion was successfull !');
            } else {
                return redirect()->route('indexnews')->with('error', 'Something went wrong, try later.');
            }
            // Redirection si l'insertion est réussie


        } catch (\Exception $e) {
            /* dd($e); */
            // En cas d'erreur, tu peux traiter l'exception ici
            return redirect()->back()->with('error', 'An error occured.');
        }

    }
}