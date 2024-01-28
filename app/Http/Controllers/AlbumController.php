<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function destroy($id)
    {
        $album = Album::findOrFail($id);
        $album->delete();
        return redirect()->route('indexcalbum')->with('success', 'Element deleted Sucessfully !');

    }
    public function index()
    {
        $albums = DB::table('albums')
            ->orderBy('id', 'DESC')
            ->get();
        $section = "Slider";
        $titre = "Dashboard-Slider";
        return view('backviews.album.index', compact('section', 'albums', 'titre'));

    }
    public function create()
    {
        $titre = "Dashboard-Slider";
        $section = "Slider";
        return view('backviews.album.create', compact('section', 'titre'));

    }
    public function save(Request $request)
    {
        /*  dd($request->all()); */

        try {

            $image = $request->file('Image'); // Pour les fichiers, utilise 'file' au lieu de 'input'

            // Vérifier si un fichier a été téléchargé
            if ($image) {
                // Valider le fichier (par exemple, vérifier s'il s'agit d'une image)
                $validatedData = $request->validate([
                    'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Exemple de validation pour une image
                ]);

                // Définir le nom du fichier
                $imageName = $image->getClientOriginalName();



                $imagesFolder = public_path('sliders');
                if (!file_exists($imagesFolder)) {
                    mkdir($imagesFolder, 0777, true);
                }
                try {
                    // Déplacer le fichier vers le répertoire public/sliders avec le nom 'logo'
                    $image->move(public_path('sliders'), $imageName);
                    // Insertion réussie
                } catch (\Exception $e) {
                    // Échec de l'insertion
                    dd($e->getMessage());
                }

            }


            $TitreFr = $request->input('TitreFr');
            $TitreEn = $request->input('TitreEn');
            $SloganFr = $request->input('SloganFr');
            $SloganEn = $request->input('SloganEn');
            $DescriptionFr = $request->input('DescriptionFr');
            $DescriptionEn = $request->input('DescriptionEn');
            $Empty1 = Album::count() + 1;

            $contact = Album::create([
                'TitreFr' => $TitreFr,
                'TitreEn' => $TitreEn,
                'SloganFr' => $SloganFr,
                'SloganEn' => $SloganEn,
                'DescriptionFr' => $DescriptionFr,
                'DescriptionEn' => $DescriptionEn,
                'Image' => $imageName,
                'Empty1' => $Empty1
            ]);
            // Vérifier si l'insertion s'est bien passée
            if ($contact) {
                return redirect()->route('indexcalbum')->with('success', 'The insertion was successfull !');

            } else {
                return redirect()->route('indexcalbum')->with('error', 'Something went wrong, try later.');

            }
            // Redirection si l'insertion est réussie
        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'An error occured.');
        }

    }
}