<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            // Backend Technologies
            [
                'name' => 'Java',
                'category' => 'backend',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=java',
                'description' => 'Enterprise uygulamalar geliştirmek için kullandığım güçlü programlama dili',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Spring Framework',
                'category' => 'backend',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=spring',
                'description' => 'Java tabanlı enterprise uygulamalar için kullandığım framework',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'C#',
                'category' => 'backend',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=cs',
                'description' => 'Microsoft teknolojileri ile uygulama geliştirmek için kullandığım dil',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => '.NET',
                'category' => 'backend',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=dotnet',
                'description' => 'Microsoft\'un modern web ve desktop uygulamalar için framework\'ü',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'PHP',
                'category' => 'backend',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=php',
                'description' => 'Web uygulamaları geliştirmek için kullandığım server-side dil',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Laravel',
                'category' => 'backend',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=laravel',
                'description' => 'PHP ile modern web uygulamaları geliştirmek için kullandığım framework',
                'sort_order' => 6,
                'is_active' => true,
            ],

            // Frontend Technologies
            [
                'name' => 'HTML',
                'category' => 'frontend',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=html',
                'description' => 'Web sayfalarının yapısını oluşturmak için kullandığım markup dili',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'CSS',
                'category' => 'frontend',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=css',
                'description' => 'Web sayfalarını stilize etmek için kullandığım style sheet dili',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'JavaScript',
                'category' => 'frontend',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=javascript',
                'description' => 'Web sayfalarını interaktif hale getirmek için kullandığım programlama dili',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Bootstrap',
                'category' => 'frontend',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=bootstrap',
                'description' => 'Responsive web tasarımı için kullandığım CSS framework\'ü',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'React',
                'category' => 'frontend',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=react',
                'description' => 'Modern kullanıcı arayüzleri geliştirmek için kullandığım JavaScript library',
                'sort_order' => 5,
                'is_active' => true,
            ],

            // Database Technologies
            [
                'name' => 'PostgreSQL',
                'category' => 'database',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=postgresql',
                'description' => 'Güçlü ve güvenilir ilişkisel veritabanı yönetim sistemi',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'MySQL',
                'category' => 'database',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=mysql',
                'description' => 'Yaygın kullanılan açık kaynak ilişkisel veritabanı',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'MongoDB',
                'category' => 'database',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=mongodb',
                'description' => 'NoSQL belge tabanlı veritabanı yönetim sistemi',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Redis',
                'category' => 'database',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=redis',
                'description' => 'Yüksek performanslı anahtar-değer depolama sistemi',
                'sort_order' => 4,
                'is_active' => true,
            ],

            // Tools & Other
            [
                'name' => 'Git',
                'category' => 'tools',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=git',
                'description' => 'Versiyon kontrol sistemi',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Docker',
                'category' => 'tools',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=docker',
                'description' => 'Konteynerizasyon teknolojisi',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Postman',
                'category' => 'tools',
                'icon_url' => 'https://skillicons.dev/icons?theme=dark&i=postman',
                'description' => 'API test ve geliştirme aracı',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
