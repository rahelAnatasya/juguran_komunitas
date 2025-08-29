@extends('components.layout')

@section('content')
  <style>
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
    }
  </style>

  <div class="container">
    <div data-aos="fade-up" data-aos-duration="800">
      <h2 class="fw-bold">Acara Seru yang Akan Datang</h2>
      <p>Ikuti acara menarik yang akan datang dan dapatkan pengalaman baru</p>
    </div>

    <div class="row g-3">
      @foreach($events as $event)
        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
          <div class="card shadow-sm">
            <div class="position-relative">
              @if($event->isCompleted())
                <span class="badge z-3 bg-danger text-white position-absolute top-0 start-0 m-3" data-aos="fade-right"
                  data-aos-delay="400">EXPIRED</span>
              @elseif($event->isUpcoming())
                <span class="badge z-3 bg-warning text-white position-absolute top-0 start-0 m-3" data-aos="fade-right"
                  data-aos-delay="400">AKAN DATANG</span>
              @elseif($event->isOngoing())
                <span class="badge z-3 bg-success text-white position-absolute top-0 start-0 m-3" data-aos="fade-right"
                  data-aos-delay="400">SEDANG BERLANGSUNG</span>
              @endif

              @if($event->getImageUrl())
                <img src="{{ $event->getImageUrl() }}" class="card-img-top" alt="{{ $event->title }}"
                  style="height: 200px; object-fit: cover;" data-aos="zoom-in" data-aos-delay="300">
              @else
                <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;"
                  data-aos="zoom-in" data-aos-delay="300">
                  <i class="bx bx-image text-muted" style="font-size: 3rem;"></i>
                </div>
              @endif
            </div>
            <div class="card-body" data-aos="fade-up" data-aos-delay="500">
              <a href="">
                <h5 class="card-title">{{ $event->title }}</h5>
              </a>
              <div class="mb-1 mt-1 text-muted">
                <i class="bx bx-calendar"></i> {{ $event->getFormattedDateRange() }}
              </div>
              <div class="mb-1 text-muted">
                <i class="bx bx-time"></i> {{ $event->getFormattedTimeRange() }}
              </div>
              <div class="mb-2 text-muted">
                <i class="bx bx-map"></i> {{ $event->name_location }}
              </div>
              <a href="{{ route('your-event.show', $event->id) }}" class="btn btn-purple w-100" data-aos="fade-up"
                data-aos-delay="600">Lihat Detail</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    @if($events->isEmpty())
      <div class="text-center py-5" data-aos="fade-up">
        <i class="bx bx-calendar-event text-muted" style="font-size: 4rem;"></i>
        <h4 class="mt-3 text-muted">Belum ada acara yang tersedia</h4>
        <p class="text-muted">Silakan kembali nanti untuk melihat acara yang akan datang.</p>
      </div>
    @endif
  </div>
@endsection