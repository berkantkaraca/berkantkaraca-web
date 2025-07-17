<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'phone' => '+90 (555) 123 45 67',
            'email' => 'berkant@example.com',
            'address' => 'İstanbul, Türkiye',
            'linkedin_url' => 'https://linkedin.com/in/berkantkaraca',
            'github_url' => 'https://github.com/berkantkaraca',
            'twitter_url' => 'https://twitter.com/berkantkaraca',
            'facebook_url' => 'https://facebook.com/berkantkaraca',
            'instagram_url' => 'https://instagram.com/berkantkaraca',
            'sort_order' => 1,
            'is_active' => true,
        ]);
    }
}
