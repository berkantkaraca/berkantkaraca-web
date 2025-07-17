<div class="section px-3 px-lg-4 pt-5" id="education">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Eğitim Bilgilerim</h2>
    </div>
    <div class="row">
      @php
        $educations = \App\Models\Education::where('is_active', true)->orderBy('sort_order')->orderBy('start_date', 'desc')->get();
      @endphp
      
      @forelse($educations as $index => $education)
      <div class="col-md-12">
        <div class="card mb-3" data-aos="{{ $index % 2 == 0 ? 'fade-right' : 'fade-left' }}" data-aos-delay="100">
          <div class="card-header px-3 py-2">
            <div class="d-flex justify-content-between">
              <div>
                <h3 class="h5 mb-1">{{ $education->institution_name }}</h3>
                <div class="h6 mb-1">{{ $education->field_of_study }}</div>
                <div class="text-muted text-small">{{ $education->start_date }} – {{ $education->end_date }}</div>
              </div>
              @if($education->icon)
                <img src="{{ asset($education->icon) }}" width="48" height="48" alt="{{ $education->institution_name }}" />
              @else
                <img src="{{ asset('images/services/ui-ux.svg') }}" width="48" height="48" alt="education" />
              @endif
            </div>
          </div>
          <div class="card-body px-3 py-3">

              <ul>
                @if($education->description)
                  <li>{!! nl2br(e($education->description)) !!}</li>
                @endif
                
                @if($education->gpa)
                  <li>AGNO: {{ $education->gpa }}</li>
                @endif
                <li>{{ $education->location }}</li>
              </ul>
       
          </div>
        </div>
      </div>
      @empty
      <!-- Fallback: Eğer veritabanında veri yoksa statik veriyi göster -->
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
      @endforelse
    </div>
  </div>
</div>
