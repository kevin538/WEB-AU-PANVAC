<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParametreController extends Controller
{
    //
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function destroy($id)
    {
        try {
            // Récupère le contact que tu veux supprimer
            $contact = Contact::findOrFail($id);

            // Supprime le logo s'il existe
            $logoPath = public_path('images/' . $contact->Logo);
            if (file_exists($logoPath)) {
                unlink($logoPath);
            }

            // Supprime le contact de la base de données
            $contact->delete();

            // Redirection avec un message de succès
            return redirect()->back();
        } catch (\Exception $e) {
            // En cas d'erreur, tu peux traiter l'exception ici
            return redirect()->back();
        }
    }
    public function update(Request $request, $id)
    {
        /* dd($request->all()); */
        try {

            $contact = Contact::findOrFail($id);

            // Met à jour les champs avec les nouvelles valeurs
            $contact->companyEmail = $request->input('emailcontact');
            $contact->LienFacebook = $request->input('facebook');
            $contact->LienTwitter = $request->input('twitter');
            $contact->LienIntagram = $request->input('instagram');
            $contact->LienLinkedin = $request->input('linkedin');
            $contact->Address = $request->input('address');
            $contact->emailContact = $request->input('companyemail');
            $contact->Empty1 = $request->input('country');
            $contact->NumeroTelephone = $request->input('phonenumber');
            $contact->AboutUsFr = $request->input('aboutfr');
            $contact->AboutUsEn = $request->input('abouten');

            // Enregistre le logo si un fichier est téléchargé
            $logo = $request->file('logo');
            if ($logo) {
                $validatedData = $request->validate([
                    'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $logoNom = 'logo.' . $logo->getClientOriginalExtension();
                $imagesFolder = public_path('images');
                if (!file_exists($imagesFolder)) {
                    mkdir($imagesFolder, 0777, true);
                }
                $logo->move(public_path('images'), $logoNom);

                $contact->logo = $logoNom;
            }

            // Enregistre les modifications
            $contact->save();

            // Redirection avec un message de succès
            return redirect()->route('indexcontact')->with('success', 'The Edition was successfull !');
        } catch (\Exception $e) {
            // En cas d'erreur, tu peux traiter l'exception ici
            return redirect()->route('indexcontact')->with('error', 'Something went wrong, try later.');
        }
    }
    public function index()
    {
        $latestContact = DB::table('contacts')
            ->orderBy('id', 'DESC')
            ->first();
            $section = "Configuration";
            $titre = "Dashboard-Parameters";
        return view('backviews.contact.index', ['latestContact' => $latestContact], compact('section','titre'));

    }
    public function edit()
    {
        $section = "Config";
        $titre = "Dashboard-Parameters";
        return view('backviews.contact.edit', compact('section','titre'));

    }
    public function editif($id)
    {
        $section = "Edit";
        $titre = "Dashboard-Parameters";
        $contact = DB::table('contacts')->where('id', $id)->first();

        return view('backviews.contact.edif', ['id' => $contact], compact('section','titre'));

    }


    public function save(Request $request)
    {

        try {

            $logonamee = "";
            $logo = $request->file('logo'); // Pour les fichiers, utilise 'file' au lieu de 'input'

            // Vérifier si un fichier a été téléchargé
            if ($logo) {
                // Valider le fichier (par exemple, vérifier s'il s'agit d'une image)
                $validatedData = $request->validate([
                    'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Exemple de validation pour une image
                ]);

                // Définir le nom du fichier
                $logoNom = 'logo.' . $logo->getClientOriginalExtension();

                $logonamee = $logoNom;
                $imagesFolder = public_path('images');
                if (!file_exists($imagesFolder)) {
                    mkdir($imagesFolder, 0777, true);
                }
                try {
                    // Déplacer le fichier vers le répertoire public/images avec le nom 'logo'
                    $logo->move(public_path('images'), $logoNom);
                    // Insertion réussie
                } catch (\Exception $e) {
                    // Échec de l'insertion
                    dd($e->getMessage());
                }

            }

            $emailContact = $request->input('emailcontact');
            $facebook = $request->input('facebook');
            $twitter = $request->input('twitter');
            $instagram = $request->input('instagram');
            $linkedin = $request->input('linkedin');
            $address = $request->input('address');
            $companyEmail = $request->input('companyemail');
            $country = $request->input('country');
            $phoneNumber = $request->input('phonenumber');
            $aboutFr = $request->input('aboutfr');
            $aboutEn = $request->input('abouten');



            $contact = Contact::create([
                'emailContact' => $emailContact,
                'LienFacebook' => $facebook,
                'LienTwitter' => $twitter,
                'LienIntagram' => $instagram,
                'LienLinkedin' => $linkedin,
                'Address' => $address,
                'companyEmail' => $companyEmail,
                'country' => $country,
                'NumeroTelephone' => $phoneNumber,
                'AboutUsFr' => $aboutFr,
                'AboutUsEn' => $aboutEn,
                'Logo' => $logonamee,
                'Empty1' => $country

            ]);
            // Vérifier si l'insertion s'est bien passée
            if ($contact) {
                return redirect()->route('indexcontact')->with('success', 'The insertion was successfull !');
            } else {
                return redirect()->route('indexcontact')->with('error', 'Something went wrong, try later.');
            }
            // Redirection si l'insertion est réussie


        } catch (\Exception $e) {
            dd($e);
            // En cas d'erreur, tu peux traiter l'exception ici
            return redirect()->back()->with('error', 'An error occured.');
        }

    }
}