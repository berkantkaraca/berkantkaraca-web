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
            @if($contact && $contact->phone)
              <a href="tel:{{ $contact->phone }}" style="text-decoration: none;">{{ $contact->phone }}</a>
            @else
              <a href="tel:+905393480388" style="text-decoration: none;">+90 539 348 03 88</a>
            @endif
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
            @if($contact && $contact->email)
              <a style="text-decoration: none;" href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
            @else
              <a style="text-decoration: none;" href="mailto:berkantkaracatr@gmail.com">berkantkaracatr@gmail.com</a>
            @endif
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
            @if($contact && $contact->address)
              {{ $contact->address }}
            @else
              Başakşehir, İstanbul, Türkiye
            @endif
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
            @if($contact && ($contact->linkedin_url || $contact->github_url || $contact->twitter_url || $contact->facebook_url || $contact->instagram_url))
              @if($contact->linkedin_url)
                <a class="nav-link d-inline" href="{{ $contact->linkedin_url }}" title="LinkedIn" target="_blank">
                  <i class="fab fa-linkedin"></i> LinkedIn
                </a>
              @endif
              @if($contact->github_url)
                <a class="nav-link d-inline" href="{{ $contact->github_url }}" title="Github" target="_blank">
                  <i class="fab fa-github"></i> Github
                </a>
              @endif
              @if($contact->twitter_url)
                <a class="nav-link d-inline" href="{{ $contact->twitter_url }}" title="Twitter" target="_blank">
                  <i class="fab fa-twitter"></i> Twitter
                </a>
              @endif
              @if($contact->facebook_url)
                <a class="nav-link d-inline" href="{{ $contact->facebook_url }}" title="Facebook" target="_blank">
                  <i class="fab fa-facebook"></i> Facebook
                </a>
              @endif
              @if($contact->instagram_url)
                <a class="nav-link d-inline" href="{{ $contact->instagram_url }}" title="Instagram" target="_blank">
                  <i class="fab fa-instagram"></i> Instagram
                </a>
              @endif
            @else
              <a class="nav-link d-inline" href="https://www.linkedin.com/in/berkantkaraca" title="LinkedIn" target="_blank">
                <i class="fab fa-linkedin"></i> LinkedIn
              </a>
              <a class="nav-link d-inline" href="https://www.github.com/berkantkaraca" title="Github" target="_blank">
                <i class="fab fa-github"></i> Github
              </a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
