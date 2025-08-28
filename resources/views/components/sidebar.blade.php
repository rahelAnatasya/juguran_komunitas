<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="{{ route("homepage") }}" class="logo-dark">
            <img src="{{ url('assets/images/logo/icon-juguran-komunitas.png') }}" class="logo-sm" alt="logo sm" />
            <span class="logo-lg fw-bold align-middle" style="color: #0d47a1;">Juguran Komunitas</span>
        </a>

        <a href="{{ route("homepage") }}" class="logo-light">
            <img src="{{ url('assets/images/logo/icon-juguran-komunitas.png') }}" class="logo-sm" alt="logo sm" />
            <span class="logo-lg fw-bold align-middle" style="color: #0d47a1;">Juguran Komunitas</span>
        </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <iconify-icon icon="iconamoon:arrow-left-4-square-duotone" class="button-sm-hover-icon"></iconify-icon>
    </button>

    <div class="scrollbar" data-simplebar>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title">General</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <span class="nav-icon">
                        <iconify-icon icon="iconamoon:home-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Dashboard </span>
                </a>
                <!--  <div class="collapse" id="sidebarDashboards">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('dashboard') }}">Activity</a>
                        </li>
                    </ul>
                </div> -->
            </li>

            <li class="menu-title">menu</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('event') }}">
                    <span class="nav-icon">
                        <i class='bx bxs-user'></i>
                    </span>
                    <span class="nav-text"> Semua Acara </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#yourEvent" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="yourEvent">
                    <span class="nav-icon">
                        <iconify-icon icon="iconamoon:home-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text">Acara </span>
                </a>
                <div class="collapse" id="yourEvent">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('your-event') }}">Your Event</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('joined') }}">Joined</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link text-danger" href="apps-chat.php">
                    <span class="nav-icon">
                        <i class="bx bx-log-out fs-18 align-middle me-1"></i>
                    </span>
                    <span class="nav-text"> Keluar </span>
                </a>
            </li> -->
        </ul>
    </div>
</div>