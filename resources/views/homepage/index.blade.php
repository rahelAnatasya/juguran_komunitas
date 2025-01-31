@extends('homepage.components.layout')

@section('content')

<!-- Hero Section -->
<div class="container py-1 pt-5 mt-5">
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
                <a href="#" class="btn bg-primary-dark hero-cta rounded-pill text-white fw-bold fs-6 btn-lg">Pelajari
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
            <div class="col-lg-3 col-6 py-2">
                <div class="bg-primary text-white rounded-4 py-2 px-3 h-100">
                    <div class="h-100 justify-content-between gap-2 py-0">
                        <div class="py-md-3 mb-2" style="min-height: 50px;">
                            <svg width="51" height="50" viewBox="0 0 51 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.4643 25C18.5196 25 19.5645 24.7922 20.5394 24.3883C21.5144 23.9845 22.4002 23.3926 23.1464 22.6464C23.8926 21.9002 24.4845 21.0144 24.8883 20.0394C25.2922 19.0645 25.5 18.0196 25.5 16.9643C25.5 15.909 25.2922 14.8641 24.8883 13.8892C24.4845 12.9142 23.8926 12.0284 23.1464 11.2822C22.4002 10.536 21.5144 9.9441 20.5394 9.54027C19.5645 9.13644 18.5196 8.92859 17.4643 8.92859C15.3331 8.92859 13.2892 9.77521 11.7822 11.2822C10.2752 12.7892 9.42858 14.8331 9.42858 16.9643C9.42858 19.0955 10.2752 21.1394 11.7822 22.6464C13.2892 24.1534 15.3331 25 17.4643 25ZM42.4643 18.75C42.4643 19.5708 42.3026 20.3835 41.9885 21.1418C41.6745 21.9001 41.2141 22.5891 40.6337 23.1694C40.0534 23.7498 39.3644 24.2102 38.6061 24.5243C37.8478 24.8384 37.0351 25 36.2143 25C35.3935 25 34.5808 24.8384 33.8225 24.5243C33.0642 24.2102 32.3752 23.7498 31.7949 23.1694C31.2145 22.5891 30.7541 21.9001 30.4401 21.1418C30.126 20.3835 29.9643 19.5708 29.9643 18.75C29.9643 17.0924 30.6228 15.5027 31.7949 14.3306C32.967 13.1585 34.5567 12.5 36.2143 12.5C37.8719 12.5 39.4616 13.1585 40.6337 14.3306C41.8058 15.5027 42.4643 17.0924 42.4643 18.75ZM4.07144 32.5893C4.07144 31.5237 4.49475 30.5017 5.24824 29.7482C6.00174 28.9948 7.0237 28.5714 8.0893 28.5714H26.0964C25.0756 29.3636 24.2498 30.379 23.6821 31.5397C23.1144 32.7005 22.82 33.9758 22.8214 35.2679C22.8214 37.6375 23.7929 39.7804 25.3607 41.3197C23.4607 42.2393 20.9036 42.8572 17.4643 42.8572C4.07144 42.8572 4.07144 33.4822 4.07144 33.4822V32.5893ZM31.3036 31.25C30.238 31.25 29.216 31.6733 28.4625 32.4268C27.709 33.1803 27.2857 34.2023 27.2857 35.2679C27.2857 36.3335 27.709 37.3554 28.4625 38.1089C29.216 38.8624 30.238 39.2857 31.3036 39.2857H32.1964C32.5516 39.2857 32.8923 39.4268 33.1435 39.678C33.3946 39.9292 33.5357 40.2698 33.5357 40.625C33.5357 40.9802 33.3946 41.3209 33.1435 41.572C32.8923 41.8232 32.5516 41.9643 32.1964 41.9643H31.3036C29.5276 41.9643 27.8243 41.2588 26.5685 40.003C25.3127 38.7471 24.6072 37.0439 24.6072 35.2679C24.6072 33.4919 25.3127 31.7886 26.5685 30.5328C27.8243 29.277 29.5276 28.5714 31.3036 28.5714H32.1964C32.5516 28.5714 32.8923 28.7125 33.1435 28.9637C33.3946 29.2149 33.5357 29.5555 33.5357 29.9107C33.5357 30.2659 33.3946 30.6066 33.1435 30.8577C32.8923 31.1089 32.5516 31.25 32.1964 31.25H31.3036ZM29.9643 35.2679C29.9643 34.9127 30.1054 34.572 30.3566 34.3209C30.6077 34.0697 30.9484 33.9286 31.3036 33.9286H41.125C41.4802 33.9286 41.8209 34.0697 42.072 34.3209C42.3232 34.572 42.4643 34.9127 42.4643 35.2679C42.4643 35.6231 42.3232 35.9637 42.072 36.2149C41.8209 36.4661 41.4802 36.6072 41.125 36.6072H31.3036C30.9484 36.6072 30.6077 36.4661 30.3566 36.2149C30.1054 35.9637 29.9643 35.6231 29.9643 35.2679ZM41.125 39.2857C42.1906 39.2857 43.2126 38.8624 43.9661 38.1089C44.7196 37.3554 45.1429 36.3335 45.1429 35.2679C45.1429 34.2023 44.7196 33.1803 43.9661 32.4268C43.2126 31.6733 42.1906 31.25 41.125 31.25H40.2322C39.877 31.25 39.5363 31.1089 39.2851 30.8577C39.034 30.6066 38.8929 30.2659 38.8929 29.9107C38.8929 29.5555 39.034 29.2149 39.2851 28.9637C39.5363 28.7125 39.877 28.5714 40.2322 28.5714H41.125C42.901 28.5714 44.6043 29.277 45.8601 30.5328C47.1159 31.7886 47.8214 33.4919 47.8214 35.2679C47.8214 37.0439 47.1159 38.7471 45.8601 40.003C44.6043 41.2588 42.901 41.9643 41.125 41.9643H40.2322C39.877 41.9643 39.5363 41.8232 39.2851 41.572C39.034 41.3209 38.8929 40.9802 38.8929 40.625C38.8929 40.2698 39.034 39.9292 39.2851 39.678C39.5363 39.4268 39.877 39.2857 40.2322 39.2857H41.125Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h3 class="feature-title text-wrap">Meningkat<br class="d-inline d-sm-none" />kan Koneksi
                        </h3>
                        <p class="font-sm-small">
                            Perluas Jaringan dan temui orang-orang dengan minat yang sama
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 py-2">
                <div class="bg-primary text-white rounded-4 py-2 px-3 h-100">
                    <div class="h-100 justify-content-between gap-2 py-0">
                        <div class="py-md-3 mb-2" style="min-height: 50px;">

                            <svg width="51" height="50" viewBox="0 0 51 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.66667 34.3666V14.2312C4.66667 13.7159 4.80208 13.2375 5.07292 12.7958C5.34375 12.3541 5.72361 12.0472 6.2125 11.875C7.43611 11.3361 8.70903 10.9451 10.0313 10.7021C11.3535 10.459 12.6903 10.3375 14.0417 10.3375C16.3181 10.3375 18.3389 10.6257 20.1042 11.2021C21.8681 11.7784 23.6722 12.6347 25.5167 13.7708C25.8444 13.9514 26.0972 14.1944 26.275 14.5C26.4528 14.8055 26.5417 15.1562 26.5417 15.5521V36.0812C28.2306 35.1396 29.934 34.459 31.6521 34.0396C33.3701 33.6201 35.1389 33.4118 36.9583 33.4146C38.2083 33.4146 39.3319 33.4916 40.3292 33.6458C41.3264 33.8 42.2063 34.0055 42.9688 34.2625C43.2882 34.3958 43.582 34.3757 43.85 34.2021C44.1181 34.0284 44.2514 33.7548 44.25 33.3812V12.6958C44.25 12.4 44.3493 12.1527 44.5479 11.9541C44.7465 11.7555 44.9944 11.6555 45.2917 11.6541C45.5889 11.6527 45.8368 11.7527 46.0354 11.9541C46.234 12.1555 46.3333 12.4027 46.3333 12.6958V34.3666C46.3333 35.2194 45.975 35.8743 45.2583 36.3312C44.5403 36.7868 43.7764 36.8639 42.9667 36.5625C42.0028 36.1875 41.0181 35.9166 40.0125 35.75C39.0069 35.5819 37.9889 35.4979 36.9583 35.4979C35.1764 35.4979 33.4319 35.7291 31.725 36.1916C30.0167 36.6555 28.3931 37.3389 26.8542 38.2416C26.6569 38.3611 26.4403 38.4514 26.2042 38.5125C25.9681 38.5736 25.7333 38.6034 25.5 38.6021C25.2667 38.6007 25.0326 38.5708 24.7979 38.5125C24.5632 38.4541 24.3458 38.3639 24.1458 38.2416C22.6069 37.3389 20.984 36.6555 19.2771 36.1916C17.5701 35.7277 15.825 35.4965 14.0417 35.4979C12.9583 35.4979 11.8931 35.5882 10.8458 35.7687C9.8 35.9507 8.78195 36.2423 7.79167 36.6437C7.03611 36.9451 6.32639 36.8541 5.6625 36.3708C4.99861 35.8875 4.66667 35.2194 4.66667 34.3666ZM32.15 27.4208V9.56247C32.15 9.19025 32.2604 8.85553 32.4813 8.5583C32.7021 8.25969 32.9806 8.05483 33.3167 7.94372L37.0104 6.76455C37.416 6.61733 37.7896 6.68191 38.1313 6.9583C38.4715 7.23608 38.6417 7.58122 38.6417 7.99372V25.8521C38.6417 26.2229 38.5313 26.5569 38.3104 26.8541C38.091 27.1527 37.8125 27.3576 37.475 27.4687L33.7813 28.6479C33.3757 28.7951 33.0028 28.7305 32.6625 28.4541C32.3208 28.1764 32.15 27.8333 32.15 27.4208Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h3 class="feature-title text-wrap">Berbagi Pengalaman</h3>
                        <p class="font-sm-small">
                            Bagikan perjalanan dan pelajaran berharga yang bisa
                            menginspirasi.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6 py-2">
                <div class="bg-primary text-white rounded-4 py-2 px-3 h-100">
                    <div class="h-100 justify-content-between gap-2 py-0">
                        <div class="py-md-3 mb-2" style="min-height: 50px;">
                            <svg width="51" height="50" viewBox="0 0 51 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.5 14.5834C23.1056 14.5818 20.7839 15.4051 18.9254 16.9148C17.0669 18.4245 15.7853 20.5283 15.2962 22.8721C14.8071 25.216 15.1403 27.6568 16.2399 29.7837C17.3395 31.9107 19.1382 33.5939 21.3333 34.55V39.5834H29.6667V34.55C31.8598 33.5923 33.6563 31.9087 34.7543 29.7823C35.8522 27.656 36.1847 25.2164 35.6959 22.8738C35.207 20.5311 33.9266 18.4282 32.0698 16.9184C30.213 15.4087 27.8931 14.5841 25.5 14.5834Z"
                                    fill="white" />
                                <path
                                    d="M44.25 25H46.3333M39.0417 11.4584L41.125 9.37502M25.5 6.25002V4.16669M11.9583 11.4584L9.87501 9.37502M6.75001 25H4.66667M21.3333 45.8334H29.6667M35.9167 25C35.9161 23.1221 35.408 21.2793 34.4459 19.6666C33.4839 18.0538 32.1038 16.7311 30.4516 15.8385C28.7994 14.9458 26.9367 14.5164 25.0605 14.5956C23.1842 14.6748 21.3643 15.2598 19.7933 16.2886C18.2223 17.3174 16.9586 18.7517 16.136 20.4399C15.3134 22.128 14.9624 24.0071 15.1202 25.8783C15.278 27.7496 15.9387 29.5434 17.0324 31.0699C18.1262 32.5964 19.6122 33.7989 21.3333 34.55V39.5834H29.6667V34.55C31.5248 33.7391 33.1058 32.4036 34.216 30.7072C35.3262 29.0108 35.9173 27.0274 35.9167 25Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <h3 class="feature-title text-wrap">Wawasan Baru</h3>

                        <p class="font-sm-small">
                            Dapatkan wawasan baru dari sudut pandang yang berbeda dan unik.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 py-2">
                <div class="bg-primary text-white rounded-4 py-2 px-3 h-100">
                    <div class="h-100 justify-content-between gap-2 py-0">
                        <div class="py-md-3 mb-2" style="min-height: 50px;">
                            <svg width="51" height="50" viewBox="0 0 51 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.125 8.33331C13.0861 8.33331 10.1716 9.54053 8.02273 11.6894C5.87387 13.8382 4.66666 16.7527 4.66666 19.7916C4.66666 20.8333 4.85416 21.875 5.12499 22.9166H13.625L16.2708 15.8958C16.8958 14.2291 19.3542 14.0625 20.1458 15.8958L24.4583 27.0833L25.6875 24.125C25.9583 23.4375 26.6875 22.9166 27.5833 22.9166H45.875C46.1458 21.875 46.3333 20.8333 46.3333 19.7916C46.3333 16.7527 45.1261 13.8382 42.9773 11.6894C40.8284 9.54053 37.9139 8.33331 34.875 8.33331C31 8.33331 27.5833 10.2708 25.5 13.2083C23.4167 10.2708 20 8.33331 16.125 8.33331ZM6.74999 26.0416C6.19746 26.0416 5.66755 26.2611 5.27685 26.6518C4.88615 27.0425 4.66666 27.5724 4.66666 28.125C4.66666 28.6775 4.88615 29.2074 5.27685 29.5981C5.66755 29.9888 6.19746 30.2083 6.74999 30.2083H11.8333L23.4167 41.6666C25.5 43.5416 25.5 43.5416 27.5833 41.6666L39.1667 30.2083H44.25C44.8025 30.2083 45.3324 29.9888 45.7231 29.5981C46.1138 29.2074 46.3333 28.6775 46.3333 28.125C46.3333 27.5724 46.1138 27.0425 45.7231 26.6518C45.3324 26.2611 44.8025 26.0416 44.25 26.0416H28.4167L26.4792 30.8333C25.6458 32.9375 23.25 32.6458 22.4792 30.8958L18.2083 19.7916L16.2083 24.6458C15.8958 25.4375 15.1875 26.0416 14.25 26.0416H6.74999Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h3 class="feature-title text-wrap">Dukungan Positif</h3>
                        <p class="font-sm-small">
                            Temukan dukungan dan motivasi untuk berkembang bersama secara
                            positif.
                        </p>
                    </div>
                </div>
            </div>
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
                        <input style="outline: 0;" class="border-0 px-3 py-2 w-100 fs-6
                type=" text" placeholder="Search" />
                        <button class="rounded-pill border-0 d-flex justify-content-center align-items-center bg-white"
                            style="height: 42px; width: 42px">
                            <svg width="48" height="48" viewBox="0 0 48 49" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.106689" width="48" height="48" rx="24" fill="#724CB4" />
                                <path
                                    d="M22.8203 33.7472C28.7962 33.7472 33.6405 28.9029 33.6405 22.927C33.6405 16.951 28.7962 12.1067 22.8203 12.1067C16.8443 12.1067 12 16.951 12 22.927C12 28.9029 16.8443 33.7472 22.8203 33.7472Z"
                                    stroke="white" stroke-width="4" stroke-linejoin="round" />
                                <path
                                    d="M26.4208 18.6899C25.9484 18.2165 25.3871 17.8411 24.7692 17.5852C24.1514 17.3293 23.489 17.1979 22.8202 17.1986C22.1514 17.1979 21.4891 17.3293 20.8712 17.5852C20.2533 17.8411 19.692 18.2165 19.2196 18.6899M30.5994 30.7061L36 36.1067"
                                    stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
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
            <!-- card -->
            <div class="col-md-6 col-xl-4">
                <div class="card shadow-lg border-0">
                    <div class="rounded-3 overflow-hidden">
                        <div
                            class="w-100 object-fit-cover position-relative overflow-hidden d-flex justify-content-center align-items-center">
                            <span
                                class="text-uppercase position-absolute bg-primary-dark m-3 px-3 rounded-3 py-2 top-0 start-0 fw-semibold text-white">Expired</span>
                            <img class="card-img-top rounded-0 h-100 w-100 object-fit-cover"
                                src="{{ asset('assets/images/poster-januari-2025.jpg') }}" alt="Event Image" />
                        </div>
                        <div class="d-flex p-3 flex-column gap-2">
                            <h5 class="card-title font-20-700 text-uppercase">
                                Juguran Komunitas - Transform Your Design Skills
                            </h5>
                            <div class="d-flex font-14 align-items-center align-content-center">
                                <img style="height: 20px" src="{{ asset('assets/images/icon/calendar.svg') }}"
                                    alt="Calendar Icon" />
                                <p class="m-0 ps-3">Januari 25, 2025</p>
                            </div>
                            <div class="d-flex font-14 align-items-center align-content-center">
                                <img style="height: 20px" src="{{ asset('assets/images/icon/location.svg') }}"
                                    alt="Location Icon" />
                                <p class="m-0 ps-3">
                                    Warung Mulyo, Pabuaran, Purwokerto Utara, Banyumas
                                </p>
                            </div>
                            <a href="{{ route('homepage.detail') }}"
                                class="btn bg-primary-dark py-2 text-white fw-bold mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card end -->

            <!-- card -->
            <div class="col-md-6 col-xl-4">
                <div class="card shadow-lg border-0">
                    <div class="rounded-3 overflow-hidden">
                        <div
                            class="w-100 object-fit-cover position-relative overflow-hidden d-flex justify-content-center align-items-center">
                            <span
                                class="text-uppercase position-absolute bg-primary-dark m-3 px-3 rounded-3 py-2 top-0 start-0 fw-semibold text-white">Expired</span>
                            <img class="card-img-top rounded-0 h-100 w-100 object-fit-cover"
                                src="{{ asset('assets/images/poster-januari-2025.jpg') }}" alt="Event Image" />
                        </div>
                        <div class="d-flex p-3 flex-column gap-2">
                            <h5 class="card-title font-20-700 text-uppercase">
                                Juguran Komunitas - Transform Your Design Skills
                            </h5>
                            <div class="d-flex font-14 align-items-center align-content-center">
                                <img style="height: 20px" src="{{ asset('assets/images/icon/calendar.svg') }}"
                                    alt="Calendar Icon" />
                                <p class="m-0 ps-3">Januari 25, 2025</p>
                            </div>
                            <div class="d-flex font-14 align-items-center align-content-center">
                                <img style="height: 20px" src="{{ asset('assets/images/icon/location.svg') }}"
                                    alt="Location Icon" />
                                <p class="m-0 ps-3">
                                    Warung Mulyo, Pabuaran, Purwokerto Utara, Banyumas
                                </p>
                            </div>
                            <a href="{{ route('homepage.detail') }}"
                                class="btn bg-primary-dark py-2 text-white fw-bold mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card end -->
            <!-- card -->
            <div class="col-md-6 col-xl-4">
                <div class="card shadow-lg border-0">
                    <div class="rounded-3 overflow-hidden">
                        <div
                            class="w-100 object-fit-cover position-relative overflow-hidden d-flex justify-content-center align-items-center">
                            <span
                                class="text-uppercase position-absolute bg-primary-dark m-3 px-3 rounded-3 py-2 top-0 start-0 fw-semibold text-white">Expired</span>
                            <img class="card-img-top rounded-0 h-100 w-100 object-fit-cover"
                                src="{{ asset('assets/images/poster-januari-2025.jpg') }}" alt="Event Image" />
                        </div>
                        <div class="d-flex p-3 flex-column gap-2">
                            <h5 class="card-title font-20-700 text-uppercase">
                                Juguran Komunitas - Transform Your Design Skills
                            </h5>
                            <div class="d-flex font-14 align-items-center align-content-center">
                                <img style="height: 20px" src="{{ asset('assets/images/icon/calendar.svg') }}"
                                    alt="Calendar Icon" />
                                <p class="m-0 ps-3">Januari 25, 2025</p>
                            </div>
                            <div class="d-flex font-14 align-items-center align-content-center">
                                <img style="height: 20px" src="{{ asset('assets/images/icon/location.svg') }}"
                                    alt="Location Icon" />
                                <p class="m-0 ps-3">
                                    Warung Mulyo, Pabuaran, Purwokerto Utara, Banyumas
                                </p>
                            </div>
                            <a href="{{ route('homepage.detail') }}"
                                class="btn bg-primary-dark py-2 text-white fw-bold mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card end -->
            <!-- card -->
            <div class="col-md-6 col-xl-4">
                <div class="card shadow-lg border-0">
                    <div class="rounded-3 overflow-hidden">
                        <div
                            class="w-100 object-fit-cover position-relative overflow-hidden d-flex justify-content-center align-items-center">

                            <img class="card-img-top rounded-0 h-100 w-100 object-fit-cover"
                                src="{{ asset('assets/images/poster-januari-2025.jpg') }}" alt="Event Image" />
                        </div>
                        <div class="d-flex p-3 flex-column gap-2">
                            <h5 class="card-title font-20-700 text-uppercase">
                                Juguran Komunitas - Transform Your Design Skills
                            </h5>
                            <div class="d-flex font-14 align-items-center align-content-center">
                                <img style="height: 20px" src="{{ asset('assets/images/icon/calendar.svg') }}"
                                    alt="Calendar Icon" />
                                <p class="m-0 ps-3">Januari 25, 2025</p>
                            </div>
                            <div class="d-flex font-14 align-items-center align-content-center">
                                <img style="height: 20px" src="{{ asset('assets/images/icon/location.svg') }}"
                                    alt="Location Icon" />
                                <p class="m-0 ps-3">
                                    Warung Mulyo, Pabuaran, Purwokerto Utara, Banyumas
                                </p>
                            </div>
                            <a href="{{ route('homepage.detail') }}"
                                class="btn bg-primary-dark py-2 text-white fw-bold mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card end -->

            <!-- card -->
            <div class="col-md-6 col-xl-4">
                <div class="card shadow-lg border-0">
                    <div class="rounded-3 overflow-hidden">
                        <div
                            class="w-100 object-fit-cover position-relative overflow-hidden d-flex justify-content-center align-items-center">

                            <img class="card-img-top rounded-0 h-100 w-100 object-fit-cover"
                                src="{{ asset('assets/images/poster-januari-2025.jpg') }}" alt="Event Image" />
                        </div>
                        <div class="d-flex p-3 flex-column gap-2">
                            <h5 class="card-title font-20-700 text-uppercase">
                                Juguran Komunitas - Transform Your Design Skills
                            </h5>
                            <div class="d-flex font-14 align-items-center align-content-center">
                                <img style="height: 20px" src="{{ asset('assets/images/icon/calendar.svg') }}"
                                    alt="Calendar Icon" />
                                <p class="m-0 ps-3">Januari 25, 2025</p>
                            </div>
                            <div class="d-flex font-14 align-items-center align-content-center">
                                <img style="height: 20px" src="{{ asset('assets/images/icon/location.svg') }}"
                                    alt="Location Icon" />
                                <p class="m-0 ps-3">
                                    Warung Mulyo, Pabuaran, Purwokerto Utara, Banyumas
                                </p>
                            </div>
                            <a href="{{ route('homepage.detail') }}"
                                class="btn bg-primary-dark py-2 text-white fw-bold mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card end -->

            <!-- card -->
            <div class="col-md-6 col-xl-4">
                <div class="card shadow-lg border-0">
                    <div class="rounded-3 overflow-hidden">
                        <div
                            class="w-100 object-fit-cover position-relative overflow-hidden d-flex justify-content-center align-items-center">

                            <img class="card-img-top rounded-0 h-100 w-100 object-fit-cover"
                                src="{{ asset('assets/images/poster-januari-2025.jpg') }}" alt="Event Image" />
                        </div>
                        <div class="d-flex p-3 flex-column gap-2">
                            <h5 class="card-title font-20-700 text-uppercase">
                                Juguran Komunitas - Transform Your Design Skills
                            </h5>
                            <div class="d-flex font-14 align-items-center align-content-center">
                                <img style="height: 20px" src="{{ asset('assets/images/icon/calendar.svg') }}"
                                    alt="Calendar Icon" />
                                <p class="m-0 ps-3">Januari 25, 2025</p>
                            </div>
                            <div class="d-flex font-14 align-items-center align-content-center">
                                <img style="height: 20px" src="{{ asset('assets/images/icon/location.svg') }}"
                                    alt="Location Icon" />
                                <p class="m-0 ps-3">
                                    Warung Mulyo, Pabuaran, Purwokerto Utara, Banyumas
                                </p>
                            </div>
                            <a href="{{ route('homepage.detail') }}"
                                class="btn bg-primary-dark py-2 text-white fw-bold mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card end -->


        </div>
    </div>
</section>
@endsection