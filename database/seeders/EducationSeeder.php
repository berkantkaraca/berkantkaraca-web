<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educations = [
            [
                'institution_name' => 'Bandırma Onyedi Eylül Üniversitesi',
                'degree' => 'Lisans',
                'field_of_study' => 'Bilgisayar Mühendisliği',
                'start_date' => '2021',
                'end_date' => '2025',
                'description' => "Fakülte ve bölüm birincisi\nAgno: 3,79",
                'location' => 'Balıkesir, Türkiye',
                'gpa' => '3.79',
                'icon' => 'images/services/ui-ux.svg',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'institution_name' => 'Czestochowa University of Technology',
                'degree' => 'Erasmus+ Değişim Programı',
                'field_of_study' => 'Computer Science',
                'start_date' => '2024',
                'end_date' => '1 Dönem (4.5 ay)',
                'description' => "Erasmus+ Öğrenci Değişim Programı",
                'location' => 'Częstochowa, Polonya',
                'gpa' => null,
                'icon' => 'images/services/ui-ux.svg',
                'sort_order' => 2,
                'is_active' => true,
            ],
        ];

        foreach ($educations as $education) {
            Education::create($education);
        }
    }
}
