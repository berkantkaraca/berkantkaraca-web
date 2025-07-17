<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Experience extends Model
{
    protected $fillable = [
        'company_name',
        'position',
        'description',
        'start_date',
        'end_date',
        'is_current',
        'location',
        'company_logo',
        'sort_order',
        'is_active'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function getFormattedDurationAttribute()
    {
        $start = $this->start_date;
        $end = $this->is_current ? now() : $this->end_date;
        
        if (!$end) {
            return $start->format('M Y') . ' - Devam Ediyor';
        }
        
        return $start->format('M Y') . ' - ' . ($this->is_current ? 'Devam Ediyor' : $end->format('M Y'));
    }
}
