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
