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
        <div class="site_content">
            <section id="slider">

                    <div class="txtslider" >
                        <h1 >SE FORMER AUX METIERS DES MUSIQUES ACTUELLES</h1>
                    </div>
                    <div class="next">
                        <a href="" class="pointe">DÉCOUVRIR</a>
                        <a class="apointe"><img src="assets/images/assets/next_blanc.png"></a>
                    </div>
                <img class="blackpointe" src="assets/images/assets/pointe_black.png">
            </section>
            <section id="formations">
                <div class="content">
                    <div>
                    <menu id="mymenu">
                        <ul>
                            <li><a href="index.html">PRESENTATION</a></li>
                            <li><a href="#">FORMATIONS</a></li>
                            <li><a href="#">TrEMA LAB</a></li>
                            <li><a href="price.html">ACTUALITE</a></li>
                        </ul>
                    </div>
                    <div>
                        <h2>NOS<br>FORMATIONS</h2>
                        <p>Depuis 1989 LFI développe une activité exclusive de formation aux métiers des Musiques Actuelles et propose notamment des formations certifiantes
                            (chargé de production, régisseur de production),  </p>
                        <p>une formation de backliner et des formations professionnalisantes…<a href="">[Lire la suite]</a></p>
                    </div>
                    <div>
                        <img src="">
                    </div>
                    <div>
                        <p>PLUS DE DETAIL</p>
                    </div>
                </div>
            </section>
            <section id="trema">
                <div class="content">
                    <div>
                    <h2>LE<br>TREMA LAB</h2>
                        <h3>TRAVAIL ET MUSIQUES ACTUELLES</h3>
                        <img src="">
                    </div>
                    <div>
                        <p>Un projet pédagogique ambitieux</p>
                        <p>L’analyse du travail réel en vue de la formation nous impose de relier les moda-lités de formation aux usages professionnels qui en seront faits :
                            la digitalisation des ressources de formation se veut une réponse aux usages et besoins </p>
                        <p>du travail nomade, asynchrone et collaboratif devenu ordinaire dans le monde de travail, notamment dans le milieu des musiques actuelles marqué par la prédominance massive des TPE de moins de 5 salariés et du travail en mode projet.</p>
                    </div>
                    <div>
                        <p>PLUS DE DETAIL</p>
                    </div>
                </div>
            </section>
            <section id="actus">
                <div class="content">
                    <div>
                    <h2>ACTUALITES / AGENDA / EVENEMENT</h2>
                    </div>
                        @if(!empty($articles))
                            @foreach($articles as $article)
                        <div>
                            <p>@foreach($categories as $categorie)
                                @if($categorie->id == $article->article_categorie_id)
                                    <a href="{{url('categorie', $categorie->id)}}">{{$categorie->titre}}</a>
                                @endif
                            @endforeach
                            </p>
                        </div>
                        <div>
                            <p>{{$article->date_event}}</p>
                        </div>
                        <div>
                            <p>{{$article->titre}}</p>
                        </div>
                        <div>
                            <p>{{$article->description}}</p>
                        </div>
                        <img src="">
                        <img src="">
                        <div class="col-md-5">
                            @if(count($article->uri)>0)
                                <img class="featurette-image img-responsive" src="{{url('assets',['images', $article->uri])}}"/>
                            @endif
                        </div>
                            @endforeach
                        @endif
                        <div>
                            <p>EN VOIR PLUS</p>
                        </div>
                </div>
            </section>
            <section id="partners">
                <div class="content">
                    <div>
                        <ul id="logo_partners" >
                            <li>LES FORMATIONS D'ISSOUDUN AVEC LE SOUTIEN DE :</li>
                            <li>
                                <a href="#">
                                    <img src="">
                                </a>
                            </li>
                            <li><a href="#!"><img src=""></a></li>
                            <li><a href="#!"><img src=""></a></li>
                            <li><a href="#!"><img src=""></a></li>
                            <li><a href="#!"><img src=""></a></li>
                            <li><a href="#!"><img src=""></a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="contact">
                <div class="content">
                    <div>
                        <h5>ACCES</h5>
                        <p>Notre centre est situé à Issoudun au cœur de la France, à 250 km au sud de Paris, entre Bourges
                            et Châteauroux, sur l'axe SNCF Paris-Limoges-Toulouse,
                            à 10 minutes de l'A20 et à
                            proximité de l'A71 et de l'axe SNCF Lyon-Nantes.</p>
                        <button type="submit" class="">GOOGLE MAP</button>
                    </div>
                    <div>
                        <img src="">
                    </div>
                </div>
            </section>
            <section id="formulaire">
                <div class="content">
                    <div>
                        <h5>NOUS<br>CONTACTER</h5>
                        <p>Afin de mieux répondre à vos attentes, merci de remplir le formulaire ci-dessous.</p>

                    </div>
                    <div>
                        <form method="POST" enctype="multipart/form-data">
                            <div>
                                <div>
                                    <input type="text" id="name" name="name" required="required" placeholder="NAME" class="">
                                </div>
                                <div>
                                    <input type="text" id="prenom" name="prenom" required="required" placeholder="PRENOM" class="">
                                </div>
                                <div>
                                    <input type="email" id="email" name="email" required="required" placeholder="EMAIL" class="">
                                </div>
                                <div>
                                    <input type="text" id="vous" name="vous" required="required" placeholder="VOUS ÊTES" class="">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input type="text" id="sujet" name="sujet" required="required" placeholder="SUJET" class="">
                                </div>
                                <div>
                                    <textarea type="text" id="message" name="message" required="required" placeholder="MESSAGE" class=""></textarea>
                                </div>
                                <div>
                                    <button id="send" type="submit" class="">ENVOYER</button>
                                </div>
                                <div>
                                    <p>
                                        Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004, vous bénéficiez d'un droit d'accès et de rectification aux informations qui vous concernent
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                 </div>
            </section>
        </div>
    </section>







    <!-- /page content -->
@endsection

