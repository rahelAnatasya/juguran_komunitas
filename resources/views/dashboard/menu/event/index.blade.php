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
    <h2 class="fw-bold">Acara Seru yang Akan Datang</h2>
    <p>Ikuti acara menarik yang akan datang dan dapatkan pengalaman baru</p>
    <div class="row g-3">
        <!-- Card 1 -->
        <div class="col-12 col-md-4">
            <div class="card shadow-sm">
                <div class="position-relative">
                    <span class="badge bg-danger text-white position-absolute top-0 start-0 m-3">EXPIRED</span>
                    <img src="{{ asset('assets/images/UIUX.png') }}" class="card-img-top" alt="Event Image">
                </div>
                <div class="card-body">
                    <h5 class="card-title">JUGURAN KOMUNITAS - TRANSFORM YOUR DESIGN SKILLS</h5>
                <div class="mb-1 mt-1 text-muted">
                    <i class="bx bx-calendar"></i> Januari 25, 2025
                </div>
                <div class="mb-2 text-muted">
                    <i class="bx bx-map"></i> Warung Mulyo, Pabuwaran, Purwokerto Utara, Banyumas
                </div>
                    <a href="#" class="btn btn-purple w-100">Lihat Detail</a>
                </div>
            </div>
        </div>
        <!-- Duplicate Cards -->
        <div class="col-12 col-md-4">
            <div class="card shadow-sm">
                <div class="position-relative">
                    <span class="badge bg-danger text-white position-absolute top-0 start-0 m-3">EXPIRED</span>
                    <img src="{{ asset('assets/images/poster-januari-2025.jpg') }}" class="card-img-top" alt="Event Image">
                </div>
                <div class="card-body">
                    <h5 class="card-title">JUGURAN KOMUNITAS - TRANSFORM YOUR DESIGN SKILLS</h5>
                <div class="mb-1 mt-1 text-muted">
                    <i class="bx bx-calendar"></i> Januari 25, 2025
                </div>
                <div class="mb-2 text-muted">
                    <i class="bx bx-map"></i> Warung Mulyo, Pabuwaran, Purwokerto Utara, Banyumas
                </div>
                    <a href="#" class="btn btn-purple w-100">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card shadow-sm">
                <div class="position-relative">
                    <span class="badge bg-danger text-white position-absolute top-0 start-0 m-3">EXPIRED</span>
                    <img src="{{ asset('assets/images/poster-januari-2025.jpg') }}" class="card-img-top" alt="Event Image">
                </div>
                <div class="card-body">
                    <h5 class="card-title">JUGURAN KOMUNITAS - TRANSFORM YOUR DESIGN SKILLS</h5>
                <div class="mb-1 mt-1 text-muted">
                    <i class="bx bx-calendar"></i> Januari 25, 2025
                </div>
                <div class="mb-2 text-muted">
                    <i class="bx bx-map"></i> Warung Mulyo, Pabuwaran, Purwokerto Utara, Banyumas
                </div>
                    <a href="#" class="btn btn-purple w-100">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
