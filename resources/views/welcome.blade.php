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

    <title>Bem Vindo</title>

    <!-- Styles / Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" charset="utf-8" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" charset="utf-8" href="{{ asset('materialize-css/css/materialize.min.css') }}"
          media="screen,projection">


</head>
<body>
<nav class="teal lighten-1">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo truncate hide-on-small-only">Ass. de Deus em Camboatá</a>
        <a id="logo-container" href="#" class="brand-logo hide-on-med-and-up">ADC</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#contato" class="left">Contato</a></li>
            <li><a href="{{ route('login') }}"
                   class="left">Área Restrita</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="http://polar-brushlands-65191.herokuapp.com/login" class="black-text">Área Restrita</a>
            </li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i
                    class="material-icons">menu</i></a>
    </div>
</nav>

<div id="index-banner" class="parallax-container z-depth-2">
    <div class="section no-pad-bot">
        <div class="container">

        </div>
    </div>
    <div class="parallax"><img src="{{ asset('img/background1.jpg') }}" alt="Unsplashed background img 1"></div>
</div>
<div class="row">
    <div class="col s12 m12 l7 offset-l1 z-depth-2">
        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="section">
                    <h3 class="center teal-text text-darken-2"><i class="far fa-newspaper"></i> Ultimas Notícias</h3>
                    <div class="carousel carousel-slider center z-depth-2">
                        <div class="carousel-item red white-text" href="#one!">
                            <h2>First Panel</h2>
                            <p class="white-text">This is your first panel</p>
                            <div class="carousel-fixed-item">
                                <a class="btn waves-effect teal">Saber
                                    Mais</a>
                            </div>
                        </div>
                        <div class="carousel-item amber white-text" href="#two!">
                            <h2>Second Panel</h2>
                            <p class="white-text">This is your second panel</p>
                            <div class="carousel-fixed-item center">
                                <a class="btn waves-effect teal">Saber
                                    Mais</a>
                            </div>
                        </div>
                        <div class="carousel-item green white-text" href="#three!">
                            <h2>Third Panel</h2>
                            <p class="white-text">This is your third panel</p>
                            <div class="carousel-fixed-item center">
                                <a class="btn waves-effect teal">Saber
                                    Mais</a>
                            </div>
                        </div>
                        <div class="carousel-item blue white-text" href="#four!">
                            <h2>Fourth Panel</h2>
                            <p class="white-text">This is your fourth panel</p>
                            <div class="carousel-fixed-item center">
                                <a class="btn waves-effect teal">Saber
                                    Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="section">
                    <div class="col s12 m6 l6">

                    </div>
                    <div class="col s12 m6 l6">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m12 l4 z-depth-2">
        <div class="col s12 m12 l12">
            <!--   Icon Section   -->
            <div class="row">

                <div class="section">
                    <div class="icon-block">
                        <h3 class="center teal-text text-darken-2"><i class="far fa-calendar-alt"></i> Anúncios da Semana</h3>
                        <br>
                        <h5 class="center"><b>Segunda-feira - 03/06</b></h5>
                        <p class="center">Oração da Vitória - <b>09h</b></p>
                        <p class="center">Oração de Cura e Libertação - <b>19h</b></p>
                        <hr>
                        <h5 class="center"><b>Terça-feira - 04/06</b></h5>
                        <p class="center">Culto público com os Adolescentes - <b>19h</b></p>
                        <hr>
                        <h5 class="center"><b>Quarta-feira - 05/06</b></h5>
                        <p class="center">EFA estará em consagração aqui na igreja - <b>09h</b></p>
                        <p class="center">Evangelismo com os Jovens e Adolescentes - <b>19h</b></p>
                        <p class="center">Ensaio Para a Cantata de Natal - <b>19h</b></p>
                        <hr>
                        <h5 class="center"><b>Quinta-feira - 06/06</b></h5>
                        <p class="center">Culto da Família - <b>19h</b></p>
                        <hr>
                        <h5 class="center"><b>Sexta-feira - 07/06</b></h5>
                        <p class="center">Oração com as Mães - <b>09h</b></p>
                        <p class="center">Culto na casa da irmã Dulcinéia - <b>19h</b></p>
                        <hr>
                        <h5 class="center"><b>Sábado - 08/06</b></h5>
                        <p class="center">Não existem anúncios para este dia</p>
                        <hr>
                        <h5 class="center"><b>Domingo - 09/06</b></h5>
                        <p class="center">Escola Bíblica Dominical - <b>09h</b></p>
                        <p class="center">Ensaio para o Depto. Infantil - <b>Após EBD</b></p>
                        <p class="center">Ensaio para os Adolescentes - <b>16h30min</b></p>
                        <p class="center">Culto Público - <b>18h</b></p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
</div>
<footer class="page-footer teal black-text">
    <div class="footer-copyright">
        <div class="container">
            Made with <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
            <a href="#" class="right white-text">Developed by Danillo Barbosa</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
</script>
<script type="text/javascript" src="{{ asset('materialize-css/js/materialize.min.js') }}"></script>
<script src="{{ asset('materialize-css/js/init.js') }}"></script>
<script src="{{ asset('pace/pace.js') }}"></script>


</body>
</html>
