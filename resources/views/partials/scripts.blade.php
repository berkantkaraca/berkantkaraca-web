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
