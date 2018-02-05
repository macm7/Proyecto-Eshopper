<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Iniciar sesion</a></li>
                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        @else
                        <li><a href="{{ route('index') }}">Volver</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">


                    @if(!Auth::guest())
                    <div class="list-group">
                    @role('admin')
                        <a href="{{ route('home.index') }}" class="list-group-item @if (Route::is('home.index')) active @endif">Home</a>
                        <a href="{{ route('users.index') }}" class="list-group-item @if (Route::is('users.index')) active @endif">Usuarios</a>
                        <a href="{{ route('roles.index') }}" class="list-group-item @if (Route::is('roles.index')) active @endif">Roles</a>
                        <a href="{{ route('slider.index') }}" class="list-group-item @if (Route::is('slider.index')) active @endif">Sliders</a>
                        <a href="{{ route('comment.index') }}" class="list-group-item @if (Route::is('comment.index')) active @endif">Comentarios</a>
                        <a href="{{ route('products.index') }}" class="list-group-item @if (Route::is('products.index')) active @endif">Productos</a>
                        <a href="{{ route('review.index') }}" class="list-group-item @if (Route::is('review.index')) active @endif">Reseñas</a>
                        <a href="{{ route('category.index') }}" class="list-group-item @if (Route::is('category.index')) active @endif">Categorías</a>
                        <a href="{{ route('contact.index') }}" class="list-group-item @if (Route::is('contact.index')) active @endif">Información de Contacto</a>
                    @endrole
                        <a href="{{ route('blog.index') }}" class="list-group-item @if (Route::is('blog.index')) active @endif">Blog</a>
                    </div>
                    @endif
                </div>
                <div class="col-sm-9">
                    @yield('content')
                    <p class="clearfix"></p>
                </div>
            </div>
        </div>
    </div>
    @include('includes.scripts')
</body>
</html>
