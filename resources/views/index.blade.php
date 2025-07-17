<!DOCTYPE html>
<html lang="tr-TR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Berkant Karaca - Jr. Backend Developer & Bilgisayar Mühendisi | Portfolio</title>

  <!-- SEO Meta Tags -->
  <meta name="description" content="Berkant Karaca - Jr. Backend Developer ve Bilgisayar Mühendisi. Java, Spring Boot, .NET, PHP Laravel teknolojilerinde deneyimli. Mikroservis mimarisi ve web geliştirme projelerinde uzman.">
  <meta name="keywords" content="Berkant Karaca, Backend Developer, Java Developer, Spring Boot, Bilgisayar Mühendisi, .NET, PHP Laravel, Mikroservis, Web Geliştirme, Software Developer, Yazılım Geliştirici, Portfolio">
  <meta name="author" content="Berkant Karaca">
  <meta name="robots" content="index, follow">
  <meta name="language" content="tr">
  <meta name="revisit-after" content="7 days">

  <!-- Open Graph Meta Tags (Facebook, LinkedIn) -->
  <meta property="og:title" content="Berkant Karaca - Jr. Backend Developer & Bilgisayar Mühendisi">
  <meta property="og:description" content="Java, Spring Boot, .NET, PHP Laravel teknolojilerinde deneyimli Backend Developer. Mikroservis mimarisi ve web geliştirme projelerinde uzman.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://berkantkaraca.com.tr">
  <meta property="og:image" content="https://berkantkaraca.com.tr/images/avatar.jpg">
  <meta property="og:image:alt" content="Berkant Karaca - Backend Developer">
  <meta property="og:site_name" content="Berkant Karaca Portfolio">
  <meta property="og:locale" content="tr_TR">

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Berkant Karaca - Jr. Backend Developer & Bilgisayar Mühendisi">
  <meta name="twitter:description" content="Java, Spring Boot, .NET, PHP Laravel teknolojilerinde deneyimli Backend Developer. Mikroservis mimarisi ve web geliştirme projelerinde uzman.">
  <meta name="twitter:image" content="https://berkantkaraca.com.tr/images/avatar.jpg">
  <meta name="twitter:image:alt" content="Berkant Karaca - Backend Developer">

  <!-- Additional Meta Tags -->
  <meta name="theme-color" content="#007bff">
  <meta name="msapplication-TileColor" content="#007bff">
  <meta name="application-name" content="Berkant Karaca Portfolio">

  <!-- Canonical URL -->
  <link rel="canonical" href="https://berkantkaraca.com.tr">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
  <link rel="preload" as="style"
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print"
    onload="this.media='all'" />
  <noscript>
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" />
  </noscript>

  <!-- Critical CSS Inline for Above-the-fold Content -->
  <style>
    /* Critical CSS for initial render */
    body {
      font-family: "Nunito Sans", sans-serif;
      margin: 0;
      padding: 0;
    }

    .navbar {
      background-color: #f8f9fa !important;
    }

    .navbar-brand {
      font-weight: 700;
    }

    .cover {
      background-color: #f8f9fa;
      padding: 2rem 0;
    }

    .avatar {
      border-radius: 50%;
      max-width: 100%;
      height: auto;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .container {
      max-width: 1140px;
      margin: 0 auto;
      padding: 0 15px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -15px;
    }

    .col-lg-6 {
      flex: 0 0 50%;
      max-width: 50%;
      padding: 0 15px;
    }

    @media (max-width: 991px) {
      .col-lg-6 {
        flex: 0 0 100%;
        max-width: 100%;
      }
    }
  </style>

  <!-- Preload critical resources -->
  <link rel="preload" href="{{ asset('css/main.css') }}?ver=1.2.0" as="style" onload="this.onload=null;this.rel='stylesheet'">

  <!-- Non-critical CSS - Load asynchronously -->
  <link rel="preload" href="{{ asset('css/bootstrap.min.css') }}?ver=1.2.0" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="{{ asset('css/font-awesome/css/all.min.css') }}?ver=1.2.0" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}?ver=1.2.0" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="preload" href="{{ asset('css/aos.css') }}?ver=1.2.0" as="style" onload="this.onload=null;this.rel='stylesheet'">

  <!-- Fallback for browsers without JS -->
  <noscript>
    <link href="{{ asset('css/bootstrap.min.css') }}?ver=1.2.0" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/all.min.css') }}?ver=1.2.0" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}?ver=1.2.0" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}?ver=1.2.0" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}?ver=1.2.0" rel="stylesheet">
  </noscript>

  <!-- CSS Loading Script -->
  <script>
    // Function to load CSS files after initial render
    function loadCSS(href) {
      var link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = href;
      document.head.appendChild(link);
    }

    // Load remaining CSS after DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
      // Delay non-critical CSS loading
      setTimeout(function() {
        if (!document.querySelector('link[href*="bootstrap.min.css"]')) {
          loadCSS('{{ asset("css/bootstrap.min.css") }}?ver=1.2.0');
        }
        if (!document.querySelector('link[href*="all.min.css"]')) {
          loadCSS('{{ asset("css/font-awesome/css/all.min.css") }}?ver=1.2.0');
        }
      }, 100);
    });
  </script>
  <noscript>
    <style type="text/css">
      [data-aos] {
        opacity: 1 !important;
        transform: translate(0) scale(1) !important;
      }
    </style>
  </noscript>
