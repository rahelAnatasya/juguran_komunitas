<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="index.php" class="logo-dark">
            <img src="{{ url('assets/images/logo/icon-juguran-komunitas.png') }}" class="logo-sm" alt="logo sm"/>
            <span class="logo-lg fw-bold align-middle" style="color: #0d47a1;">Juguran Komunitas</span>
        </a>

        <a href="index.php" class="logo-light">
            <img src="{{ url('assets/images/logo/icon-juguran-komunitas.png') }}" class="logo-sm" alt="logo sm"/>
            <span class="logo-lg fw-bold align-middle" style="color: #0d47a1;">Juguran Komunitas</span>
        </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover"  aria-label="Show Full Sidebar">
        <iconify-icon icon="iconamoon:arrow-left-4-square-duotone" class="button-sm-hover-icon"></iconify-icon>
    </button>

    <div class="scrollbar" data-simplebar>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title">General</li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                    <span class="nav-icon">
                        <iconify-icon
                            icon="iconamoon:home-duotone"
                        ></iconify-icon>
                    </span>
                    <span class="nav-text"> Dashboard </span>
                </a>
                <div class="collapse" id="sidebarDashboards">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('dashboard') }}">Activity</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-title">menu</li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarPresensi" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPresensi">
                    <span class="nav-icon">
                        <i class='bx bx-folder-open'></i>
                    </span>
                    <span class="nav-text"> Presensi </span>
                </a>
                <div class="collapse" id="sidebarPresensi">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="" >Absensi</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="" >Jadwal</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="" >Pengumuman</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="" >Izin/Cuti</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sdm" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sdm">
                    <span class="nav-icon">
                        <i class='bx bxs-user'></i>
                    </span>
                    <span class="nav-text"> SDM </span>
                </a>
                <div class="collapse" id="sdm">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="" >Pegawai</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="" >Divisi</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="apps-chat.php">
                    <span class="nav-icon">
                        <i class="bx bx-log-out fs-18 align-middle me-1"></i>
                    </span>
                    <span class="nav-text"> Logout </span>
                </a>
            </li>
        </ul>
    </div>
</div>
