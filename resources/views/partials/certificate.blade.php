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
      @if(isset($certificates) && $certificates->count() > 0)
        @foreach($certificates as $index => $certificate)
          <div class="col-md-3 mb-4">
            <div class="card" data-aos="fade" data-aos-delay="{{ ($index + 1) * 100 }}">
              @if($certificate->image_path)
                <a href="#" data-bs-toggle="modal" data-bs-target="#certificateModal" data-bs-image="{{ $certificate->image_url }}" data-bs-title="{{ $certificate->title }}" class="image-hover">
                  <img src="{{ $certificate->image_url }}" class="card-img-top" style="object-fit: cover; width: 235px; height: 166px;" alt="{{ $certificate->title }}" loading="lazy">
                  <div class="overlay"><i class="fas fa-search-plus"></i></div>
                </a>
              @else
                <div class="card-img-top d-flex align-items-center justify-content-center bg-light" style="height: 166px;">
                  <i class="fas fa-certificate text-muted" style="font-size: 3rem;"></i>
                </div>
              @endif
              <div class="card-body px-2 py-2">
                <h6 class="card-title mb-1">{{ $certificate->title }}</h6>
                <small class="text-muted">{{ $certificate->issuer }} - {{ $certificate->issue_date->format('Y') }}</small>
              </div>
            </div>
          </div>
        @endforeach
      @else
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
      @endif
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
    var title = button.getAttribute('data-bs-title') || 'Sertifika';
    var modalImage = certificateModal.querySelector('#modalImage');
    var modalTitle = certificateModal.querySelector('#certificateModalLabel');
    modalImage.src = imageSrc;
    modalTitle.textContent = title;
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
