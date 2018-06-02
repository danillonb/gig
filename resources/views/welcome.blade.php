
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Danillo Barbosa">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="HQwPpBCALWGVdQm00TYX896vjXK3cnvCOnnVBGaN">

    <link rel="stylesheet" href="{{ asset('pace/pace-theme-minimal.css') }}">

    <title>Bem Vindo</title>

    <!-- Styles / Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" charset="utf-8" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" charset="utf-8" href="{{ asset('materialize-css/css/materialize.min.css') }}"
          media="screen,projection">
          

</head>
<body>
<div class="z-depth-3">
    <nav class="white">
        <div class="nav-wrapper">
            <a id="logo-container" href="#" class="brand-logo grey-text text-darken-2">Welcome</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#contato" class="left grey-text text-darken-2"><b>Contato</b></a></li>
                <li><a href="http://polar-brushlands-65191.herokuapp.com/login"
                       class="left grey-text text-darken-2"><b>Área Restrita</b></a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="http://polar-brushlands-65191.herokuapp.com/login" class="black-text">Área Restrita</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger black-text"><i
                        class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

<div id="index-banner" class="parallax-container z-depth-2">
    <div class="section no-pad-bot">
        <div class="container">
            <h1 class="header white-text">Assembeia de Deus</h1>
            <h5 class="header col s12 light white-text"><b>Em Camboatá</b></h5>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="{{ asset('img/background1.jpg') }}" alt="Unsplashed background img 1"></div>
</div>
<div class="row">
    <div class="col s12 m12 l7 offset-l1 z-depth-2">
        <!--   Icon Section   -->
        <div class="row z-depth-2">
            <div class="col s12 m6 l6">
                <div class="icon-block">
                    <h2 class="center amber-text text-darken-4"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">Speeds up development</h5>

                    <p class="light">We did most of the heavy lifting for you to provide a default stylings that
                        incorporate our custom components. Additionally, we refined animations and transitions
                        to
                        provide a smoother experience for developers.</p>
                </div>
            </div>

            <div class="col s12 m6 l6">
                <div class="icon-block">
                    <h2 class="center amber-text text-darken-4"><i class="material-icons">group</i></h2>
                    <h5 class="center">User Experience Focused</h5>

                    <p class="light">By utilizing elements and principles of Material Design, we were able to
                        create
                        a
                        framework that incorporates components and animations that provide more feedback to
                        users.
                        Additionally, a single underlying responsive system across all platforms allow for a
                        more
                        unified user experience.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="section">
                <div class="col s12 m4 l4">
                    <div class="carousel">
                        <a class="carousel-item" href="#one!"><img
                                    src="https://pi.tedcdn.com/r/tedideas.files.wordpress.com/2017/05/featured_art_heal_forests.jpg?"></a>
                        <a class="carousel-item" href="#two!"><img
                                    src="https://www.nighthelper.com/wp-content/uploads/2016/03/nature_waterfall_summer_lake_trees_90400_3840x2160.jpg"></a>
                        <a class="carousel-item" href="#three!"><img
                                    src="https://www.quirkybyte.com/wp-content/uploads/2016/02/Green-Nature-Trees-l.jpg"></a>
                        <a class="carousel-item" href="#four!"><img
                                    src="https://image.pbs.org/video-assets/pbs/nature/241862/images/mezzanine_152.jpg"></a>
                        <a class="carousel-item" href="#five!"><img
                                    src="https://images.unsplash.com/photo-1506361797048-46a149213205?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=493e200df17b54d1ef10eb61e1df148a&w=1000&q=80"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m12 l4 z-depth-2">
        <div class=>
            <div class="section">
                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="icon-block">
                            <div class="valign-wrapper brown-text text-darken-2">
                                <i class="fas fa-calendar-alt fa-3x"> </i>
                                <h3 class="">Anúncios da Semana</h3>
                            </div>
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
</div>

<div class="row">
</div>
<footer class="page-footer white black-text z-depth-2">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="grey-text">Company Bio</h5>
                <p >We are a team of college students working on this project like
                    it's
                    our full time job. Any amount would help support and continue development on this project and is
                    greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="">Settings</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="">Connect</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
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
