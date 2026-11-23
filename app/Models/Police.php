<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Police extends Model
{
    use HasFactory;

    public const CATEGORY_ALIASES = [
        'National Police HQ' => ['National Police HQ', 'New Caledonian National Police (Polri) HQ'],
        'Gendarmerie National' => ['Gendarmerie National', 'Provincial Police (Polda)'],
        'Municipality Police' => ['Municipality Police', 'Municipality Police (Polres)'],
    ];

    protected $guarded = [];
}
