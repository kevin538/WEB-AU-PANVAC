<?php
namespace App\Services;

use App\Models\Team;
use App\Models\Album;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Certificat;
use App\Models\Progresscertificat;

class DataService
{
    public function getGlobalData()
    {
        $latestContact = Contact::latest()->first();
        $image = Album::first();

        $countTeams = Team::count();
        $countservice = Service::count();
        $countalbum = Album::count();

        $certifiedCertificate = Certificat::count();
        $testinProgress = Progresscertificat::count();
        // Initialiser la variable globale
        $globalData = [];

        // Vérifier si un contact a été trouvé
        if ($latestContact) {
            // Ajouter les informations du contact à la variable globale
            $globalData['latestContact'] = [
                'NumeroTelephone' => $latestContact->NumeroTelephone,
                'companyEmail' => $latestContact->companyEmail,
                'emailContact' => $latestContact->emailContact,
                'LienFacebook' => $latestContact->LienFacebook,
                'LienTwitter' => $latestContact->LienTwitter,
                'LienIntagram' => $latestContact->LienIntagram,
                'LienLinkedin' => $latestContact->LienLinkedin,
                'Address' => $latestContact->Address,
                'Empty1' => $latestContact->Empty1,
                'Logo' => $latestContact->Logo,
                'ImageCarousel' => $image->Image,
                'NombreService' => $countservice,
                'NombreTeams' => $countTeams,
                'NombreAlbum' => $countalbum,
                'NombreCertifiedcertificate' => $certifiedCertificate,
                'Nombretestinprogrss' => $testinProgress

            ];
        }

        return $globalData;
    }
}