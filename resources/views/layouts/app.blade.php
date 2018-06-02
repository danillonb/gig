<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Danillo Barbosa">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('pace/pace-theme-minimal.css') }}">

    <title>{{ config('app.name', 'Laravel') }} - {{Route::currentRouteName()}}</title>

    <!-- Styles / Fonts / Scripts / Fonts -->
    <link rel="stylesheet" charset="utf-8" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" charset="utf-8" href="{{ asset('materialize-css/css/materialize.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
    </script><script type="text/javascript" src="{{ asset('materialize-css/js/materialize.min.js') }}"></script>
</head>
<body @if(Session::has('message')) onload="M.toast({html: '{{ Session::get('message') }}', classes: 'rounded teal'})" @endif >
<div id="app">
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper blue-grey darken-1">
                <a href="#!" class="brand-logo">{{ config('app.name', 'Laravel') }}</a>

                <ul class="right hide-on-med-and-down">
                    @guest
                        <li><a href="{{ route('login') }}">{{ __('Entrar') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ __('Registrar') }}</a></li>
                    @else
                        <li><a href="{{route('Painel Principal')}}"><i class="material-icons right tooltipped" data-position="bottom" data-tooltip="{{__('Painel Principal')}}">dashboard</i></a></li></li>
                        <li><a href="#"><i class="material-icons right tooltipped" data-position="bottom" data-tooltip="{{__('Cartão de Membros')}}">contact_mail</i></a></li>
                        <li><a href="#"><i class="material-icons right tooltipped" data-position="bottom" data-tooltip="{{__('Declarações')}}">web</i></a></li>
                        <li><a href="#"><i class="material-icons right tooltipped" data-position="bottom" data-tooltip="{{__('Igrejas')}}">home</i></a></li>
                        <li><a href="{{route('Membros')}}"><i class="material-icons right tooltipped" data-position="bottom" data-tooltip="{{__('Membros')}}">group</i></a></li>
                        <li><a href="#"><i class="material-icons right tooltipped" data-position="bottom" data-tooltip="{{__('Relatórios')}}">description</i></a></li>
                        <li><a href="#"><i class="material-icons right tooltipped" data-position="bottom" data-tooltip="{{__('Tabelas Administrativas')}}">view_list</i></a></li>
                        <li><a href="#"><i class="material-icons right tooltipped" data-position="bottom" data-tooltip="{{__('Tesouraria')}}">monetization_on</i></a></li>
                        <li><a href="#"><i class="material-icons right tooltipped" data-position="bottom" data-tooltip="{{__('Usuários')}}">person_outline</i></a></li>
                        <!-- Dropdown Structure | user-dropdown -->
                        <ul id="user-dropdown" class="dropdown-content">
                            <li><a href="#!" class="teal white-text">{{Auth::user()->name}}</a></li>
                            <li class="divider"></li>
                            <li><a href="#!">{{__('Perfil')}}<i class="material-icons right">person</i></a></li>
                            <li><a href="#!">{{__('Mensagens')}}<i class="material-icons right">email</i></a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                        <!-- Dropdown Trigger -->
                        <li><a class="dropdown-trigger" href="#!" data-target="user-dropdown">{{Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
                    @endguest
                </ul>
                <a href="#" data-target="sidebar-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>
    @include('layouts.sidenav')

    <main class="py-4">
        @yield('content')
    </main>
</div>

</body>

<!-- Scripts -->
<script src="{{ asset('pace/pace.js') }}"></script>
<script src="{{ asset('materialize-css/js/triggers/init.js') }}"></script>
@yield('page-scripts')
</html>
