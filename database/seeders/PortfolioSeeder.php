<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'E-Ticaret Sitesi',
                'technology' => 'ASP .Net Core',
                'description' => 'Modern mikroservis mimarisi ile geliştirilmiş e-ticaret platformudur. Projede CQRS (Command Query Responsibility Segregation), Mediator Pattern, Repository Pattern, Onion Architecture ve N-Layer Architecture gibi mimari tasarım desenleri kullanılmıştır.',
                'features' => 'Platform, güvenli kayıt/giriş sistemi ve JWT token tabanlı kimlik doğrulama ile kullanıcı yönetimi sağlar. Kategori bazlı ürün listeleme, arama ve filtreleme özellikleri ile ürün yönetimi sunar. Dinamik sepet yönetimi ve Redis ile performanslı cache sistemi ile sepet işlemlerini optimize eder. Kupon kodları ile esnek indirim mekanizması ve kapsamlı yönetim arayüzü, istatistikler ve raporlama içeren admin paneli bulunur.',
                'security_features' => 'Sistem, JWT Token Authentication ile güvenli oturum yönetimi, IdentityServer4 ile merkezi kimlik doğrulama servisi, CORS politikaları ile cross-origin güvenlik kontrolü, HTTPS/SSL ile güvenli veri iletimi ve role-based authorization ile rol bazlı yetkilendirme özelliklerini içerir.',
                'microservices' => "• API Gateway (Ocelot) => İstek yönlendirme\n• Identity Server => Kimlik doğrulama\n• Catalog => Ürün kataloğu\n• Discount => İndirim kuponları\n• Order => Sipariş yönetimi\n• Cargo => Kargo işlemleri\n• Basket => Sepet yönetimi\n• Comment => Ürün yorumları\n• Message => Mesajlaşma sistemi",
                'technologies_used' => "• Backend Framework: ASP.NET Core 6.0\n• Mimari: Mikroservis Mimarisi\n• API Gateway: Ocelot\n• Kimlik Yönetimi: IdentityServer4\n• Veritabanları: MongoDB (Catalog), Redis (Basket - NoSQL), MSSQL Server (Order, Cargo, Comment, Identity), PostgreSQL (Message)\n• ORM Teknolojileri: Entity Framework Core, Dapper\n• Container: Docker\n• Frontend: HTML5, CSS3, JavaScript, Bootstrap, Ajax",
                'github_url' => 'https://github.com/berkantkaraca/ECommerce',
                'demo_url' => null,
                'image_url' => null,
                'sort_order' => 1,
                'is_active' => true
            ],
            [
                'title' => 'Real Estate Platform',
                'technology' => 'ASP .Net Core',
                'description' => 'Kapsamlı emlak yönetim platformudur. Kullanıcılar emlak ilanlarını görüntüleyebilir, arama yapabilir ve emlak danışmanları ile iletişim kurabilir.',
                'features' => 'İlan arama ve filtreleme, emlak detay sayfaları, kullanıcı kayıt/giriş sistemi, emlak danışmanı profilleri, favoriler sistemi, gelişmiş harita entegrasyonu, fiyat hesaplayıcıları.',
                'security_features' => 'JWT Authentication, rol bazlı yetkilendirme, güvenli veri aktarımı, CAPTCHA koruması.',
                'microservices' => null,
                'technologies_used' => "• ASP.NET Core 6.0\n• Entity Framework Core\n• SQL Server\n• HTML5, CSS3, Bootstrap\n• JavaScript, jQuery\n• Google Maps API",
                'github_url' => 'https://github.com/berkantkaraca/RealEstate',
                'demo_url' => null,
                'image_url' => null,
                'sort_order' => 2,
                'is_active' => true
            ],
            [
                'title' => 'Hotel Booking System',
                'technology' => 'ASP .Net Core',
                'description' => 'Modern otel rezervasyon sistemi. Müşteriler otelleri arayabilir, rezervasyon yapabilir ve rezervasyonlarını yönetebilir.',
                'features' => 'Otel arama ve filtreleme, rezervasyon yönetimi, ödeme entegrasyonu, kullanıcı profil yönetimi, otel yönetici paneli, raporlama sistemi.',
                'security_features' => 'Güvenli ödeme sistemi, veri şifreleme, oturum yönetimi, rol bazlı erişim kontrolü.',
                'microservices' => null,
                'technologies_used' => "• ASP.NET Core 6.0\n• Entity Framework Core\n• SQL Server\n• Bootstrap, HTML5, CSS3\n• JavaScript, Ajax\n• Payment Gateway Integration",
                'github_url' => 'https://github.com/berkantkaraca/HotelBooking',
                'demo_url' => null,
                'image_url' => null,
                'sort_order' => 3,
                'is_active' => true
            ]
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}
