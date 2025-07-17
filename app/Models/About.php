<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'description_tr',
        'description_en',
        'cv_tr_url',
        'cv_en_url',
        'cover_letter_tr_url',
        'cover_letter_en_url',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
