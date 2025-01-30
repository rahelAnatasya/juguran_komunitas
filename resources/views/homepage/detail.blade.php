@extends('homepage.components.layout')
@section('content')

<div class="container py-1">
  <div class="py-5"></div>
  <div class="py-4"></div>
  <div class="overflow-hidden rounded-4 d-flex justify-content-center align-items-center" style="max-height: 580px">
    <img class="w-100" src="/assets/images/poster-januari-2025.jpg" alt="" />
  </div>
</div>

<div class="container py-4">
  <div class="d-flex gap-3 justify-content-between justify-content-sm-start">
    <button class="border-0 p-0 overflow-hidden d-flex align-items-center rounded-3 text-white"
      style="background-color: #434a4d">
      <img class="p-0" src="/assets/images/icon/copy.svg" alt="" />
      <span class="px-2 px-md-3 font-sm-small">Copy</span>
    </button>
    <button class="border-0 p-0 overflow-hidden d-flex align-items-center rounded-3 text-white"
      style="background-color: #34af23">
      <img class="" src="/assets/images/icon/whatsapp.svg" alt="" />
      <span class="px-2 px-md-3 font-sm-small">Whatsapp</span>
    </button>
    <button class="border-0 p-0 overflow-hidden d-flex align-items-center rounded-3 text-white"
      style="background-color: #9d38b6">
      <img class="" src="/assets/images/icon/instagram2.svg" alt="" />
      <span class="px-2 px-md-3 font-sm-small">Instagram</span>
    </button>
  </div>
  <h1 class="fw-bold mt-3">
    Juguran Komunitas - TRANSFORM YOUR DESIGN SKILLS
  </h1>
  <div class="d-flex align-items-center gap-3 pt-3">
    <img class="rounded-pill overflow-hidden" style="max-width: 45px" src="/assets/images/users/dummy-avatar.jpg"
      alt="" />
    <div class="fw-bold">By Juguran Komunitas</div>
  </div>
</div>

<!-- Detail -->
<div class="container">
  <div class="px-lg-5 pb-5 px-3 shadow-lg mx-2 card pt-4 rounded-4">
    <div class="row pb-4">
      <div class="col-12 col-lg-6">
        <div class="d-flex h-100 flex-column justify-content-between">
          <div class="d-flex flex-column gap-4">
            <div>
              <h3 class="fw-bold pb-2">Tanggal dan Waktu</h3>
              <div class="d-flex align-items-center gap-3 mb-2">
                <img style="width: 30px; height: 30px" src="/assets/images/icon/calendar.svg" alt="Tanggal" />
                <span>25 Januari 2025</span>
              </div>
              <div class="d-flex align-items-center gap-3">
                <img style="width: 30px; height: 30px" src="/assets/images/icon/clock.svg" alt="Waktu" />
                <span>13.00 WIB s.d Selesai</span>
              </div>
            </div>
            <div>
              <h3 class="fw-bold">Lokasi Acara</h3>
              <div class="d-flex align-items-center gap-3">
                <img style="width: 30px; height: 30px" src="/assets/images/icon/location.svg" alt="Lokasi" />
                <span>Warung Mulyo, Pabuaran, Purwokerto Utara, Banyumas</span>
              </div>
            </div>
          </div>
          <a class="btn bg-primary-dark text-white w-100 fw-bold py-2 my-3" href="">Lihat Detail</a>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <h3 class="fw-bold py-1">Jadwal Acara</h3>
        <!-- tabel -->
        <table style="border: var(--color-background-primary)" class="table table-bordered text-center m-0">
          <thead class="table-hover text-white" style="background-color: var(--color-primary)">
            <tr>
              <th scope="col">No</th>
              <th class="text-start" scope="col">Kegiatan</th>
              <th scope="col">Waktu</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td class="text-start">Registrasi Peserta</td>
              <td>13.00 - 13.30</td>
            </tr>
            <tr>
              <td>2</td>
              <td class="text-start">Pembukaan</td>
              <td>13.30 - 14.00</td>
            </tr>
            <tr>
              <td>3</td>
              <td class="text-start">Sesi Materi</td>
              <td>14.00 - 15.30</td>
            </tr>
            <tr>
              <td>4</td>
              <td class="text-start">Break</td>
              <td>15.30 - 15.45</td>
            </tr>
            <tr>
              <td>5</td>
              <td class="text-start">Sesi Praktik</td>
              <td>15.45 - 17.00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div>
      <h3 class="fw-bold pb-3">Deskripsi</h3>
      <p>
        Transform Your Design Skills Bersiaplah untuk menjelajahi dunia
        UI/UX yang seru, dinamis, dan penuh tantangan! Event ini dirancang
        khusus untuk kamu, para creative Gen Z yang ingin meningkatkan
        kemampuan desain dan memperluas wawasan di bidang teknologi. Dengan
        materi praktis dan insightful dari para ahli, kamu akan mendapatkan
        pengalaman belajar yang gratis dan penuh manfaat, cocok untuk pemula
        maupun yang sudah berpengalaman. Jangan lewatkan kesempatan untuk
        upgrade skill, berjejaring dengan komunitas kreatif lainnya, dan
        menjadi bagian dari masa depan desain! Informasi lebih lanjut akan
        segera diumumkan, jadi stay tuned dan segera daftar!
      </p>
    </div>
    <div>
      <h3 class="fw-bold">Penyelenggara</h3>
      <div class="d-flex flex-wrap justify-content-center gap-4 px-5 pt-3 pb-5">
        <img style="width: 250px" src="/assets/images/logo/icon-juguran-full.png" alt="Icon Pengelenggara" />
      </div>
    </div>
    <div>
      <h3 class="fw-bold">Didukung Oleh</h3>
      <div class="d-flex flex-wrap justify-content-center gap-4 px-5 pt-3 pb-5">
        <img style="width: 200px" src="/assets/images/logo/logo-ipsum.svg" alt="" />
        <img style="width: 200px" src="/assets/images/logo/logo-ipsum.svg" alt="" />
        <img style="width: 200px" src="/assets/images/logo/logo-ipsum.svg" alt="" />
        <img style="width: 200px" src="/assets/images/logo/logo-ipsum.svg" alt="" />
        <img style="width: 200px" src="/assets/images/logo/logo-ipsum.svg" alt="" />
      </div>
    </div>
    <div>
      <h3 class="fw-bold">Media Partner</h3>
      <div class="d-flex flex-wrap justify-content-center gap-4 px-5 pt-3 pb-5">
        <img style="width: 200px" src="/assets/images/logo/logo-ipsum.svg" alt="" />
        <img style="width: 200px" src="/assets/images/logo/logo-ipsum.svg" alt="" />
        <img style="width: 200px" src="/assets/images/logo/logo-ipsum.svg" alt="" />
        <img style="width: 200px" src="/assets/images/logo/logo-ipsum.svg" alt="" />
        <img style="width: 200px" src="/assets/images/logo/logo-ipsum.svg" alt="" />
      </div>
    </div>
  </div>
</div>

@endsection