</head>

<body id="top">

  <header class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
      <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="#">Berkant Karaca</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-2">
            <li class="nav-item"><a class="nav-link" href="#about">Hakkımda</a></li>
            <li class="nav-item"><a class="nav-link" href="#education">Eğitim</a></li>
            <li class="nav-item"><a class="nav-link" href="#skills">Yetenekler</a></li>
            <li class="nav-item"><a class="nav-link" href="#experience">Deneyimler</a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio">Projeler</a></li>
            <li class="nav-item"><a class="nav-link" href="#certificate">Sertifikalar</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">İletişim</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <div class="page-content">
    <div id="content">

      <div class="cover bg-light">
        <div class="container px-3">
          <div class="row">
            <div class="col-lg-6 p-2"><img class="avatar img-fluid mt-2 ms-5" src="{{ asset('images/avatar.webp') }}" width="450" height="500" alt="Berkant Karaca - Jr. Backend Developer ve Bilgisayar Mühendisi Profil Fotoğrafı" fetchpriority="high" /></div>
            <div class="col-lg-6">
              <div class="mt-5">
                <p class="lead text-uppercase mb-1" data-aos="fade-right">Merhaba!</p>
                <h1 class="intro-title marker" data-aos="fade-left">Ben, Berkant Karaca</h1>
                <p class="lead fw-normal mt-3" data-aos="fade-up">Jr. Backend Developer & Bilgisayar Mühendisi</p>
                <div class="social-nav" data-aos="fade-up">
                  <nav role="navigation">
                    <ul class="nav justify-content-left">
                      <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/berkantkaraca" title="LinkedIn"
                          target="_blank">
                          <i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="https://www.github.com/berkantkaraca" title="Github"
                          target="_blank">
                          <i class="fab fa-github"></i><span class="menu-title sr-only">Github</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="mt-3" data-aos="fade-up">
                  <a class="btn btn-primary shadow-sm mt-1 hover-effect" href="#contact">İletişime Geç <i
                      class="fas fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="wave-bg"></div>

      <div class="section pt-4 px-3 px-lg-4" id="about">
        <div class="container-narrow">
          <div class="row">
            <div class="col-md-8" data-aos="fade-right" data-aos-delay="100">
              <h2 class="h4 my-2">Berkant Karaca Kimdir?</h2>
              <p>
                Bilgisayar Mühendisliği lisans eğitimimi mühendislik fakültesi birinciliği ile tamamladım. Erasmus+ Öğrenci Değişim Programı kapsamında Polonya'da bir dönem eğitim alarak akademik ve kültürel anlamda uluslararası deneyim kazandım. Öğrencilik hayatım boyunca disiplinli çalışma alışkanlığım, öğrenmeye olan isteğim ve azmim sayesinde hem akademik hem de kişisel gelişimime sürekli katkı sağladım.
              </p>
              <p>
                Öğrenmeye açık, disiplinli, sorumluluk sahibi ve ekip çalışmalarında etkili biriyim. Yazılım geliştirme süreçlerine ilgi duyuyor, özellikle backend alanında kendimi geliştiriyorum. Hedefim; teknolojiyi yakından takip eden, yenilikçi projelerde aktif rol alan ve çalıştığım kurumlara değer katan bir yazılım geliştirici olmaktır.
              </p>

            </div>
            <div class="col-md-3 offset-md-1 d-flex flex-column justify-content-center" data-aos="fade-left" data-aos-delay="100">
              <div class="text-center">
                <img src="https://flagcdn.com/w40/tr.png" alt="Türk Bayrağı" width="36" height="20">
                Türkçe
              </div>
              <button class="btn btn-primary shadow-sm mt-1 hover-effect tr-cv-button text-start"><i class="fas fa-download me-2"></i>Özgeçmiş</button>
              <button class="btn btn-primary shadow-sm mt-1 hover-effect tr-mektup-button text-start"><i class="fas fa-download me-2"></i>Niyet Mektubu</button>
              <br>


              <div class="text-center mt-2">
                <img src="https://flagcdn.com/w40/gb.png" alt="İngiliz Bayrağı" width="36" height="20">
                English
              </div>
              <button class="btn btn-primary shadow-sm mt-1 hover-effect en-cv-button text-start"><i class="fas fa-download me-2"></i>CV</button>
              <button class="btn btn-primary shadow-sm mt-1 hover-effect en-letter-button text-start"><i class="fas fa-download me-2"></i>Cover Letter</button>
            </div>

          </div>
        </div>
      </div>

      <div class="section px-3 px-lg-4 pt-5" id="education">
        <div class="container-narrow">
          <div class="text-center mb-5">
            <h2 class="marker marker-center">Eğitim Bilgilerim</h2>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                <div class="card-header px-3 py-2">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h3 class="h5 mb-1">Bandırma Onyedi Eylül Üniversitesi</h3>
                      <div class="h6 mb-1">Bilgisayar Mühendisliği </div>
                      <div class="text-muted text-small">2021 – 2025</div>
                    </div><img src="{{ asset('images/services/ui-ux.svg') }}" width="48" height="48" alt="ui-ux" />
                  </div>
                </div>
                <div class="card-body px-3">
                  <ul>
                    <li>Fakülte ve bölüm birincisi </li>
                    <li>Agno: 3,79</li>
                    <li>Balıkesir, Türkiye</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-3" data-aos="fade-left" data-aos-delay="100">
                <div class="card-header px-3 py-2">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h3 class="h5 mb-1">Czestochowa University of Technology</h3>
                      <div class="h6 mb-1">Computer Science</div>
                      <div class="text-muted text-small">1 Dönem (4.5 ay)</div>
                    </div><img src="{{ asset('images/services/ui-ux.svg') }}" width="48" height="48" alt="app development" />
                  </div>
                </div>
                <div class="card-body px-3 py-3">
                  <ul>
                    <li>Erasmus+ Öğrenci Değişim Programı</li>
                    <li>Częstochowa, Polonya</li>
                    <br>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section px-3 px-lg-4 pt-5" id="skills">
        <div class="container-narrow">
          <div class="text-center mb-5">
            <h2 class="marker marker-center">Deneyimlediğim Teknolojiler</h2>
          </div>
          <div class="text-center">
            <p class="mx-auto mb-3" style="max-width:600px">Projeler geliştirirken deneyimlediğim teknolojileri
              inceleyebilirsiniz.</p>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3" data-aos="fade-right" data-aos-delay="200">
              <div class="card h-100">
                <div class="card-body text-center">
                  <h5 class="card-title">Backend</h5>
                  <div class="d-flex flex-wrap justify-content-center">
                    <img src="https://skillicons.dev/icons?theme=dark&i=java" alt="Java Backend Programlama Dili - Enterprise Uygulamalar için Güçlü Platform" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=spring" alt="Spring Framework - Java için Profesyonel Backend Geliştirme Çerçevesi" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=cs" alt="C# Programlama Dili - Microsoft .NET Ekosistemi için Modern Backend Teknolojisi" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=dotnet" alt=".NET Framework - Microsoft'un Güçlü Backend Geliştirme Platformu" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=php" alt="PHP Backend Programlama - Web Sunucu Tarafı Geliştirme Teknolojisi" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=laravel" alt="Laravel PHP Framework - Modern Web Uygulamaları için Profesyonel Backend Çerçevesi" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3" data-aos="fade-right" data-aos-delay="100">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title text-center">Frontend</h5>
                  <div class="d-flex flex-wrap justify-content-center">
                    <img src="https://skillicons.dev/icons?theme=dark&i=html" alt="HTML5 - Modern Web Sayfası Yapısı ve Semantik İşaretleme Dili" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=css" alt="CSS3 - Web Tasarımı ve Responsive Stil Düzenleme Teknolojisi" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=js" alt="JavaScript - İnteraktif Web Uygulamaları için Frontend Programlama Dili" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=bootstrap" alt="Bootstrap CSS Framework - Responsive Web Tasarımı için Hızlı Geliştirme Çerçevesi" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=react" alt="React.js - Modern Kullanıcı Arayüzleri için Component Tabanlı JavaScript Kütüphanesi" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3" data-aos="fade-left" data-aos-delay="100">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title text-center">Database</h5>
                  <div class="d-flex flex-wrap justify-content-center">
                    <img src="https://skillicons.dev/icons?theme=dark&i=postgres" alt="PostgreSQL - Güçlü Açık Kaynak İlişkisel Veritabanı Yönetim Sistemi" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=mysql" alt="MySQL - Popüler İlişkisel Veritabanı için Hızlı ve Güvenilir RDBMS" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=mongodb" alt="MongoDB - Esnek NoSQL Doküman Tabanlı Veritabanı Teknolojisi" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=redis" alt="Redis - Yüksek Performanslı In-Memory Veri Yapısı ve Cache Sunucusu" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://www.svgrepo.com/show/303229/microsoft-sql-server-logo.svg" alt="Microsoft SQL Server - Enterprise Düzeyde İlişkisel Veritabanı Platformu" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://profilinator.rishav.dev/skills-assets/oracle-original.svg" alt="Oracle Database - Kurumsal Uygulamalar için Güçlü Veritabanı Çözümü" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3" data-aos="fade-left" data-aos-delay="200">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title text-center">Tools</h5>
                  <div class="d-flex flex-wrap justify-content-center">
                    <img src="https://skillicons.dev/icons?theme=dark&i=git" alt="Git Versiyon Kontrol - Kod Yönetimi ve İşbirliği için Dağıtık Versiyon Sistemi" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=docker" alt="Docker Container - Uygulamaları Paketleme ve Deploy için Modern Konteyner Teknolojisi" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://skillicons.dev/icons?theme=dark&i=postman" alt="Postman API - REST API Geliştirme ve Test için Profesyonel Araç" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/swagger/swagger-original.svg" alt="Swagger OpenAPI - API Dokümantasyonu ve Test için Standart Çerçeve" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                    <img src="https://profilinator.rishav.dev/skills-assets/xampp.png" alt="XAMPP Local Server - PHP MySQL Apache Geliştirme için Yerel Sunucu Paketi" height="40" style="margin-right: 5px; margin-bottom: 5px;" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section px-3 px-lg-4 pt-5" id="experience">
        <div class="container-narrow">
          <div class="text-center mb-5">
            <h2 class="marker marker-center">Deneyimlerim</h2>
          </div>
          <div class="row">

            <div class="row">
              <div class="col-md-12">
                <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                  <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h3 class="h5 mb-1">Backend Developer</h3>
                        <div class="text-muted text-small">Digi360 Reklamcılık <small>(5 Ay)</small></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-3">

                    <p>Mikroservis mimarisinde geliştirilen kurumsal CRM platformu geliştirdik. Ben projede ağırlıklı olarak backend alanında görev aldım. Frontend ve devops ekibiyle ortak çalışma gerçekleştirdim.</p>

                    <p>Teknik Detaylar:</p>
                    <ul>
                      <li>Java 17 + Spring Boot 3 framework'ü ile RESTful API geliştirildi</li>
                      <li>7 ayrı mikroservis geliştirildi</li>
                      <li>Spring Cloud Gateway ile API Gateway implementasyonu</li>
                      <li>Eureka Service Discovery entegre edildi</li>
                      <li>Spring Cloud Config Server ile merkezi konfigürasyon yönetimi</li>
                      <li>JPA/Hibernate ile PostgreSQL veritabanı entegrasyonu</li>
                      <li>Docker containerization ve Docker Compose orkestrasyon</li>
                      <li>JWT tabanlı authentication ve authorization</li>
                      <li>Feign Client ile inter-service communication</li>
                      <li>SLF4J ile logging sistemi</li>
                    </ul>

                    <p>Kullanılan Teknolojiler:</p>
                    <ul>
                      <li><strong>Backend:</strong> Java 17, Spring Boot, Spring Cloud, Spring Security, Spring Data JPA</li>
                      <li><strong>Database:</strong> PostgreSQL/MySQL, Hibernate ORM</li>
                      <li><strong>Containerization:</strong> Docker, Docker Compose</li>
                      <li><strong>Build Tool:</strong> Maven</li>
                      <li><strong>Service Discovery:</strong> Netflix Eureka</li>
                      <li><strong>API Gateway:</strong> Spring Cloud Gateway</li>
                      <li><strong>Configuration:</strong> Spring Cloud Config</li>
                      <li><strong>Authentication:</strong> JWT</li>
                    </ul>

                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card mb-3" data-aos="fade-left" data-aos-delay="100">
                  <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h3 class="h5 mb-1">Backend Developer - Remote Intern</h3>
                        <div class="text-muted text-small">Jotform Yazılım A.Ş. <small>(1 Ay)</small></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-3">
                    <p>2 kişilik bir ekiple AI destekli SQL sorusu üreten bir sistem tasarladık. Ben backend kısmında görev aldım. Sistemin özellikleri:</p>
                    <ul>
                      <li>Kullanıcının doğal dildeki sorularını analiz ederek veritabanı şemasına uygun SQL sorguları oluşturur ve sonuçları tablo halinde sunar.</li>
                      <li>Kullanıcıların sorularını ve dönen cevap geçmişini kaydeder ve bu geçmişe erişim sağlar. Ayrıca eski konuşmalara da devam etme imkanı sunar.</li>
                      <li>Kullanıcıya alternatif soru önerileri sunarak kullanıcı deneyimini iyileştirir.</li>
                    </ul>

                    <p>Kullanılan Teknolojiler ve Araçlar:</p>
                    <ul>
                      <li>PHP</li>
                      <li>OpenAI API</li>
                      <li>MySQL</li>
                      <li>cURL</li>
                      <li>JSON</li>
                      <li>Prompt Yazımı</li>
                      <li>MVC Mimarisi</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                  <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h3 class="h5 mb-1">Backend Developer - Intern</h3>
                        <div class="text-muted text-small">Mgs Software <small>(1 Ay)</small></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-3 py-3">
                    <p>
                      Laravel framework'ü kullanılarak not yönetim sistemi geliştirdim. Projenin amacı, kullanıcıların notlarını dijital ortamda güvenli bir şekilde yönetebilmelerini sağlamaktır. Kullanıcılar, sisteme kayıt olup giriş yaptıktan sonra notlarını oluşturabilir, güncelleyebilir, görüntüleyebilir ve silebilirler. Ayrıca, kullanıcılar hesap bilgilerinide güncelleyebilirler. Proje, kullanıcı kimlik doğrulaması ve yetkilendirme işlemlerini de içermektedir.
                    </p>

                    <p>Proje Detayları:</p>
                    <ul>
                      <li><strong>Kullanıcı Yönetimi:</strong> Kullanıcılar sisteme kayıt olabilir, giriş yapabilir, hesap bilgilerini güncelleyebilir ve hesaplarını silebilirler.</li>
                      <li><strong>Not Yönetimi:</strong> Kullanıcılar not oluşturabilir, notlarını görüntüleyebilir, güncelleyebilir ve silebilirler.</li>
                      <li><strong>Kimlik Doğrulama ve Yetkilendirme:</strong> Laravel'in kimlik doğrulama ve yetkilendirme mekanizmaları kullanılarak kullanıcıların güvenli bir şekilde sisteme giriş yapmaları sağlanmıştır.</li>
                      <li><strong>Veritabanı İlişkileri:</strong> Kullanıcılar ve notlar arasında "birçoktan bire" ilişkisi kurulmuştur. Her not bir kullanıcıya aittir.</li>
                    </ul>

                    <p>Kullanılan Teknolojiler:</p>
                    <ul>
                      <li>PHP - Laravel</li>
                      <li>MySQL</li>
                      <li>Blade Templating Engine</li>
                      <li>HTML/CSS</li>
                      <li>Bootstrap</li>
                      <li>JavaScript</li>
                      <li>MVC Mimarisi</li>
                    </ul>
                    <a href="https://notes.berkantkaraca.com.tr" class="btn btn-primary" target="_blank">Projeyi incele</a>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card mb-3" data-aos="fade-left" data-aos-delay="100">
                  <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h3 class="h5 mb-1">Operasyon Sorumlusu ve Site Editörlüğü</h3>
                        <div class="text-muted text-small">Düzey E-Ticaret Hizmetleri <small>(7 Ay)</small></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-3 py-3">
                    <ul>
                      <li>Hepsiburada, Trendyol, Amazon, Aliexpress platformları ve firmanın sitesindeki sipariş
                        süreçlerinin takibinin yapılması.</li>
                      <li>motoonline.com.tr’deki içeriklerin düzenlenmesi, hataların raporlanması ve yeni eklenen işlevlerin
                        test edilmesi.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section px-3 px-lg-4 pt-5" id="portfolio">
          <div class="container-narrow">
            <div class="text-center mb-5">
              <h2 class="marker marker-center">Projelerim</h2>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                  <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h3 class="h5 mb-1">E-Ticaret Sitesi </h3>
                        <div class="text-muted text-small">ASP .Net Core</div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-3 py-2">

                    <p>Modern mikroservis mimarisi ile geliştirilmiş e-ticaret platformudur. Projede CQRS (Command Query Responsibility Segregation), Mediator Pattern, Repository Pattern, Onion Architecture ve N-Layer Architecture gibi mimari tasarım desenleri kullanılmıştır.</p>

                    <p><strong>Temel Özellikler:</strong> Platform, güvenli kayıt/giriş sistemi ve JWT token tabanlı kimlik doğrulama ile kullanıcı yönetimi sağlar. Kategori bazlı ürün listeleme, arama ve filtreleme özellikleri ile ürün yönetimi sunar. Dinamik sepet yönetimi ve Redis ile performanslı cache sistemi ile sepet işlemlerini optimize eder. Kupon kodları ile esnek indirim mekanizması ve kapsamlı yönetim arayüzü, istatistikler ve raporlama içeren admin paneli bulunur.</p>

                    <p><strong>Güvenlik Özellikleri:</strong> Sistem, JWT Token Authentication ile güvenli oturum yönetimi, IdentityServer4 ile merkezi kimlik doğrulama servisi, CORS politikaları ile cross-origin güvenlik kontrolü, HTTPS/SSL ile güvenli veri iletimi ve role-based authorization ile rol bazlı yetkilendirme özelliklerini içerir.</p>

                    <p>Mikroservis Yapısı:</p>
                    <ul>
                      <li><strong>API Gateway (Ocelot)</strong> => İstek yönlendirme</li>
                      <li><strong>Identity Server</strong> => Kimlik doğrulama</li>
                      <li><strong>Catalog</strong> => Ürün kataloğu</li>
                      <li><strong>Discount</strong> => İndirim kuponları</li>
                      <li><strong>Order</strong> => Sipariş yönetimi</li>
                      <li><strong>Cargo</strong> => Kargo işlemleri</li>
                      <li><strong>Basket</strong> => Sepet yönetimi</li>
                      <li><strong>Comment</strong> => Ürün yorumları</li>
                      <li><strong>Message</strong> => Mesajlaşma sistemi</li>
                    </ul>

                    <p>Kullanılan Teknolojiler:</p>
                    <ul>
                      <li><strong>Backend Framework:</strong> ASP.NET Core 6.0</li>
                      <li><strong>Mimari:</strong> Mikroservis Mimarisi</li>
                      <li><strong>API Gateway:</strong> Ocelot</li>
                      <li><strong>Kimlik Yönetimi:</strong> IdentityServer4</li>
                      <li><strong>Veritabanları:</strong>MongoDB (Catalog), Redis (Basket - NoSQL), MSSQL Server (Order, Cargo, Comment, Identity), PostgreSQL (Message)</li>
                      <li><strong>ORM Teknolojileri:</strong> Entity Framework Core, Dapper</li>
                      <li><strong>Container:</strong> Docker</li>
                      <li><strong>Frontend:</strong> HTML5, CSS3, JavaScript, Bootstrap, Ajax</li>
                    </ul>
                    <a href="https://github.com/berkantkaraca/ECommerce" class="btn btn-primary" target="_blank">Projeyi incele</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="section px-3 px-lg-4 pt-5" id="certificate">
          <div class="container-narrow">
            <div class="text-center mb-5">
              <h2 class="marker marker-center">Sertifikalarım</h2>
            </div>
            <div class="text-center">
              <p class="mx-auto mb-3" style="max-width:600px">
                Sertifikaları üzerine tıklayarak detaylı inceleyebilirsiniz.
              </p>
            </div>
            <div class="row">
              @php
                $certificatesPath = public_path('images/certificates');
                $certificates = [];
                if (is_dir($certificatesPath)) {
                  $files = array_diff(scandir($certificatesPath), array('.', '..'));
                  $certificates = array_filter($files, function($file) use ($certificatesPath) {
                    return is_file($certificatesPath . '/' . $file) && in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif', 'webp']);
                  });
                }
              @endphp
              
              @forelse($certificates as $certificate)
                <div class="col-md-3 mb-4">
                  <div class="card" data-aos="fade" data-aos-delay="100">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#certificateModal" data-bs-image="{{ asset('images/certificates/' . $certificate) }}" class="image-hover">
                      <img src="{{ asset('images/certificates/' . $certificate) }}" class="card-img-top" style="object-fit: cover; width: 235px; height: 166px;" alt="Certificate" loading="lazy">
                      <div class="overlay"><i class="fas fa-search-plus"></i></div>
                    </a>
                  </div>
                </div>
              @empty
                <div class="col-12">
                  <div class="text-center">
                    <p class="text-muted">Henüz sertifika eklenmemiş.</p>
                  </div>
                </div>
              @endforelse
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="certificateModalLabel">Sertifika</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img id="modalImage" src="" class="img-fluid" alt="Certificate">
              </div>
            </div>
          </div>
        </div>

        <script>
          var certificateModal = document.getElementById('certificateModal');
          certificateModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var imageSrc = button.getAttribute('data-bs-image');
            var modalImage = certificateModal.querySelector('#modalImage');
            modalImage.src = imageSrc;
          });
        </script>

        <style>
          .image-hover {
            position: relative;
            display: block;
          }

          .image-hover img {
            transition: transform 0.3s ease;
          }

          .image-hover:hover img {
            transform: scale(1.05);
          }

          .image-hover .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
          }

          .image-hover:hover .overlay {
            opacity: 1;
          }

          .image-hover .overlay i {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            padding: 10px;
            color: white;
          }
        </style>

        <div class="section px-3 px-lg-4 pb-4 pt-5 mb-5" id="contact">
          <div class="container-narrow">
            <div class="text-center mb-5">
              <h2 class="marker marker-center">İletişime Geç</h2>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                  <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                      <h3 class="h5 mb-1"><i class="bi bi-telephone"></i> Telefon</h3>
                    </div>
                  </div>
                  <div class="card-body px-3 py-2">
                    <a href="tel:+905393480388" style="text-decoration: none;">+90 539 348 03 88</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-3" data-aos="fade-left" data-aos-delay="100">
                  <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                      <h3 class="h5 mb-1"><i class="bi bi-envelope"></i> E-posta</h3>
                    </div>
                  </div>
                  <div class="card-body px-3 py-2">
                    <a style="text-decoration: none;" href="mailto:berkantkaracatr@gmail.com">berkantkaracatr@gmail.com</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
                  <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                      <h3 class="h5 mb-1"><i class="bi bi-geo-alt"></i> Adres</h3>
                    </div>
                  </div>
                  <div class="card-body px-3 py-2">
                    Başakşehir, İstanbul, Türkiye
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-3" data-aos="fade-left" data-aos-delay="200">
                  <div class="card-header px-3 py-2">
                    <div class="d-flex justify-content-between">
                      <h3 class="h5 mb-1"><i class="bi bi-globe"></i> Sosyal Medya</h3>
                    </div>
                  </div>
                  <div class="card-body px-3 py-2">
                    <a class="nav-link d-inline" href="https://www.linkedin.com/in/berkantkaraca" title="LinkedIn"
                      target="_blank">
                      <i class="fab fa-linkedin"></i> LinkedIn
                    </a>
                    <a class="nav-link d-inline" href="https://www.github.com/berkantkaraca" title="Github" target="_blank">
                      <i class="fab fa-github"></i> Github
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <footer class="pt-4 pb-4 text-center bg-light">
      <div class="container">
        <div class="my-3">
          <div class="h4">Berkant Karaca</div>
          <p>Jr. Backend Developer & Bilgisayar Mühendisi</p>
        </div>
      </div>
    </footer>

    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon">
          <i class="fas fa-angle-up fa-x"></i></span></a>
    </div>
    <script src="{{ asset('scripts/imagesloaded.pkgd.min.js') }}?ver=1.2.0"></script>
    <script src="{{ asset('scripts/masonry.pkgd.min.js') }}?ver=1.2.0"></script>
    <script src="{{ asset('scripts/BigPicture.min.js') }}?ver=1.2.0"></script>
    <script src="{{ asset('scripts/purecounter.min.js') }}?ver=1.2.0"></script>
    <script src="{{ asset('scripts/bootstrap.bundle.min.js') }}?ver=1.2.0"></script>
    <script src="{{ asset('scripts/aos.min.js') }}?ver=1.2.0"></script>
    <script src="{{ asset('scripts/main.js') }}?ver=1.2.0"></script>

    <!-- Google tag (gtag.js) - Optimized for performance -->
    <script>
      // Lazy load Google Analytics to improve Core Web Vitals
      function loadGoogleAnalytics() {
        const script = document.createElement('script');
        script.src = 'https://www.googletagmanager.com/gtag/js?id=G-QQR81PMY9S';
        script.defer = true;
        document.head.appendChild(script);

        script.onload = function() {
          window.dataLayer = window.dataLayer || [];

          function gtag() {
            dataLayer.push(arguments);
          }
          gtag('js', new Date());
          gtag('config', 'G-QQR81PMY9S', {
            'page_title': document.title,
            'page_location': window.location.href
          });
        };
      }

      // Load Analytics after user interaction or after 3 seconds
      let analyticsLoaded = false;

      function initAnalytics() {
        if (!analyticsLoaded) {
          loadGoogleAnalytics();
          analyticsLoaded = true;
        }
      }

      // Trigger on user interaction
      ['mousedown', 'mousemove', 'keypress', 'scroll', 'touchstart', 'click'].forEach(function(event) {
        document.addEventListener(event, initAnalytics, {
          once: true
        });
      });

      // Fallback: load after 3 seconds if no interaction
      setTimeout(initAnalytics, 3000);
    </script>

</body>

</html>