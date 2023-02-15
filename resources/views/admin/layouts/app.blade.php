<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Dashboard | @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    @yield('css')

</head>

<body>
    <div class="grid-container">

        <!-- Header -->
        <x-header />
        <!-- End Header -->

        <!-- Sidebar -->
        <x-sidebar />
        <!-- End Sidebar -->

        <!-- Main -->
        <main class="main-container">
            <div class="container">
                @yield('content')
            </div>
        </main>
        <!-- End Main -->

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    @yield('js')
</body>

</html>
