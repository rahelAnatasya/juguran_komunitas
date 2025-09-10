<header class="topbar">
    <div class="container-xxl">
        <div class="navbar-header">
            <div class="d-flex align-items-center gap-2">
                <!-- Menu Toggle Button -->
                <div class="topbar-item">
                    <button type="button" class="button-toggle-menu">
                        <iconify-icon icon="iconamoon:menu-burger-horizontal" class="fs-22"></iconify-icon>
                    </button>
                </div>

                <!-- App Search-->
                <form class="app-search d-none d-md-block me-auto" action="{{ route('event.search') }}" method="GET">
                    <div class="position-relative">
                        <button type="submit" class="border-0 bg-transparent position-absolute top-50 translate-middle-y me-2">
                            <iconify-icon icon="iconamoon:search-duotone" class="search-widget-icon"></iconify-icon>
                        </button>
                        <input type="search" name="q" class="form-control" placeholder="Search..." autocomplete="off" value="{{ request('q', '') }}" />
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center gap-1">
                <!-- Theme Color (Light/Dark) -->
                <div class="topbar-item">
                    <button type="button" class="topbar-button" id="light-dark-mode">
                        <iconify-icon icon="iconamoon:mode-dark-duotone" class="fs-24 align-middle"></iconify-icon>
                    </button>
                </div>

                <!-- User -->
                <div class="dropdown topbar-item">
                    <a type="button" class="topbar-button" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle" width="32"
                                src="{{ url('assets/images/users/dummy-avatar.jpg') }}" alt="avatar-3" />
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Selamat Datang {{ auth()->user()->name }}!</h6>
                        <a class="dropdown-item" href="{{ route('profile') }}">
                            <i class="bx bx-user-circle text-muted fs-18 align-middle me-1"></i>
                            <span class="align-middle">Profile</span>
                        </a>
                        <div class="dropdown-divider my-1"></div>

                        <!-- <a class="dropdown-item text-danger" href="{{ route('logout') }}">
                            <i class="bx bx-log-out fs-18 align-middle me-1"></i>
                            <span class="align-middle">Keluar</span>
                        </a> -->

                        <button type="button" class="dropdown-item text-danger" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            <i class="bx bx-log-out fs-18 align-middle me-1"></i>
                            <span class="align-middle">Keluar</span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin keluar?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <a href="{{ route('logout') }}" class="btn btn-danger">Ya</a>
            </div>
        </div>
    </div>
</div>
