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
          <img class="h-100 py-1" src="{{ asset('assets/images/icon/search.svg') }}" />
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
            <a class="nav-link color-primary fw-semibold" style="width: fit-content" href="{{route('homepage')}}"
              id="beranda-nav-link">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-primary fw-semibold" href="/#event" id="event-nav-link">Event</a>
          </li>
          @auth
            <li class="nav-item">
              <a class="button-hover btn py-2 px-4 bg-primary text-white fw-bold"
                href="{{route('dashboard')}}">Dashboard</a>
            </li>
          @else
            <li class="nav-item">
              <a class="button-hover btn py-2 px-4 bg-primary text-white fw-bold" href="{{route('login')}}">Masuk</a>
            </li>
            <li class="nav-item">
              <a class="button-hover btn py-2 px-4 bg-primary-dark text-white fw-bold"
                href="{{route('register')}}">Daftar</a>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </div>
</nav>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    function updateNavActive() {
      const berandaNavLink = document.getElementById('beranda-nav-link');
      const eventNavLink = document.getElementById('event-nav-link');
      const hash = window.location.hash;
      const currentPath = window.location.pathname;

      berandaNavLink.classList.remove('border-bottom', 'mx-auto', 'border-3', 'color-primary-dark');
      eventNavLink.classList.remove('border-bottom', 'mx-auto', 'border-3', 'color-primary-dark');

      if (currentPath === '/') {
        if (hash === '#event') {
          eventNavLink.classList.add('border-bottom', 'mx-auto', 'border-3', 'color-primary-dark');
        } else {
          berandaNavLink.classList.add('border-bottom', 'mx-auto', 'border-3', 'color-primary-dark');
        }
      }
    }

    updateNavActive();

    window.addEventListener('hashchange', updateNavActive);

    window.addEventListener('load', updateNavActive);
  });
</script>