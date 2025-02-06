<nav style="backdrop-filter: blur" class="navbar fixed-top bg-white border border-bottom shadow-sm navbar-expand-lg">
  <div class="container align-items-center">
    <a class="navbar-brand lh-1 color-primary-dark d-flex align-items-center fw-bold" href="{{route('homepage')}}">
      <img style="height: 52px" src="/assets/images/logo/icon-juguran-komunitas.png" alt="Logo" />
      <span>JUGURAN <br />
        KOMUNITAS</span>
    </a>

    <div class="row w-100 mx-auto d-none d-lg-flex">
      <div
        class="mx-4 col col-lg-auto overflow-hidden px-1 d-flex mx-lg-auto flex-grow-1 flex-lg-grow-0 align-items-center border border-3 rounded-4"
        style="height: fit-content; width: 300px;">
        <input style="outline: 0;" class="border-0 px-3 py-2 w-100 fs-6" type="text" placeholder="Search" />
        <button class="rounded-pill border-0 d-flex justify-content-center align-items-center bg-white"
          style="height: 42px; width: 42px">
          <svg width="48" height="48" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
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
    </div>

    <button class="navbar-toggler border-0" type="button" style="box-shadow: none" data-bs-toggle="offcanvas"
      data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="navbarOffcanvasLabel">Menu</h5>
        <button type="button" class="btn-close mx-2 my-3 text-reset" data-bs-dismiss="offcanvas"
          aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="ms-3 navbar-nav gap-2 text-center text-lg-start">
          <li class="nav-item">
            <a class="nav-link color-primary fw-semibold border-bottom mx-auto border-3 color-primary-dark"
              style="width: fit-content" href="{{route('homepage')}}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-primary fw-semibold" href="#">Event</a>
          </li>
          <li class="nav-item">
            <a class="button-hover btn py-2 px-4 bg-primary text-white fw-bold" href="{{route('login')}}">Masuk</a>
          </li>
          <li class="nav-item">
            <a class="button-hover btn py-2 px-4 bg-primary-dark text-white fw-bold"
              href="{{route('register')}}">Daftar</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>