<!DOCTYPE html>
<html lang="en" style="max-width: 100vw">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Juguran Komunitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- font start -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <!-- font end -->
    <style>
        :root {
            --color-primary-dark: #754fb8;
            --color-primary: #6a6acf;
            --color-background-primary: #7986e3;
        }

        body {
            font-family: "Montserrat", sans-serif !important;
        }

        .color-primary-dark {
            border-color: var(--color-primary-dark) !important;
            color: var(--color-primary-dark) !important;
        }

        .color-primary {
            color: var(--color-primary) !important;
        }

        .bg-primary {
            background-color: var(--color-background-primary) !important;
        }

        .bg-primary-dark {
            background-color: var(--color-primary-dark) !important;
        }

        .bg-primary-hover:hover {
            background-color: #5757ba !important;
        }

        .bg-primary-dark-hover:hover {
            background-color: #5d399b !important;
        }

        .font-sm-small {
            font-size: 16px;
        }

        @media (max-width: 576px) {
            .font-sm-small {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    @include('homepage.components.navbar')
    @yield('content')
    @include('homepage.components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>