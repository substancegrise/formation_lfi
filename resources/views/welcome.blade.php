@extends('layouts.master')

@push('stylesheets')



<!--FONT -->
<link href="{{ asset("css/latofonts.css") }}" rel="stylesheet">
<link href="{{ asset("css/latostyle.css") }}" rel="stylesheet">
<!--CSS-->

<link rel="stylesheet" href="css/style.css" media="screen">
<link rel="stylesheet" href="" media="print">

@endpush


@section('main_container')
    <section class="site_pusher">
        <!-- page content -->
        <!-- SLIDER -->
        <div class="site_content">
            <section id="slider">
                <div class="txtslider">
                    <h1>SE FORMER AUX METIERS DES MUSIQUES ACTUELLES</h1>
                </div>
                <div class="contentslider">
                    <div class="next">
                        <a href="#" class="pointe">DÉCOUVRIR</a>
                        <a class="apointe"><img src="assets/images/assets/next_blanc.png"></a>
                    </div>
                </div>
            </section>
            <section id="formations">
                <div class="content">
                    <img class="blackpointe" src="assets/images/assets/pointe_black.png">

                    <section id="txt_type1">
                        <div class="titre">
                            <h2>NOS<br>FORMATIONS</h2>
                        </div>
                        <div id="txt1">
                            <p>Depuis 1989 LFI développe une activité exclusive de formation aux métiers des Musiques
                                Actuelles et propose notamment des formations certifiantes</p>
                        </div>
                        <div id="txt2">
                            <p>(chargé de production, régisseur de production), une formation de backliner et des
                                formations professionnalisantes…<a href="">[Lire la suite]</a></p>
                        </div>
                    </section>
                    <section class="imgform">
                        <article class="cadreform">
                            <div class="inner-box">
                                <a href="" class="txtform1"><p>TECHNICIEN</p></a>
                                <a href="" class="txtform2"><p>DE PLATEAU</p></a>
                                <a href="" class="formtype">FORMATION LONGUE</a>
                                <a href="" class="eyes"><img src="assets/images/formations/eyes.png"></a>
                                <a href="" class="formvisu"><img src="assets/images/formations/imgpar3.jpg"></a>
                            </div>
                        </article><!--

                        --><article class="cadreform">
                            <div class="inner-box">
                                <a href="" class="txtform1"><p>TECHNICIEN</p></a>
                                <a href="" class="txtform2"><p>DE PLATEAU</p></a>
                                <a href="" class="formtype">FORMATION LONGUE</a>
                                <a href="" class="eyes"><img src="assets/images/formations/eyes.png"></a>
                                <a href="" class="formvisu"><img src="assets/images/formations/imgpar3.jpg"></a>
                            </div>
                        </article><!--

                        --><article class="cadreform">
                            <div class="inner-box">
                                <a href="" class="txtform1"><p>TECHNICIEN</p></a>
                                <a href="" class="txtform2"><p>DE PLATEAU</p></a>
                                <a href="" class="txtform3"><p>TEXTE EN PLUS</p></a>
                                <a href="" class="formtype">FORMATION LONGUE</a>
                                <a href="" class="eyes"><img src="assets/images/formations/eyes.png"></a>
                                <a href="" class="formvisu"><img src="assets/images/formations/imgpar3.jpg"></a>
                            </div>
                        </article><!--

                        --><article class="cadreform">
                            <div class="inner-box">
                                <a href="" class="txtform1"><p>TECHNICIEN</p></a>
                                <a href="" class="txtform2"><p>DE PLATEAU</p></a>
                                <a href="" class="txtform3"><p>REGISSEUR</p></a><a class="formtype">FORMATION LONGUE</a>
                                <a href="" class="eyes"><img src="assets/images/formations/eyes.png"></a>
                                <a href="" class="formvisu"><img src="assets/images/formations/imgpar3.jpg"></a>
                            </div>
                        </article><!--

                        --><article class="cadreform">
                            <div class="inner-box">
                                <a href="" class="txtform1"><p>TECHNICIEN</p></a>
                                <a href="" class="txtform2"><p>DE PLATEAU</p></a>
                                <a href="" class="formtype">FORMATION LONGUE</a>
                                <a href="" class="eyes"><img src="assets/images/formations/eyes.png"></a>
                                <a href="" class="formvisu"><img src="assets/images/formations/imgpar3.jpg"></a>
                            </div>
                        </article><!--

                         --><article class="cadreform">
                            <div class="inner-box">
                                <a href="" class="txtform1"><p>TECHNICIEN</p></a>
                                <a href="" class="txtform2"><p>DE PLATEAU</p></a>
                                <a href="" class="formtype">FORMATION LONGUE</a>
                                <a href="" class="eyes"><img src="assets/images/formations/eyes.png"></a>
                                <a href="" class="formvisu"><img src="assets/images/formations/imgpar3.jpg"></a>
                            </div>
                        </article>
                    </section>
                    <div class="detailsujet">
                        <a class="buttdetail" href="">PLUS DE DÉTAIL</a>
                    </div>
                    <div class="blackrow">
                        <a href="#"><img src="assets/images/assets/next_black.png"></a>
                    </div>
                </div>
            </section>
            <section id="trema">
                <div class="content">
                    <img class="blackpointe" src="assets/images/assets/pointe_blanche.png">
                    <section class="cdrtrema col-md-12 col-xs-12">
                        <section id="tremavisu" class="col-md-4 col-xs-4">
                            <img src="assets/images/trema/visu_trema.png">
                            <div id="containtrema">
                                <div class="titretrema">
                                    <h2>LE<br>TrEMA LAB</h2>
                                </div>
                                <div>
                                    <p class="txttrema1">TRAVAIL ET </p>
                                    <p class="txttrema2">MUSIQUES</p>
                                    <p class="txttrema3">ACTUELLES</p>
                                </div>
                            </div>
                        </section>
                        <div id="trematxt" class="col-md-8 col-xs-8">
                            <div>
                                <div><p>Un projet pédagogique ambitieux</p></div>
                                <div><p>
                                        L’analyse du travail réel en vue de la formation nous impose de relier les
                                        moda-lités de formation aux usages professionnels qui en seront faits :
                                        la digitalisation des ressources de formation se veut une réponse aux usages et
                                        besoins du travail nomade, asynchrone et collaboratif devenu ordinaire dans le
                                        monde de travail, notamment dans le milieu des musiques actuelles marqué par la
                                        prédominance massive des TPE de moins de 5 salariés et du travail en mode
                                        projet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="col-md-12 col-xs-8">
                    <div class="col-md-2 col-xs-8 detailsujet">
                        <p class="buttdetail" >PLUS DE DETAIL</p>
                        <div>
                            <img src="">
                        </div>
                    </div>
                    </section>
                </div>
            </section>
            <section id="actus">
                <div class="content">
                    <div class="titreactus">
                        <h2>ACTUALITES / AGENDA / EVENEMENT</h2>
                    </div>
                    <section id="middle">
                    @if(!empty($articles))
                        @foreach($articles as $article)
                            <!-- debut de l'article -->
                                <article id="cdractus">
                                    <!-- category -->
                                    <div id="typedate">
                                        <div id="type">
                                            <p>
                                                @foreach($categories as $categorie)
                                                    @if($categorie->id == $article->article_categorie_id)
                                                        <a href="{{url('categorie', $categorie->id)}}">{{$categorie->titre}}</a>
                                                    @endif
                                                @endforeach
                                            </p>
                                        </div>
                                        <!-- date -->
                                        <div id="date">
                                            <?php $date = explode("-",$article->date_event);?>
                                            <p>{{$date[0]."/".$date[1]}}</p>
                                        </div>
                                    </div>
                                    <div id="titledesc">
                                        <!-- titre -->
                                        <div id="titleactus">
                                            <p>{{$article->titre}}</p>
                                        </div>
                                        <!-- description-->
                                        <div id="descactus">
                                            <p>{{$article->description}}</p>
                                        </div>
                                    </div>

                                    <!-- autres -->
                                    <img src="">
                                    <img src="">
                                    <div>

                                        @if(count($article->uri)>0)
                                            <img class="featurette-image img-responsive"
                                                 src="{{url('assets',['images', $article->uri])}}"/>
                                        @endif
                                    </div>
                                </article>
                            @endforeach
                        @else
                            <p>Aucun d'articles</p>
                        @endif
                    </section>
                    <div class="detailsujet">
                        <a class="buttdetail" href="">EN VOIR PLUS</a>
                    </div>
                    <div class="blackrow">
                        <a href="#"><img src="assets/images/assets/next_black.png"></a>
                    </div>
                </div>
            </section>
