<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'NumeroTelephone',
        'emailContact',
        'companyEmail',
        'Address',
        'LienFacebook',
        'LienTwitter',
        'LienIntagram',
        'LienLinkedin',
        'TitleAboutUsFr',
        'TitleAboutUsEn',
        'AboutUsFr',
        'AboutUsEn',
        'Logo',
        'Empty1'
    ];
}
