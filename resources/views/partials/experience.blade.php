<div class="section px-3 px-lg-4 pt-5" id="experience">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Deneyimlerim</h2>
    </div>
    
    @if(isset($experiences) && $experiences->count() > 0)
    <div class="row">
      @foreach($experiences as $experience)
        <div class="col-md-12">
          <div class="card mb-3" data-aos="fade-{{ $loop->index % 2 == 0 ? 'right' : 'left' }}" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
            <div class="card-header px-3 py-2">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  @if($experience->company_logo)
                    <img src="{{ $experience->company_logo }}" alt="{{ $experience->company_name }}" class="me-3" style="width: 40px; height: 40px; object-fit: contain;">
                  @endif
                  <div>
                    <h3 class="h5 mb-1">{{ $experience->position }}</h3>
                    <div class="text-muted text-small">{{ $experience->company_name }} 
                      @if($experience->location)
                        <small>({{ $experience->location }})</small>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="text-end">
                  <div class="text-muted text-small">{{ $experience->formatted_duration }}</div>
                  @if($experience->is_current)
                    <span class="badge bg-success">Devam Ediyor</span>
                  @endif
                </div>
              </div>
            </div>
            @if($experience->description)
            <div class="card-body px-3">
              <div style="white-space: pre-line;">{{ $experience->description }}</div>
            </div>
            @endif
          </div>
        </div>
      @endforeach
    </div>
    @else
    <div class="text-center py-8">
      <i class="fas fa-briefcase text-gray-400 text-4xl mb-4"></i>
      <h3 class="text-lg font-medium text-gray-900 mb-2">Henüz deneyim eklenmemiş</h3>
      <p class="text-gray-500">Deneyimler yüklenirken bir sorun oluştu.</p>
    </div>
    @endif
  </div>
</div>
