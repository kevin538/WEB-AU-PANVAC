<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progresscertificat extends Model
{
    use HasFactory;

    protected $fillable = [
        'PanvacRef',
        'DateReceived',
        'DateExpected',
        'Status',
        'Stability',
        'Identity',
        'Sterility',
        'Potency',
        'Safety',
        'Code',
        'Empty1'
    ];
}
