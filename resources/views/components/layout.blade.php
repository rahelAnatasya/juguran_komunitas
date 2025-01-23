<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Juguran Komunitas - {{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="description"
            content="A fully responsive premium admin dashboard template"
        />
        <meta name="author" content="Techzaa" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('assets/images/logo/logo-hs.png') }}" />

        <!-- Vendor css (Require in all Page) -->
        <link href="{{ url('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Icons css (Require in all Page) -->
        <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css (Require in all Page) -->
        <link href="{{ url('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Theme Config js (Require in all Page) -->
        <script src="{{ url('assets/js/config.js') }}"></script>

        {{-- css --}}
        <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">

        {{-- locatioon --}}
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

        {{-- costum css yajra --}}
        {{-- <link href="{{ asset('assets/css/costum-yajra/main.css') }}" rel="stylesheet" type="text/css" /> --}}

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>

    </head>
    <body>
        <div class="wrapper">
            @include('components.navbar')

            @include('components.sidebar')
            <div class="page-content">
                <div class="container-xxl">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="mb-0 fw-semibold">{{ $title }}</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="javascript: void(0);">{{ $title }}</a>
                                    </li>
                                    <li class="breadcrumb-item active"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
               @include('components.footer')
            </div>
        </div>

         <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
         <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

        <!-- Vendor Javascript (Require in all Page) -->
        <script src="{{ url('assets/js/vendor.js') }}"></script>

        <!-- App Javascript (Require in all Page) -->
        <script src="{{ url('assets/js/app.js') }}"></script>

    </body>
</html>
