@extends('components.layout')

@section('content')
  <div class="container mt-4">
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
    <div class="row">

    </div>
    <div class="row mt-4">
    <div class="col-12">
      <div class="card shadow-lg" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
      <div class="card-body p-4">
        <h2 class="text-center mb-5">Profile</h2>

        <div class="row g-4">
        <div class="col-md-4">
          <div class="mb-3">
          <label class="form-label fw-bold">Name</label>
          <input type="text" class="form-control" value="Juguran Komunitas">
          </div>
        </div>

        <div class="col-md-4">
          <div class="mb-3">
          <label class="form-label fw-bold">Email</label>
          <input type="email" class="form-control" value="jugurankomunitas.id@gmail.com">
          </div>
        </div>

        <div class="col-md-4">
          <div class="mb-3">
          <label class="form-label fw-bold">Phone</label>
          <input type="tel" class="form-control" value="+6283104788904">
          </div>
        </div>

        <div class="col-12">
          <div class="mb-3">
          <label class="form-label fw-bold">Address</label>
          <input type="text" class="form-control" value="Jawa Tengah, Banyumas, Baturraden, Pandak, Kantor">
          </div>
        </div>
        </div>

        <div class="row mt-4">
        <div class="col-md-3 mb-3">
          <a href="#" class="btn btn-primary px-4 py-2" data-aos="fade-up" data-aos-delay="400">
          Change Profile Data
          </a>
        </div>
        <div class="col-md-3 mb-3">
          <a href="#" class="btn btn-primary px-4 py-2" data-aos="fade-up" data-aos-delay="500">
          Change Email
          </a>
        </div>
        <div class="col-md-3 mb-3">
          <a href="#" class="btn btn-primary px-4 py-2" data-aos="fade-up" data-aos-delay="600">
          Change Password
          </a>
        </div>
        <div class="col-md-3 mb-3">
          <button class="btn btn-danger px-4 py-2" data-aos="fade-up" data-aos-delay="700">
          Delete Account
          </button>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </div>

@endsection