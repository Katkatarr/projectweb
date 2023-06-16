<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PW-IBIK</title>
        <link rel="stylesheet" href="{{ url('./assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ url('./assets/bootstrapicons/font/bootstrap-icons.css') }}">
    </head>
    <body class="bg-body-tertiary">
        <header>
            @include('templates.headers.navbar')
        </header>
        <main class="container-pt-10">
            @yield('banner')
        </main>
        <main>
            @yield('content')
        </main>
        <footer class="container mt-5">
            <div class="text-center">
                <p class="fs-7">&copy; 2023 HARPAS Kesatuan</p>
            </div>
        </footer>
        <script src="{{ url('./assets/js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>