<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experiences = [
            [
                'company_name' => 'Digi360 Reklamcılık',
                'position' => 'Backend Developer',
                'description' => 'Mikroservis mimarisinde geliştirilen kurumsal CRM platformu geliştirdik. Ben projede ağırlıklı olarak backend alanında görev aldım. Frontend ve devops ekibiyle ortak çalışma gerçekleştirdim.

Teknik Detaylar:
• Java 17 + Spring Boot 3 framework\'ü ile RESTful API geliştirildi
• 7 ayrı mikroservis geliştirildi
• Spring Cloud Gateway ile API Gateway implementasyonu
• Eureka Service Discovery entegre edildi
• Spring Cloud Config Server ile merkezi konfigürasyon yönetimi
• JPA/Hibernate ile PostgreSQL veritabanı entegrasyonu
• Docker containerization ve Docker Compose orkestrasyon
• JWT tabanlı authentication ve authorization
• Feign Client ile inter-service communication
• SLF4J ile logging sistemi

Kullanılan Teknolojiler:
• Backend: Java 17, Spring Boot, Spring Cloud, Spring Security, Spring Data JPA
• Database: PostgreSQL/MySQL, Hibernate ORM
• Containerization: Docker, Docker Compose
• Build Tool: Maven
• Service Discovery: Netflix Eureka
• API Gateway: Spring Cloud Gateway
• Configuration: Spring Cloud Config
• Authentication: JWT',
                'start_date' => '2024-01-01',
                'end_date' => '2024-06-01',
                'is_current' => false,
                'location' => 'İstanbul, Türkiye',
                'company_logo' => 'https://via.placeholder.com/100x100/007bff/ffffff?text=D360',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'company_name' => 'Jotform Yazılım A.Ş.',
                'position' => 'Backend Developer - Remote Intern',
                'description' => '2 kişilik bir ekiple AI destekli SQL sorusu üreten bir sistem tasarladık. Ben backend kısmında görev aldım. Sistemin özellikleri:
• Kullanıcının doğal dildeki sorularını analiz ederek veritabanı şemasına uygun SQL sorguları oluşturur ve sonuçları tablo halinde sunar.
• Kullanıcıların sorularını ve dönen cevap geçmişini kaydeder ve bu geçmişe erişim sağlar. Ayrıca eski konuşmalara da devam etme imkanı sunar.
• Kullanıcıya alternatif soru önerileri sunarak kullanıcı deneyimini iyileştirir.

Kullanılan Teknolojiler ve Araçlar:
• PHP
• OpenAI API
• MySQL
• cURL
• JSON
• Prompt Yazımı
• MVC Mimarisi',
                'start_date' => '2023-06-01',
                'end_date' => '2023-07-01',
                'is_current' => false,
                'location' => 'Remote',
                'company_logo' => 'https://via.placeholder.com/100x100/ff6600/ffffff?text=JF',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'company_name' => 'Mgs Software',
                'position' => 'Backend Developer - Intern',
                'description' => 'Laravel framework\'ü kullanılarak not yönetim sistemi geliştirdim. Projenin amacı, kullanıcıların notlarını dijital ortamda güvenli bir şekilde yönetebilmelerini sağlamaktır. Kullanıcılar, sisteme kayıt olup giriş yaptıktan sonra notlarını oluşturabilir, güncelleyebilir, görüntüleyebilir ve silebilirler. Ayrıca, kullanıcılar hesap bilgilerini de güncelleyebilirler. Proje, kullanıcı kimlik doğrulaması ve yetkilendirme işlemlerini de içermektedir.

Proje Detayları:
• Kullanıcı Yönetimi: Kullanıcılar sisteme kayıt olabilir, giriş yapabilir, hesap bilgilerini güncelleyebilir ve hesaplarını silebilirler.
• Not Yönetimi: Kullanıcılar not oluşturabilir, notlarını görüntüleyebilir, güncelleyebilir ve silebilirler.
• Kimlik Doğrulama ve Yetkilendirme: Laravel\'in kimlik doğrulama ve yetkilendirme mekanizmaları kullanılarak kullanıcıların güvenli bir şekilde sisteme giriş yapmaları sağlanmıştır.
• Veritabanı İlişkileri: Kullanıcılar ve notlar arasında "birçoktan bire" ilişkisi kurulmuştur. Her not bir kullanıcıya aittir.

Kullanılan Teknolojiler:
• PHP - Laravel
• MySQL
• Blade Templating Engine
• HTML/CSS
• Bootstrap
• JavaScript
• MVC Mimarisi

Proje Linki: https://notes.berkantkaraca.com.tr',
                'start_date' => '2023-03-01',
                'end_date' => '2023-04-01',
                'is_current' => false,
                'location' => 'İstanbul, Türkiye',
                'company_logo' => 'https://via.placeholder.com/100x100/28a745/ffffff?text=MGS',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'company_name' => 'Düzey E-Ticaret Hizmetleri',
                'position' => 'Operasyon Sorumlusu ve Site Editörlüğü',
                'description' => '• Hepsiburada, Trendyol, Amazon, Aliexpress platformları ve firmanın sitesindeki sipariş süreçlerinin takibinin yapılması.
• motoonline.com.tr\'deki içeriklerin düzenlenmesi, hataların raporlanması ve yeni eklenen işlevlerin test edilmesi.',
                'start_date' => '2022-01-01',
                'end_date' => '2022-08-01',
                'is_current' => false,
                'location' => 'İstanbul, Türkiye',
                'company_logo' => 'https://via.placeholder.com/100x100/dc3545/ffffff?text=DE',
                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}
