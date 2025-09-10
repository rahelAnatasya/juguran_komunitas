@extends('homepage.components.layout')

@section('content')

    <!-- Hero Section -->
    <div class="container py-1 pt-5 mt-5">
    </div>

    <!-- Events Section -->
    <section id="event" class="py-5 ">
        <div class="container ">
            <div class="row mx-1 align-items-center mb-4">
                <div class="col-12 col-lg">
                    <h1 class="m-0 fw-bold font-hashtag">{{ $title }}</h1>
                    <p class="text-opacity-75 pt-2 text-black font-subtitle">
                        Jelajahi semua acara menarik yang akan datang dan dapatkan pengalaman baru
                    </p>
                </div>
                <div class="col-12 col-lg">
                    <div class="row w-100 mx-auto">
                        <form action="{{ route('homepage.all-events-search') }}" method="GET"
                            class="col col-lg-auto overflow-hidden px-1 d-flex ms-lg-auto flex-grow-1 flex-lg-grow-0 align-items-center border border-3 rounded-4"
                            style="height: fit-content;">
                            <input type="hidden" name="filter" value="{{ $currentFilter ?? 'all' }}">
                            <input style="outline: 0;" class="border-0 px-3 py-2 w-100 fs-6" type="text" name="q"
                                placeholder="Search" value="{{ $searchQuery ?? '' }}" />
                            <button type="submit"
                                class="rounded-pill border-0 d-flex justify-content-center align-items-center bg-white"
                                style="height: 42px; width: 42px">
                                <img class="h-100 py-1" src="{{ asset('assets/images/icon/search.svg') }}" />
                            </button>
                        </form>
                        <div class="col-auto">
                            <div class="dropdown">
                                <button class="btn p-0 border-0 bg-transparent dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/images/icon/filter.svg') }}" style="height: 42px; width: 42px"
                                        alt="Filter Icon" />
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item {{ ($currentFilter ?? 'all') === 'all' ? 'active' : '' }}" href="{{ route('homepage.all-events', ['filter' => 'all']) }}">Semua Acara</a></li>
                                    <li><a class="dropdown-item {{ ($currentFilter ?? 'all') === 'upcoming' ? 'active' : '' }}" href="{{ route('homepage.all-events', ['filter' => 'upcoming']) }}">Akan Datang</a></li>
                                    <li><a class="dropdown-item {{ ($currentFilter ?? 'all') === 'ongoing' ? 'active' : '' }}" href="{{ route('homepage.all-events', ['filter' => 'ongoing']) }}">Sedang Berlangsung</a></li>
                                    <li><a class="dropdown-item {{ ($currentFilter ?? 'all') === 'completed' ? 'active' : '' }}" href="{{ route('homepage.all-events', ['filter' => 'completed']) }}">Selesai</a></li>
                                </ul>
                            </div>
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
                                <div class="w-100 position-relative overflow-hidden d-flex justify-content-center align-items-center bg-gray-200"
                                    style="height: 400px;">
                                    @if(isset($event['status']) && !empty($event['status']))
                                        <span
                                            class="text-uppercase position-absolute bg-primary-dark z-3 m-3 px-3 rounded-3 py-2 top-0 start-0 fw-semibold text-white">{{ $event['status'] }}</span>
                                    @endif
                                    <img class="card-img-top rounded-0 w-100 h-100" style="object-fit: cover;"
                                        src="{{ asset($event['image']) }}" alt="{{ $event['title'] }}"
                                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />

                                    @if(!isset($event['image']))
                                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center w-100 h-100"
                                            style="display: none;">
                                            <i class='bx bx-image text-muted' style='font-size: 3rem;'></i>
                                        </div>
                                    @endif
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
                                    <a href="{{ route('homepage.detail', $event['id']) }}"
                                        class="button-hover btn bg-primary-dark py-2 text-white fw-bold mt-2">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($events->count() === 0)
                <div class="text-center py-5">
                    <h3 class="text-muted">Belum ada event yang tersedia</h3>
                    <p class="text-muted">Silakan kembali lagi nanti untuk melihat event-event terbaru</p>
                </div>
            @endif

            <!-- Pagination -->
            @if($events->hasPages())
                <div class="d-flex justify-content-center mt-5">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            {{-- Previous Page Link --}}
                            @if($events->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link">&laquo;</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $events->previousPageUrl() }}" rel="prev">&laquo;</a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach($events->getUrlRange(1, $events->lastPage()) as $page => $url)
                                @if($page == $events->currentPage())
                                    <li class="page-item active">
                                        <span class="page-link">{{ $page }}</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if($events->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $events->nextPageUrl() }}" rel="next">&raquo;</a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">&raquo;</span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            @endif
        </div>
    </section>
@endsection
