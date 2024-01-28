<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'Title',
        'DOT',
        'DescriptionFr',
        'DescriptionEn',
        'Picture',
        'Empty1'
    ];
}
