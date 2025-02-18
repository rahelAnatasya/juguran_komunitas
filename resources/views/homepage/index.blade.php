@extends('homepage.components.layout')

@section('content')

    <!-- Hero Section -->
    <div data-aos="zoom-in" data-aos-duration="500" data-aos-easing="ease-in-out" class="container py-1 pt-5 mt-5">
        <div class="row mx-1 mx-md-4 pt-5 pt-lg-3 align-items-center">
            <div class="col-12 col-lg-6 d-flex flex-column gap-2">
                <p class="m-0 font-hashtag">#RuangBersama</p>
                <h1 class="hero-title">
                    Merajut Kebersamaan, <br />Berbagi Cerita Komunitas
                </h1>
                <p class="text-blac font-17-500 text-opacity-75">
                    Selamat Datang di Juguran Komunitas - Ruang berbagi, inspirasi, dan
                    kolaborasi untuk menciptakan perubahan positif bersama!
                </p>
                <div>
                    <a href="#"
                        class="button-hover btn bg-primary-dark hero-cta rounded-pill text-white fw-bold fs-6 btn-lg">Pelajari
                        Lebih Lanjut
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.0742 12L14.0742 18M20.0742 12L14.0742 6M20.0742 12H9.57416M4.07416 12H6.57416"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 mt-lg-2 px-1 col-lg-6">
                <img class="w-100 object-fit-contain" style="max-height: 620px" src="{{ asset('assets/images/hero.png') }}"
                    alt="" />
            </div>
        </div>
    </div>

    <!-- Why Join Section -->
    <section class="pt-5">
        <div class="container d-grid gap-3 text-center">
            <h1 class="m-0 fw-bold font-hashtag">Kenapa Harus Ikut Juguran Komunitas?</h1>
            <p class="m-0 text-black text-opacity-75 font-subtitle">
                Jadikan setiap pertemuan sebagai kesempatan untuk berbagi, belajar,
                dan tumbuh bersama
            </p>

            <div class="row mx-auto" style="max-width: 1048px">
                @foreach($features as $key => $feature)
                    <div class="col-lg-3 col-6 py-2" data-aos="fade-up" data-aos-delay="{{ $key * 100 }}"
                        data-aos-duration="1000" data-aos-offset="100" data-aos-anchor-placement="bottom-bottom">
                        <div class="card-hover bg-primary text-white rounded-4 py-2 px-3 h-100">
                            <div class="h-100 justify-content-between gap-2 py-0">
                                <div class="py-md-3 mb-2" style="min-height: 50px;">
                                    <img src="{{ asset($feature['icon']) }}" width="51" height="50"
                                        alt="{{ $feature['title'] }} Icon">
                                </div>
                                <h3 class="feature-title text-wrap">{{ $feature['title'] }}</h3>
                                <p class="font-sm-small">
                                    {{ $feature['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="py-5">
        <div class="container ">
            <div class="row mx-1 align-items-center mb-4">
                <div class="col-12 col-lg">
                    <h1 class="m-0 fw-bold font-hashtag">Acara Seru yang Akan Datang</h1>
                    <p class="text-opacity-75 pt-2 text-black font-subtitle">
                        Ikuti acara menarik yang akan datang dan dapatkan pengalaman baru
                    </p>
                </div>
                <div class="col-12 col-lg">
                    <div class="row w-100 mx-auto">
                        <div class="col col-lg-auto overflow-hidden px-1 d-flex ms-lg-auto flex-grow-1 flex-lg-grow-0 align-items-center border border-3 rounded-4"
                            style="height: fit-content;">
                            <input style="outline: 0;" class="border-0 px-3 py-2 w-100 fs-6" type="text"
                                placeholder="Search" />
                            <button class="rounded-pill border-0 d-flex justify-content-center align-items-center bg-white"
                                style="height: 42px; width: 42px">
                                <img class="h-100 py-1" src="{{ asset('assets/images/icon/search.svg') }}" />
                            </button>
                        </div>
                        <div class="col-auto">
                            <img src="{{ asset('assets/images/icon/filter.svg') }}" style="height: 42px; width: 42px"
                                alt="Filter Icon" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mx-1">
                @foreach($events as $key => $event)
                    <!-- card -->
                    <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="{{ $key * 200 }}" data-aos-duration="1000"
                        data-aos-offset="100">
                        <div class="card-hover card shadow-lg border-0">
                            <div class="rounded-3 overflow-hidden">
                                <div
                                    class="w-100 object-fit-cover position-relative overflow-hidden d-flex justify-content-center align-items-center">
                                    @if(isset($event['status']) && !empty($event['status']))
                                        <span
                                            class="text-uppercase position-absolute bg-primary-dark m-3 px-3 rounded-3 py-2 top-0 start-0 fw-semibold text-white">{{ $event['status'] }}</span>
                                    @endif
                                    <img class="card-img-top rounded-0 h-100 w-100 object-fit-cover"
                                        src="{{ asset($event['image']) }}" alt="Event Image" />
                                </div>
                                <div class="d-flex p-3 flex-column gap-2">
                                    <h5 class="card-title font-20-700 text-uppercase">
                                        {{ $event['title'] }}
                                    </h5>
                                    <div class="d-flex font-14 align-items-center align-content-center">
                                        <img style="height: 20px" src="{{ asset('assets/images/icon/calendar.svg') }}"
                                            alt="Calendar Icon" />
                                        <p class="m-0 ps-3">{{ $event['date'] }}</p>
                                    </div>
                                    <div class="d-flex font-14 align-items-center align-content-center">
                                        <img style="height: 20px" src="{{ asset('assets/images/icon/location.svg') }}"
                                            alt="Location Icon" />
                                        <p class="m-0 ps-3">
                                            {{ $event['location'] }}
                                        </p>
                                    </div>
                                    <a href="{{ route('homepage.detail') }}"
                                        class="button-hover btn bg-primary-dark py-2 text-white fw-bold mt-2">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection