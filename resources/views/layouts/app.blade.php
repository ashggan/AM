<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}"  >
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <script src="{{asset('js/app.js')}} " defer></script>
        <title>WEB DEVELOPER</title>
</head>
<body>
    <div id="app" >
        <div id="dashboard"> 
        @if (Auth::check())
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a href="/"><img src="/logo.png" alt="AM" width="40px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @else 
                                <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link"> Dashboard</a></li>
                                <li class="nav-item"><a href="/admin/project" class="nav-link"> Projects</a></li>
                                <li class="nav-item"><a href="/admin/gallery" class="nav-link"> Gallery</a></li>
                                <li class="nav-item"><a href="/admin/contact" class="nav-link"> Contact</a></li>
                                <li class="nav-item"><a href="/admin/techs" class="nav-link"> Technoliges</a></li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                               
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav> 
        @endif
        @yield('content')
        </div>          
    </div>
    @yield('script')

</body>
</html>