<!-- PARTENAIRE -->
            <section id="partners">
                <div class="content">
                    <div>
                        <p id="txtpartners">LES FORMATIONS D'ISSOUDUN AVEC LE SOUTIEN DE :</p>
                        <ul id="logo_partners">
                            <li><a href="#"><img src="assets/images/partners/partners_1.png"></a></li>
                            <li><a href="#"><img src="assets/images/partners/partners_2.png"></a></li>
                            <li><a href="#"><img src="assets/images/partners/partners_3.png"></a></li>
                            <li><a href="#"><img src="assets/images/partners/partners_4.png"></a></li>
                            <li><a href="#"><img src="assets/images/partners/partners_5.png"></a></li>
                        </ul>
                    </div>
                </div>
            </section>
<!-- CONTACT -->
            <section id="contact">
                <div class="content">
                    <section id="acces">
                        <div id="titleacces">
                            <h5>ACCES</h5>
                        </div>
                        <div id="txtacces">
                            <p>Notre centre est situé à Issoudun au cœur de la France, à 250 km au sud de Paris, entre
                                Bourges
                                et Châteauroux, sur l'axe SNCF Paris-Limoges-Toulouse,
                                à 10 minutes de l'A20 et à
                                proximité de l'A71 et de l'axe SNCF Lyon-Nantes.</p>
                        </div>
                        <div class="butgoogle">
                            <a href="#">GOOGLE MAP</a>
                        </div>
                    </section><!--
                    --><section id="map">

                    </section>
                </div>
            </section>
<!-- FORMULAIRE -->
            <section id="formulaire">
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
    </section>
    <!-- /page content -->
@endsection

