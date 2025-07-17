<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // For now, we'll create certificates without actual image files
        // Users can upload real images through the admin panel
        $certificates = [
            [
                'title' => 'ASP.NET Core Web API Development',
                'issuer' => 'Microsoft',
                'issue_date' => '2023-06-15',
                'certificate_url' => 'https://example.com/certificate1',
                'image_path' => null,
                'description' => 'ASP.NET Core Web API geliştirme konularında uzmanlaşma sertifikası',
                'sort_order' => 1,
                'is_active' => true
            ],
            [
                'title' => 'JavaScript ES6+ Programming',
                'issuer' => 'JavaScript Institute',
                'issue_date' => '2023-04-20',
                'certificate_url' => 'https://example.com/certificate2',
                'image_path' => null,
                'description' => 'Modern JavaScript programlama ve ES6+ özellikleri sertifikası',
                'sort_order' => 2,
                'is_active' => true
            ]
        ];

        foreach ($certificates as $certificate) {
            Certificate::create($certificate);
        }
    }
}
