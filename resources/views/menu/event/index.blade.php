@extends('components.layout')

@section('content')
<div class="container my-5">
    <h2 class="fw-bold">Acara Seru yang Akan Datang</h2>
    <p>Ikuti acara menarik yang akan datang dan dapatkan pengalaman baru</p>
    <div class="row g-3">
        <!-- Card 1 -->
        <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="position-relative">
            <span class="badge bg-danger text-white position-absolute top-0 start-0 m-3">EXPIRED</span>
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Event Image">
            </div>
            <div class="card-body">
            <h5 class="card-title">JUGURAN KOMUNITAS - TRANSFORM YOUR DESIGN SKILLS</h5>
            <div class="mb-2 text-muted">
                <i class="bx bx-calendar"></i> Januari 25, 2025
            </div>
            <div class="mb-3 text-muted">
                <i class="bx bx-map"></i> Warung Mulyo, Pabuwaran, Purwokerto Utara, Banyumas
            </div>
            <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
            </div>
        </div>
        </div>
        <!-- Duplicate Cards -->
        <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="position-relative">
            <span class="badge bg-danger text-white position-absolute top-0 start-0 m-3">EXPIRED</span>
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Event Image">
            </div>
            <div class="card-body">
            <h5 class="card-title">JUGURAN KOMUNITAS - TRANSFORM YOUR DESIGN SKILLS</h5>
            <div class="mb-2 text-muted">
                <i class="bx bx-calendar"></i> Januari 25, 2025
            </div>
            <div class="mb-3 text-muted">
                <i class="bx bx-map"></i> Warung Mulyo, Pabuwaran, Purwokerto Utara, Banyumas
            </div>
            <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="position-relative">
            <span class="badge bg-danger text-white position-absolute top-0 start-0 m-3">EXPIRED</span>
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Event Image">
            </div>
            <div class="card-body">
            <h5 class="card-title">JUGURAN KOMUNITAS - TRANSFORM YOUR DESIGN SKILLS</h5>
            <div class="mb-2 text-muted">
                <i class="bx bx-calendar"></i> Januari 25, 2025
            </div>
            <div class="mb-3 text-muted">
                <i class="bx bx-map"></i> Warung Mulyo, Pabuwaran, Purwokerto Utara, Banyumas
            </div>
            <a href="#" class="btn btn-primary w-100">Lihat Detail</a>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
