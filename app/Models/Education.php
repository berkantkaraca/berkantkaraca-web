<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'institution_name',
        'degree',
        'field_of_study',
        'start_date',
        'end_date',
        'description',
        'location',
        'gpa',
        'icon',
        'sort_order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
