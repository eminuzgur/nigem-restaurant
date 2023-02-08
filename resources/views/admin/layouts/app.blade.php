<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('css')
</head>

<body>
    <div class="grid-container">
        <!-- Header -->
        <header class="header">
            <div class="header-row">
                <div class="container">
                    <div class="header-wrapper">
                        <div class="header-left">
                            <div class="menu-icon" onclick="openSidebar()">
                                <span class="material-icons-outlined">menu</span>
                            </div>
                        </div>
                        <div class="header-right">
                            <button class="btn btn-success">Login</button>
                            <button class="btn btn-dark">Sing Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                    Restaurant
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="{{ route('product-index') }}">
                        <i class="fa fa-product-hunt" aria-hidden="true"></i>
                        Products
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="{{ route('category-index') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        Categories </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="{{ route('category-index') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        Orders </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="{{ route('customer-index') }}">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        Customers </a>
                </li>
            </ul>
        </aside>
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
