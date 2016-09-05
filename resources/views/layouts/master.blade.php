<!DOCTYPE html>
<html lang="fr">
<head>
    <!--Information pour le navigateur-->
    <meta charset="utf-8" />
    <title>Les formations d'isoudun</title>

    <meta name="viewport" content="width=device-width, user-scalable=no">

    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

    <!--FONT -->
    <link href="{{ asset("css/latofonts.css") }}" rel="stylesheet">
    <link href="{{ asset("css/latostyle.css") }}" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css" media="screen">
    <link rel="stylesheet" href="" media="print">
    <!--FICHIER JS -->
</head>
<body>
<div class="site_pusher">
    <header id="head" >
        <section>
        <div class="loader">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div>
            <menu id="mymenu">
                <ul>
                    <li><a href="{{url('/')}}">ACCUEIL</a></li>
                    <li><a href="#">PRESENTATION</a></li>
                    <li><a href="#">FORMATIONS</a></li>
                    <li><a href="#">TrEMA LAB</a></li>
                    <li><a href="#">ACTUALITE</a></li>
                </ul>
            </menu>
        </div>
        </section>

        <!--ESPACE PRO EST RECHERCHE -->
            <div>
                <a class="header_icon" id="" href=""></a>
                <img id="logo" src="">
                    <div id="entreprise" data-0="color:rgb(255,255,255);" data-900="color:rgb(0,0,0);">
                        <p>[ ESPACE ENTREPRISE ]</p>
                        <a href=""><img src="../public/assets/images/assets/loupe_white.png"></a>
                        <a href=""><img src="../public/assets/images/assets/sound_white.png"></a>
                    </div>
            </div>
    </header>

            @yield('main_container')
    </div>
    <footer>
        <div class="content">
            <div>
                <p>SUIVEZ-NOUS SUR LES RÉSEAUX SOCIAUX</p>
            </div>
            <div id="sociaux">
                <ul>
                    <li><a href="#"><img src="../public/assets/images/sociaux/facebook.png"></a></li>
                    <li><a href="#"><img src="../public/assets/images/sociaux/linkedin.png"></a></li>
                    <li><a href="#"><img src="../public/assets/images/sociaux/instagram.png"></a></li>
                    <li><a href="#"><img src="../public/assets/images/sociaux/youtube.png"></a></li>
                </ul>
            </div>
            <section>
                <nav>
                    <ul>
                        <li><a href="#">ACCUEIL</a></li>
                        <li><a href="#">L'ECOLE</a></li>
                        <li><a href="#">LE TrEMA LAB</a></li>
                        <li><a href="#">AGENDA</a></li>
                        <li><a href="#">ACTUALITES</a></li>
                        <li><a href="#">CARTOGRAPHIE DES METIER</a></li>
                    </ul>
                </nav>
            </section><!--
            --><section>
                <nav>
                    <ul>
                        <li><a href="#">FORMATIONS</a></li>
                        <li><a href="#">•LONGUES</a></li>
                        <li><a href="#">•COURTES</a></li>
                        <li><a href="#">•EN CONTINUE</a></li>
                        <li><a href="#">•MODULES A LA CARTE</a></li>
                        <li><a href="#">ESPACE ENTREPRISE</a></li>
                    </ul>
                </nav>
            </section><!--
            --><section>
                <nav>
                    <ul>
                        <li><a href="#">NEWSLETTER</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="#">PLAN DU SITE</a></li>
                        <li><a href="#">GOOGLE MAP</a></li>

                    </ul>
                </nav>
            </section><!--
            --><section>
                <p>LES FORMATIONS D'ISSOUDUN<br>
                    PIAF rue du Bât le Tan<br>
                    36100 ISSOUDUN</p>
                <p>Tel : 02 52 03 16 26</p>
                <p>Fax : 02 54 21 79 37</p>
                <p>contactatlfissoundun.org</p>
            </section>
        </div>
    </footer>
    <div class="formred">
        <div class="closeform">x</div>




    </div>
<div id="butskiky">
    <ul>
        <li class="openform">FORM</li>
        <li><a></a></li>
    </ul>
    </div>

    <script type="text/javascript" src="{{ asset("js/skrollr.min.js") }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script type="text/javascript">
        var s = skrollr.init();
    </script>
<script>

    $( document ).ready(function() {

        $( ".openform" ).on( "click", function() {
            $( '.formred' ).addClass('animform');
        });

        $( ".closeform" ).on( "click", function() {
            $( '.formred' ).removeClass('animform');
        });
    });

</script>

</body>
</html>