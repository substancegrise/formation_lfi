<!DOCTYPE html>
<html lang="fr">
<head>
    <!--Information pour le navigateur-->
    <meta charset="utf-8"/>
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
        <section class="loader">

        <div>
                <a href="#">

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
                </a>
            </div>
            <div>
                <menu data-0="opacity:0" data-900="opacity:1" id="mymenu" {{ (Request::is('production')||Request::is('pr')) ? ' class="blanc"' : "" }}>>
                    <ul>
                        <li {{ Request::is('/') ? ' class="active"' : "" }}><a href="{{url('/')}}">ACCUEIL</a></li>
                        <li><a href="{{url('/')}}">PRESENTATION</a></li>
                        <li><a href="{{url('formations')}}">FORMATIONS</a></li>
                        <li><a href="#">TrEMA LAB</a></li>
                        <li><a href="#">ACTUALITE</a></li>
                    </ul>
                </menu>
            </div>
            <div id="entreprise" data-0="color:rgb(255,255,255);" data-900="color:rgb(0,0,0,);">
                <p>[ ESPACE ENTREPRISE ]</p>
                <p><span class="glyphicons glyphicons-zoom-in"></span></p>
                <a href=""><img  src="../public/assets/images/assets/loupe_white.png"></a>
                <a href=""><img src="../public/assets/images/assets/sound_white.png"></a>
            </div>
            <!--ESPACE PRO EST RECHERCHE -->
            <div>
                <a class="header_icon" id="" href=""></a>
                <img id="logo" src="../public/assets/images/assets/logo_lifi_blanc.png">
            </div>
        </section>
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

            --><section><p>LES FORMATIONS D'ISSOUDUN<br>
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
    <section id="formredbaby">
    <section id="formulaire"  >
        <div class="content">
            <div class="middle">
                <form method="POST" enctype="multipart/form-data" class="form-group">
                    <section id="formleft" class="col-md-4">
                        <div>
                            <h5>NOUS<br>CONTACTER</h5>
                        </div>
                        <div>
                            <p>Afin de mieux répondre à vos attentes, merci de remplir le formulaire
                                ci-contre.</p>
                        </div>
                    </section>
                    <section id="formcenter" class="col-md-4">
                        <div id="test">
                            <input class="select2_single form-control" type="text" id="name" name="name"
                                   required="required" placeholder="NAME" class="">
                        </div>
                        <div>
                            <input class="select2_single form-control" type="text" id="prenom" name="prenom"
                                   required="required" placeholder="PRENOM" class="">
                        </div>
                        <div>
                            <input class="select2_single form-control" type="email" id="email" name="email"
                                   required="required" placeholder="EMAIL" class="">
                        </div>
                        <div>
                            <select class="select2_single form-control" tabindex="-1">
                                <option>VOUS ÊTES</option>
                                <option>UN ETUDIANT</option>
                                <option>UN PARTICULIER</option>
                                <option>UNE ENTREPRISE</option>
                            </select>
                        </div>
                    </section>
                    <section id="formright" class="col-md-4">
                        <div>
                            <div>
                                <select class="select2_single form-control" tabindex="-1">
                                    <option>SUJET</option>
                                    <option>DEMANDE D'INFORMATION</option>
                                    <option>PRISE DE CONTACT</option>
                                    <option>DEMANDE DE RENDEZ-VOUS</option>
                                    <option>SUIVI DE DOSSIER</option>
                                    <option>AUTRE</option>
                                </select>
                            </div>
                            <div>
                                        <textarea class="date-picker form-control col-md-7 col-xs-12" type="text"
                                                  id="message" name="message" required="required" placeholder="MESSAGE"
                                                  rows="6"></textarea>
                            </div>
                            <div>
                                <button id="send" type="submit" class="boutonsend">ENVOYER</button>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
            <div id="cookie">
                <p>
                    Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004, vous
                    bénéficiez d'un droit d'accès et de rectification aux informations qui vous concernent
                </p>
            </div>
        </div>
    </section>
</div>


<div id="butskiky">
    <ul>
        <li class="openform">FORM</li>
        <li><a></a></li>
    </ul>
</div>


<!--- CARTOGRAPHIE---->

<div class="formwhite">
    <div class="closeformwhite">XXXXXX</div>
    <div id="cartograhie">
        <img src="../public/assets/images/catographie/DEMO_cartographie10.swf">
    </div>

</div>


<div id="buttwhite">
    <ul>
        <li class="openformwhite">WHITE</li>
        <li><a></a></li>
    </ul>
</div>




<script type="text/javascript" src="{{ asset("js/skrollr.min.js") }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset("js/jquery-1.12.2.min.js") }}" rel="stylesheet"></script>
<script type="text/javascript">
    var s = skrollr.init();
</script>
<script>

    $(document).ready(function () {
        // form red anim
        $(".openform").on("click", function () {
            $('.formred').addClass('animform');
        });

        $(".closeform").on("click", function () {
            $('.formred').removeClass('animform');
        });
        // form white anim
        $(".openformwhite").on("click", function () {
            $('.formwhite').addClass('animformwhite');
        });

        $(".closeform").on("click", function () {
            $('.formwhite').removeClass('animformwhite');
        });
    });

</script>

</body>
</html>