@extends('components.layout')

@section('content')
<div class="container">
    <div class="row g-1">
        <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="800">
            <div class="card text-white bg-primary shadow">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-calendar bx-lg me-3"></i>
                    <div>
                        <h6 class="card-title mb-0 text-white fs-16">Total Acara</h6>
                        <h2 class="fw-bold mb-0 text-white fs-16">1</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="400" data-aos-duration="800">
            <div class="card text-white bg-warning shadow">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-time bx-lg me-3"></i>
                    <div>
                        <h6 class="card-title mb-0 text-white fs-16">Acara Akan Datang</h6>
                        <h2 class="fw-bold mb-0 text-white fs-16">0</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="500" data-aos-duration="800">
            <div class="card text-white bg-purple shadow">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-pie-chart bx-lg me-3"></i>
                    <div>
                        <h6 class="card-title mb-0 text-white fs-16">Acara Sedang Berlangsung</h6>
                        <h2 class="fw-bold mb-0 text-white fs-16">0</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="600" data-aos-duration="800">
            <div class="card text-white bg-success shadow">
                <div class="card-body d-flex align-items-center">
                    <i class="bx bx-pie-chart bx-lg me-3"></i>
                    <div>
                        <h6 class="card-title mb-0 text-white fs-16">Acara Selesai</h6>
                        <h2 class="fw-bold mb-0 text-white fs-16">0</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-2" data-aos="fade-up" data-aos-duration="800">
        <div class="card-header">
            <h5 class="mb-0">Acara Kamu</h5>
        </div>
        <div class="card-body table-responsive">
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
                    <tr>
                        <td colspan="4" class="text-center">Tidak Ada Data</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mt-2" data-aos="fade-up" data-aos-duration="800">
        <div class="card-header">
            <h5 class="mb-0">Acara Akan Datang</h5>
        </div>
        <div class="card-body table-responsive">
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
                    <tr>
                        <td colspan="4" class="text-center">Tidak Ada Data</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mt-2" data-aos="fade-up" data-aos-duration="800">
        <div class="card-header">
            <h5 class="mb-0">Acara Sedang Berlangsung</h5>
        </div>
        <div class="card-body table-responsive">
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
                    <tr>
                        <td colspan="4" class="text-center">Tidak Ada Data</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card mt-2" data-aos="fade-up" data-aos-duration="800">
        <div class="card-header">
            <h5 class="mb-0">Acara Selesai</h5>
        </div>
        <div class="card-body table-responsive">
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
                    <tr>
                        <td colspan="4" class="text-center">Tidak Ada Data</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
