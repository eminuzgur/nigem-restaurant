<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resaurant | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @yield('css')
    <style>
        body {
            display: flex
        }
    </style>
</head>

<body>
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light  vh-100 " style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <span class="fs-4">Resteurant</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="#" class="nav-link link-dark">
                    Customers
                </a>
            </li>
            <li>
                <a href="{{ route('category-list') }}"
                    class="nav-link link-dark {{ Route::is('category-list') ? 'active' : '' }}">
                    Categories
                </a>
            </li>
            <li>
                <a href="{{ route('product-list') }}"
                    class="nav-link link-dark {{ Route::is('product-list') ? 'active' : '' }}">
                    Products
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    Orders
                </a>
            </li>
        </ul>
    </div>

    @yield('content')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    @yield('js')
</body>

</html>
