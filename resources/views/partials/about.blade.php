@php
  $about = \App\Models\About::where('is_active', true)->first();
@endphp

<div class="section pt-4 px-3 px-lg-4" id="about">
  <div class="container-narrow">
    <div class="row">
      <div class="col-md-8" data-aos="fade-right" data-aos-delay="100">
        <h2 class="h4 my-2">{{ $about->title ?? 'Berkant Karaca Kimdir?' }}</h2>
        @if($about && $about->description_tr)
          {!! nl2br(e($about->description_tr)) !!}
        @else
          <p>
            Bilgisayar Mühendisliği lisans eğitimimi mühendislik fakültesi birinciliği ile tamamladım. Erasmus+ Öğrenci Değişim Programı kapsamında Polonya'da bir dönem eğitim alarak akademik ve kültürel anlamda uluslararası deneyim kazandım. Öğrencilik hayatım boyunca disiplinli çalışma alışkanlığım, öğrenmeye olan isteğim ve azmim sayesinde hem akademik hem de kişisel gelişimime sürekli katkı sağladım.
          </p>
          <p>
            Öğrenmeye açık, disiplinli, sorumluluk sahibi ve ekip çalışmalarında etkili biriyim. Yazılım geliştirme süreçlerine ilgi duyuyor, özellikle backend alanında kendimi geliştiriyorum. Hedefim; teknolojiyi yakından takip eden, yenilikçi projelerde aktif rol alan ve çalıştığım kurumlara değer katan bir yazılım geliştirici olmaktır.
          </p>
        @endif
      </div>
      <div class="col-md-3 offset-md-1 d-flex flex-column justify-content-center" data-aos="fade-left" data-aos-delay="100">
        <div class="text-center">
          <img src="https://flagcdn.com/w40/tr.png" alt="Türk Bayrağı" width="36" height="20">
          Türkçe
        </div>
        @if($about && $about->cv_tr_url)
          <a href="{{ Storage::url($about->cv_tr_url) }}" target="_blank" class="btn btn-primary shadow-sm mt-1 hover-effect text-start">
            <i class="fas fa-download me-2"></i>Özgeçmiş
          </a>
        @else
          <button class="btn btn-primary shadow-sm mt-1 hover-effect tr-cv-button text-start">
            <i class="fas fa-download me-2"></i>Özgeçmiş
          </button>
        @endif
        
        @if($about && $about->cover_letter_tr_url)
          <a href="{{ Storage::url($about->cover_letter_tr_url) }}" target="_blank" class="btn btn-primary shadow-sm mt-1 hover-effect text-start">
            <i class="fas fa-download me-2"></i>Niyet Mektubu
          </a>
        @else
          <button class="btn btn-primary shadow-sm mt-1 hover-effect tr-mektup-button text-start">
            <i class="fas fa-download me-2"></i>Niyet Mektubu
          </button>
        @endif
        <br>

        <div class="text-center mt-2">
          <img src="https://flagcdn.com/w40/gb.png" alt="İngiliz Bayrağı" width="36" height="20">
          English
        </div>
        @if($about && $about->cv_en_url)
          <a href="{{ Storage::url($about->cv_en_url) }}" target="_blank" class="btn btn-primary shadow-sm mt-1 hover-effect text-start">
            <i class="fas fa-download me-2"></i>CV
          </a>
        @else
          <button class="btn btn-primary shadow-sm mt-1 hover-effect en-cv-button text-start">
            <i class="fas fa-download me-2"></i>CV
          </button>
        @endif
        
        @if($about && $about->cover_letter_en_url)
          <a href="{{ Storage::url($about->cover_letter_en_url) }}" target="_blank" class="btn btn-primary shadow-sm mt-1 hover-effect text-start">
            <i class="fas fa-download me-2"></i>Cover Letter
          </a>
        @else
          <button class="btn btn-primary shadow-sm mt-1 hover-effect en-letter-button text-start">
            <i class="fas fa-download me-2"></i>Cover Letter
          </button>
        @endif
      </div>
    </div>
  </div>
</div>
