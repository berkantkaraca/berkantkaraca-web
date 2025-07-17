<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Education;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
        // Veritabanından verileri çek
        $about = About::first();
        $educations = Education::where('is_active', true)
                              ->orderBy('start_date', 'desc')
                              ->get();
        $skillsData = Skill::where('is_active', true)
                           ->orderBy('sort_order')
                           ->orderBy('name')
                           ->get()
                           ->groupBy('category');

        // Kategorileri istenen sırada düzenle
        $categoryOrder = ['backend', 'frontend', 'database', 'tools'];
        $skills = collect();
        
        foreach ($categoryOrder as $category) {
            if ($skillsData->has($category)) {
                $skills->put($category, $skillsData->get($category));
            }
        }

        return view('index', compact('about', 'educations', 'skills'));
    }
}
