<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'category',
        'icon_url',
        'description',
        'sort_order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public static function getCategories()
    {
        return [
            'backend' => 'Backend',
            'frontend' => 'Frontend', 
            'database' => 'Database',
            'tools' => 'Tools',
        ];
    }

    public function getCategoryName()
    {
        $categories = self::getCategories();
        return $categories[$this->category] ?? ucfirst($this->category);
    }
}
