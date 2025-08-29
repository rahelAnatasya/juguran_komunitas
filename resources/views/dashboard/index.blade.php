@extends('components.layout')

@section('content')
    <div class="container">
        <!-- Statistik Cards -->
        <div class="row g-3 mb-4">
            <div class="col-md-3" data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="800">
                <div class="card text-white bg-primary shadow h-100">
                    <div class="card-body d-flex align-items-center">
                        <i class="bx bx-calendar bx-lg me-3"></i>
                        <div>
                            <h6 class="card-title mb-0 text-white fs-16">Total Acara Kamu</h6>
                            <h2 class="fw-bold mb-0 text-white fs-16">{{ $yourEvents->total() }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="zoom-in-up" data-aos-delay="400" data-aos-duration="800">
                <div class="card text-white bg-warning shadow h-100">
                    <div class="card-body d-flex align-items-center">
                        <i class="bx bx-time bx-lg me-3"></i>
                        <div>
                            <h6 class="card-title mb-0 text-white fs-16">Acara Akan Datang</h6>
                            <h2 class="fw-bold mb-0 text-white fs-16">{{ $upcomingEvents->total() }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="zoom-in-up" data-aos-delay="500" data-aos-duration="800">
                <div class="card text-white bg-success shadow h-100">
                    <div class="card-body d-flex align-items-center">
                        <i class="bx bx-pie-chart bx-lg me-3"></i>
                        <div>
                            <h6 class="card-title mb-0 text-white fs-16">Acara Berlangsung</h6>
                            <h2 class="fw-bold mb-0 text-white fs-16">{{ $ongoingEvents->total() }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-aos="zoom-in-up" data-aos-delay="600" data-aos-duration="800">
                <div class="card text-white bg-info shadow h-100">
                    <div class="card-body d-flex align-items-center">
                        <i class="bx bx-check-circle bx-lg me-3"></i>
                        <div>
                            <h6 class="card-title mb-0 text-white fs-16">Total Semua Acara</h6>
                            <h2 class="fw-bold mb-0 text-white fs-16">{{ $allEventsCount }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section: Acara Kamu -->
        <div class="card mb-4" data-aos="fade-up" data-aos-duration="800">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="bx bx-user-circle me-2"></i>Acara Kamu
                    <span class="badge bg-light text-primary ms-2">{{ $yourEvents->total() }}</span>
                </h5>
            </div>
            <div class="card-body table-responsive">
                @if($yourEvents->count() > 0)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Acara</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($yourEvents as $event)
                                <tr>
                                    <td>
                                        {{ Str::limit($event->title, 50) }}
                                    </td>
                                    <td>{{ $event->getFormattedDateRange() }}</td>
                                    <td>{!! $event->getStatusBadge() !!}</td>
                                    <td>
                                        <a href="{{ route('your-event.edit', $event->id) }}"
                                            class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="{{ route('your-event.show', $event->id) }}"
                                            class="btn btn-sm btn-outline-info">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination Acara Kamu -->
                    @if($yourEvents->hasPages())
                        <div class="d-flex justify-content-center mt-3">
                            {{ $yourEvents->appends(['upcoming_events_page' => $upcomingEvents->currentPage(), 'ongoing_events_page' => $ongoingEvents->currentPage()])->links() }}
                        </div>
                    @endif
                @else
                    <div class="text-center py-4">
                        <i class="bx bx-calendar-event bx-lg text-muted mb-3"></i>
                        <p class="text-muted">Belum ada acara yang kamu buat.</p>
                        <a href="{{ route('your-event.create') }}" class="btn btn-primary">Buat Acara Pertama</a>
                    </div>
                @endif
            </div>
        </div>

        <!-- Section: Acara Akan Datang -->
        <div class="card mb-4" data-aos="fade-up" data-aos-duration="800">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">
                    <i class="bx bx-time me-2"></i>Acara Akan Datang
                    <span class="badge bg-light text-warning ms-2">{{ $upcomingEvents->total() }}</span>
                </h5>
            </div>
            <div class="card-body">
                @if($upcomingEvents->count() > 0)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Acara</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($upcomingEvents as $event)
                                <tr>
                                    <td>
                                        {{ Str::limit($event->title, 50) }}
                                    </td>
                                    <td>{{ $event->getFormattedDateRange() }}</td>
                                    <td>{!! $event->getStatusBadge() !!}</td>
                                    <td>
                                        <a href="{{ route('your-event.edit', $event->id) }}"
                                            class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="{{ route('your-event.show', $event->id) }}"
                                            class="btn btn-sm btn-outline-info">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination Acara Akan Datang -->
                    @if($upcomingEvents->hasPages())
                        <div class="d-flex justify-content-center mt-3">
                            {{ $upcomingEvents->appends(['your_events_page' => $yourEvents->currentPage(), 'ongoing_events_page' => $ongoingEvents->currentPage()])->links() }}
                        </div>
                    @endif
                @else
                    <div class="text-center py-4">
                        <i class="bx bx-time bx-lg text-muted mb-3"></i>
                        <p class="text-muted">Tidak ada acara yang akan datang.</p>
                    </div>
                @endif
            </div>
        </div>

        <!-- Section: Acara Sedang Berlangsung -->
        <div class="card mb-4" data-aos="fade-up" data-aos-duration="800">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">
                    <i class="bx bx-pie-chart me-2"></i>Acara Sedang Berlangsung
                    <span class="badge bg-light text-success ms-2">{{ $ongoingEvents->total() }}</span>
                </h5>
            </div>
            <div class="card-body">
                @if($ongoingEvents->count() > 0)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Acara</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ongoingEvents as $event)
                                <tr>
                                    <td>
                                        {{ Str::limit($event->title, 50) }}
                                    </td>
                                    <td>{{ $event->getFormattedDateRange() }}</td>
                                    <td>{!! $event->getStatusBadge() !!}</td>
                                    <td>
                                        <a href="{{ route('your-event.edit', $event->id) }}"
                                            class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="{{ route('your-event.show', $event->id) }}"
                                            class="btn btn-sm btn-outline-info">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination Acara Sedang Berlangsung -->
                    @if($ongoingEvents->hasPages())
                        <div class="d-flex justify-content-center mt-3">
                            {{ $ongoingEvents->appends(['your_events_page' => $yourEvents->currentPage(), 'upcoming_events_page' => $upcomingEvents->currentPage()])->links() }}
                        </div>
                    @endif
                @else
                    <div class="text-center py-4">
                        <i class="bx bx-pie-chart bx-lg text-muted mb-3"></i>
                        <p class="text-muted">Tidak ada acara yang sedang berlangsung.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <style>
        .card {
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-2px);
        }

        .badge {
            font-size: 0.75rem;
        }
    </style>
@endsection