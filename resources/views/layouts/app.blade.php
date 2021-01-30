<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="body">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <a href="#" class="logo">LaravelBlog</a>
                    </div>

                    <div class="col-9 header-menu">
                        <ul class="navbar-nav flex-row">
                            <li>
                                <a class="menu-item" href="#">Главная</a>
                            </li>
                            <li>
                                <a class="menu-item" href="#">Статьи</a>
                            </li>
                            <li>
                                <a class="menu-item" href="#">О блоге</a>
                            </li>
                            @auth
                                <li>
                                    <a class="menu-item" href="#"
                                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                    >Выход</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <section class="content">
            <div class="container">
                @yield('content')
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <a href="#" class="logo">LaravelBlog</a>
                    </div>

                    <div class="col-9 header-menu">
                        <ul class="navbar-nav flex-row">
                            <li>
                                <a class="menu-item" href="#">Главная</a>
                            </li>
                            <li>
                                <a class="menu-item" href="#">Статьи</a>
                            </li>
                            <li>
                                <a class="menu-item" href="#">О блоге</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
