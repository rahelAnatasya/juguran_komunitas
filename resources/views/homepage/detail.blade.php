@extends('homepage.components.layout')
@section('content')

  <div class="container py-1">
    <div class="py-5 mt-3"></div>
    <div data-aos="fade-up" data-aos-duration="1000"
      class="overflow-hidden rounded-4 d-flex justify-content-center align-items-center bg-light"
      style="max-height: 580px; background-color: #e0e0e0;">
      @if($event->getImageUrl())
        <img class="w-100" src="{{ $event->getImageUrl() }}" alt="{{ $event->title }}" />
      @else
        <div class="d-flex flex-column justify-content-center align-items-center text-gray-500"
          style="height: 300px; width: 100%;">
          <i class="bx bx-image" style="font-size: 3rem;"></i>
        </div>
      @endif
    </div>
  </div>

  <div class="container py-4">
    <div class="mx-1">
      <div data-aos="fade-right" data-aos-delay="200"
        class="d-flex gap-3 justify-content-between justify-content-sm-start">
        <!--  <button class="card-hover border-0 p-0 overflow-hidden d-flex align-items-center rounded-3 text-white"
            style="background-color: #434a4d">
            img class="p-0" src="{{ asset('assets/images/icon/copy.svg') }}" alt="" />
            span class="px-2 px-md-3 font-sm-small">Copy</span>
          </button>
          button class="card-hover border-0 p-0 overflow-hidden d-flex align-items-center rounded-3 text-white"
          style="background-color: #34af23">
          img class="" src="{{ asset('assets/images/icon/whatsapp.svg') }}" alt="" />
          span class="px-2 px-md-3 font-sm-small">Whatsapp</span>
          </button>
          button class="card-hover border-0 p-0 overflow-hidden d-flex align-items-center rounded-3 text-white"
          style="background-color: #9d38b6">
          img class="" src="{{ asset('assets/images/icon/instagram2.svg') }}" alt="" />
          span class="px-2 px-md-3 font-sm-small">Instagram</span>
          </button> -->
      </div>
      <h1 data-aos="fade-up" data-aos-delay="300" class="font-18 font-md-50-800 mt-3">
        {{ $event->title }}
      </h1>
      <div data-aos="fade-up" data-aos-delay="400" class="d-flex align-items-center gap-3 pt-3">
        <img class="rounded-pill overflow-hidden" style="max-width: 45px"
          src="{{ asset('assets/images/users/dummy-avatar.jpg') }}" alt="" />
        <div class="font-12-700 font-md-16-700 ">By Juguran Komunitas</div>
      </div>
    </div>
  </div>

  <!-- Detail -->
  <div class="container">
    <div class="px-lg-5 pb-5 px-3 shadow-lg mx-2 card pt-4 rounded-4">
      <div class="row pb-4">
        <div data-aos="fade-right" data-aos-delay="200" class="col-12 col-lg-6">
          <div class="d-flex h-100 flex-column justify-content-between">
            <div class="d-flex flex-column gap-4">
              <div>
                <h3 class="font-20-700  pb-2">Tanggal dan Waktu</h3>
                <div class="d-flex align-items-center gap-3 mb-2">
                  <img style="width: 30px; height: 30px" src="{{ asset('assets/images/icon/calendar.svg') }}"
                    alt="Tanggal" />
                  <span class="font-14-600 font-md-16-600">{{ $event->from_date->format('d F Y') }}</span>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <img style="width: 30px; height: 30px" src="{{ asset('assets/images/icon/clock.svg') }}" alt="Waktu" />
                  <span class="font-14-600 font-md-16-600">{{ $event->getFormattedTimeRange() }}</span>
                </div>
              </div>
              <div>
                <h3 class="font-20-700 ">Lokasi Acara</h3>
                <div class="d-flex align-items-center gap-3">
                  <img style="width: 30px; height: 30px" src="{{ asset('assets/images/icon/location.svg') }}"
                    alt="Lokasi" />
                  <span class="font-14-600 font-md-16-600">{{ $event->name_location }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-aos="fade-left" data-aos-delay="400" class="col-12 col-lg-6">
          <!-- tabel -->
          <!-- <table style="border: var(--color-background-primary)" class="table table-bordered table-hover text-center m-0">
                                              <thead class="font-14-600 text-white" style="background-color: var(--color-primary)">
                                              <tr>
                                                <th scope="col">No</th>
                                                <th class="text-start" scope="col">Kegiatan</th>
                                                <th scope="col">Waktu</th>
                                              </tr>
                                              </thead>
                                              <tbody class="font-14-500">
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
                                            </table> -->
        </div>
      </div>

      <div data-aos="fade-up" data-aos-delay="200">
        <h3 class="font-20-700 pb-3">Deskripsi</h3>
        <p class="font-14-500">
          {{ $event->description }}
        </p>
      </div>

      <div data-aos="fade-up" data-aos-offset="200" data-aos-delay="300">
        <h3 class="font-20-700">Penyelenggara</h3>
        <div class="d-flex flex-wrap justify-content-center gap-4 px-5 pt-3 pb-5">
          <img data-aos="zoom-in" data-aos-delay="400" style="width: 250px"
            src="{{ asset('assets/images/logo/icon-juguran-full.png') }}" alt="Icon Pengelenggara" />
        </div>
      </div>

      <!-- <div data-aos="fade-up" data-aos-offset="200" data-aos-offset="200" data-aos-delay="400">
                                            <h3 class="font-20-700">Didukung Oleh</h3>
                                            <div class="d-flex flex-wrap justify-content-center gap-4 pt-3 pb-5">
                                              @for($i = 1; $i <= 5; $i++)
                                                <img data-aos="zoom-in" data-aos-delay="{{ 400 + ($i * 100) }}" class="partner-logo"
                                                  src="{{ asset('assets/images/logo/logo-ipsum.svg') }}" alt="" />
                                              @endfor
                                            </div>
                                          </div>

                                          <div data-aos="fade-up" data-aos-offset="200" data-aos-offset="200" data-aos-delay="500">
                                            <h3 class="font-20-700">Media Partner</h3>
                                            <div class="d-flex flex-wrap justify-content-center gap-4 pt-3">
                                              @for($i = 1; $i <= 5; $i++)
                                                <img data-aos="zoom-in" data-aos-delay="{{ 500 + ($i * 100) }}" class="partner-logo"
                                                  src="{{ asset('assets/images/logo/logo-ipsum.svg') }}" alt="" />
                                              @endfor
                                            </div>
                                          </div> -->
    </div>
  </div>

@endsection

@section('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const eventUrl = "{{ $event->getEventUrl() }}";
      const eventTitle = "{{ $event->title }}";

      // Fungsi copy link
      document.querySelector('button:nth-child(1)').addEventListener('click', function () {
        navigator.clipboard.writeText(eventUrl).then(() => {
          alert('Link event berhasil disalin!');
        }).catch(err => {
          console.error('Gagal menyalin link: ', err);
        });
      });

      // Fungsi share ke WhatsApp
      document.querySelector('button:nth-child(2)').addEventListener('click', function () {
        const whatsappMessage = `Hai! Saya ingin berbagi event menarik: ${eventTitle}\n\n${eventUrl}`;
        const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(whatsappMessage)}`;
        window.open(whatsappUrl, '_blank');
      });

      // Fungsi share ke Instagram (via direct message)
      document.querySelector('button:nth-child(3)').addEventListener('click', function () {
        // Instagram tidak memiliki API langsung untuk share, jadi kita arahkan ke compose message
        const instagramMessage = `Check out this event: ${eventTitle} - ${eventUrl}`;
        alert('Untuk berbagi ke Instagram, salin link berikut dan bagikan melalui DM atau story:\n\n' + eventUrl);
      });
    });
  </script>
@endsection