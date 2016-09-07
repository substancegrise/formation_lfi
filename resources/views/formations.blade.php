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
    <!-- /page content -->
    <!-- MASTER FORMATION -->
    <section id="masterform">
        <div class="content">
            <!-- FILTRES -->
            <section id="filtre">
                <div class="col-md-4">
                    <p class="titre">LES<br>FORMATIONS</p>
                </div>
                <div class="col-md-2">
                    <p>CERTIFIANTE</p>
                </div>
                <div class="col-md-2">
                    <p>EN CONTINUE</p>
                </div>
                <div class="col-md-2">
                    <p>COURTES</p>
                </div>
                <div class="col-md-2">
                    <p>TOUTES</p>
                </div>

                <span class="clearfix"></span>
            </section>
            <!--CHARGE DE PRODUCTION -->
            <section class="col-md-12 espaceformcadre">
                <div id="prod" class="col-md-4">
                    <div class="txtcentrered">
                    <p>charge de production</p>
                    </div>
                    <div class="txtcentrered2">
                    <p>de musiques actuelles</p>
                    </div>
                    <!--<img src="assets/images/photos/charge_prod.jpg">-->
                </div>
                <div class="col-md-8 fondblanc">
                    <div class="col-md-5">
                        <h2 class="txtmiddlered">FORMATION CERTIFIANTE</h2>
                        <p class="txtmiddlered3">Acquérir un titre professionnel</p>
                        <p class="txtmiddlered3">Titre certifié Niveau III RNCP</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/date.png">
                        <p>07NOV</p>
                        <p>[8 MOIS]</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/time.png">
                        <p>1127</p>
                        <p>HEURES</p>
                    </div>
                    <div class="col-md-2 buttttt3">
                        <img src="assets/images/formations/icon/eyes.png">
                    </div>
                    <span class="col-md-1"></span>

                    <div class="col-md-12">
                        <div class="col-md-11 letexte">
                            <p>
                                L’action de formation vise à former des chargés de production de niveau III capables
                                d’exécuter
                                des tâches avec une large autonomie au sein d’un cadre défini par l’employeur. Le chargé
                                de
                                production coordonne ses activités avec les autres partenaires de l’artiste et contribue
                                à une
                                stratégie globale fondée sur l’articulation des modes de production, de
                                commercialisation et de
                                communication des œuvres. Il peut assumer des tâches relevant de la production, de la
                                diffusion,
                                de l’administration, de la promotion, de la technique, etc. [Voir la fiche complète]
                            </p>
                        </div>
                        <div class="col-md-1 buttttt4">
                            <img src="assets/images/formations/icon/document.png">
                            <img src="assets/images/formations/icon/money_form.png">
                            <img src="assets/images/formations/icon/share.png">
                        </div>
                    </div>

                </div>

            </section>
            <!--CHARGE DE PRODUCTION -->
            <section class="col-md-12 espaceformcadre">
                <div id="regis" class="col-md-4">
                    <div class="txtcentrered">
                        <p>REGISSEUR DE PRODUCTION</p>
                    </div>
                    <div class="txtcentrered2">
                        <p>de musiques actuelles</p>
                    </div>
                    <!--<img src="assets/images/photos/charge_prod.jpg">-->
                </div>
                <div class="col-md-8 fondblanc">
                    <div class="col-md-5">
                        <h2 class="txtmiddlered">FORMATION CERTIFIANTE</h2>
                        <p class="txtmiddlered3">Acquérir un titre professionnel</p>
                        <p class="txtmiddlered3">Titre certifié Niveau III RNCP</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/date.png">
                        <p>07NOV</p>
                        <p>[8 MOIS]</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/time.png">
                        <p>1127</p>
                        <p>HEURES</p>
                    </div>
                    <div class="col-md-2 buttttt3">
                        <img src="assets/images/formations/icon/eyes.png">
                    </div>
                    <span class="col-md-1"></span>

                    <div class="col-md-12">
                        <div class="col-md-11 letexte">
                            <p>
                                L’action de formation vise à former des chargés de production de niveau III capables
                                d’exécuter
                                des tâches avec une large autonomie au sein d’un cadre défini par l’employeur. Le chargé
                                de
                                production coordonne ses activités avec les autres partenaires de l’artiste et contribue
                                à une
                                stratégie globale fondée sur l’articulation des modes de production, de
                                commercialisation et de
                                communication des œuvres. Il peut assumer des tâches relevant de la production, de la
                                diffusion,
                                de l’administration, de la promotion, de la technique, etc. [Voir la fiche complète]
                            </p>
                        </div>
                        <div class="col-md-1 buttttt4">
                            <img src="assets/images/formations/icon/document.png">
                            <img src="assets/images/formations/icon/money_form.png">
                            <img src="assets/images/formations/icon/share.png">
                        </div>
                    </div>

                </div>

            </section>
            <!--CHARGE DE PRODUCTION -->
            <section class="col-md-12 espaceformcadre">
                <div id="prod" class="col-md-4">
                    <div class="txtcentrered">
                        <p>charge de production</p>
                    </div>
                    <div class="txtcentrered2">
                        <p>de musiques actuelles</p>
                    </div>
                    <!--<img src="assets/images/photos/charge_prod.jpg">-->
                </div>
                <div class="col-md-8 fondblanc">
                    <div class="col-md-5">
                        <h2 class="txtmiddlered">FORMATION CERTIFIANTE</h2>
                        <p class="txtmiddlered3">Acquérir un titre professionnel</p>
                        <p class="txtmiddlered3">Titre certifié Niveau III RNCP</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/date.png">
                        <p>07NOV</p>
                        <p>[8 MOIS]</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/time.png">
                        <p>1127</p>
                        <p>HEURES</p>
                    </div>
                    <div class="col-md-2 buttttt3">
                        <img src="assets/images/formations/icon/eyes.png">
                    </div>
                    <span class="col-md-1"></span>

                    <div class="col-md-12">
                        <div class="col-md-11 letexte">
                            <p>
                                L’action de formation vise à former des chargés de production de niveau III capables
                                d’exécuter
                                des tâches avec une large autonomie au sein d’un cadre défini par l’employeur. Le chargé
                                de
                                production coordonne ses activités avec les autres partenaires de l’artiste et contribue
                                à une
                                stratégie globale fondée sur l’articulation des modes de production, de
                                commercialisation et de
                                communication des œuvres. Il peut assumer des tâches relevant de la production, de la
                                diffusion,
                                de l’administration, de la promotion, de la technique, etc. [Voir la fiche complète]
                            </p>
                        </div>
                        <div class="col-md-1 buttttt4">
                            <img src="assets/images/formations/icon/document.png">
                            <img src="assets/images/formations/icon/money_form.png">
                            <img src="assets/images/formations/icon/share.png">
                        </div>
                    </div>

                </div>

            </section>
            <!--CHARGE DE PRODUCTION -->
            <section class="col-md-12 espaceformcadre">
                <div id="prod" class="col-md-4">
                    <div class="txtcentrered">
                        <p>charge de production</p>
                    </div>
                    <div class="txtcentrered2">
                        <p>de musiques actuelles</p>
                    </div>
                    <!--<img src="assets/images/photos/charge_prod.jpg">-->
                </div>
                <div class="col-md-8 fondblanc">
                    <div class="col-md-5">
                        <h2 class="txtmiddlered">FORMATION CERTIFIANTE</h2>
                        <p class="txtmiddlered3">Acquérir un titre professionnel</p>
                        <p class="txtmiddlered3">Titre certifié Niveau III RNCP</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/date.png">
                        <p>07NOV</p>
                        <p>[8 MOIS]</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/time.png">
                        <p>1127</p>
                        <p>HEURES</p>
                    </div>
                    <div class="col-md-2 buttttt3">
                        <img src="assets/images/formations/icon/eyes.png">
                    </div>
                    <span class="col-md-1"></span>

                    <div class="col-md-12">
                        <div class="col-md-11 letexte">
                            <p>
                                L’action de formation vise à former des chargés de production de niveau III capables
                                d’exécuter
                                des tâches avec une large autonomie au sein d’un cadre défini par l’employeur. Le chargé
                                de
                                production coordonne ses activités avec les autres partenaires de l’artiste et contribue
                                à une
                                stratégie globale fondée sur l’articulation des modes de production, de
                                commercialisation et de
                                communication des œuvres. Il peut assumer des tâches relevant de la production, de la
                                diffusion,
                                de l’administration, de la promotion, de la technique, etc. [Voir la fiche complète]
                            </p>
                        </div>
                        <div class="col-md-1 buttttt4">
                            <img src="assets/images/formations/icon/document.png">
                            <img src="assets/images/formations/icon/money_form.png">
                            <img src="assets/images/formations/icon/share.png">
                        </div>
                    </div>

                </div>

            </section>
            <!--CHARGE DE PRODUCTION -->
            <section class="col-md-12 espaceformcadre">
                <div id="prod" class="col-md-4">
                    <div class="txtcentrered">
                        <p>charge de production</p>
                    </div>
                    <div class="txtcentrered2">
                        <p>de musiques actuelles</p>
                    </div>
                    <!--<img src="assets/images/photos/charge_prod.jpg">-->
                </div>
                <div class="col-md-8 fondblanc">
                    <div class="col-md-5">
                        <h2 class="txtmiddlered">FORMATION CERTIFIANTE</h2>
                        <p class="txtmiddlered3">Acquérir un titre professionnel</p>
                        <p class="txtmiddlered3">Titre certifié Niveau III RNCP</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/date.png">
                        <p>07NOV</p>
                        <p>[8 MOIS]</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/time.png">
                        <p>1127</p>
                        <p>HEURES</p>
                    </div>
                    <div class="col-md-2 buttttt3">
                        <img src="assets/images/formations/icon/eyes.png">
                    </div>
                    <span class="col-md-1"></span>

                    <div class="col-md-12">
                        <div class="col-md-11 letexte">
                            <p>
                                L’action de formation vise à former des chargés de production de niveau III capables
                                d’exécuter
                                des tâches avec une large autonomie au sein d’un cadre défini par l’employeur. Le chargé
                                de
                                production coordonne ses activités avec les autres partenaires de l’artiste et contribue
                                à une
                                stratégie globale fondée sur l’articulation des modes de production, de
                                commercialisation et de
                                communication des œuvres. Il peut assumer des tâches relevant de la production, de la
                                diffusion,
                                de l’administration, de la promotion, de la technique, etc. [Voir la fiche complète]
                            </p>
                        </div>
                        <div class="col-md-1 buttttt4">
                            <img src="assets/images/formations/icon/document.png">
                            <img src="assets/images/formations/icon/money_form.png">
                            <img src="assets/images/formations/icon/share.png">
                        </div>
                    </div>

                </div>

            </section>
            <!--CHARGE DE PRODUCTION -->
            <section class="col-md-12 espaceformcadre">
                <div id="prod" class="col-md-4">
                    <div class="txtcentrered">
                        <p>charge de production</p>
                    </div>
                    <div class="txtcentrered2">
                        <p>de musiques actuelles</p>
                    </div>
                    <!--<img src="assets/images/photos/charge_prod.jpg">-->
                </div>
                <div class="col-md-8 fondblanc">
                    <div class="col-md-5">
                        <h2 class="txtmiddlered">FORMATION CERTIFIANTE</h2>
                        <p class="txtmiddlered3">Acquérir un titre professionnel</p>
                        <p class="txtmiddlered3">Titre certifié Niveau III RNCP</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/date.png">
                        <p>07NOV</p>
                        <p>[8 MOIS]</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/time.png">
                        <p>1127</p>
                        <p>HEURES</p>
                    </div>
                    <div class="col-md-2 buttttt3">
                        <img src="assets/images/formations/icon/eyes.png">
                    </div>
                    <span class="col-md-1"></span>

                    <div class="col-md-12">
                        <div class="col-md-11 letexte">
                            <p>
                                L’action de formation vise à former des chargés de production de niveau III capables
                                d’exécuter
                                des tâches avec une large autonomie au sein d’un cadre défini par l’employeur. Le chargé
                                de
                                production coordonne ses activités avec les autres partenaires de l’artiste et contribue
                                à une
                                stratégie globale fondée sur l’articulation des modes de production, de
                                commercialisation et de
                                communication des œuvres. Il peut assumer des tâches relevant de la production, de la
                                diffusion,
                                de l’administration, de la promotion, de la technique, etc. [Voir la fiche complète]
                            </p>
                        </div>
                        <div class="col-md-1 buttttt4">
                            <img src="assets/images/formations/icon/document.png">
                            <img src="assets/images/formations/icon/money_form.png">
                            <img src="assets/images/formations/icon/share.png">
                        </div>
                    </div>

                </div>

            </section>
            <!--CHARGE DE PRODUCTION -->
            <section class="col-md-12 espaceformcadre">
                <div id="prod" class="col-md-4">
                    <div class="txtcentrered">
                        <p>charge de production</p>
                    </div>
                    <div class="txtcentrered2">
                        <p>de musiques actuelles</p>
                    </div>
                    <!--<img src="assets/images/photos/charge_prod.jpg">-->
                </div>
                <div class="col-md-8 fondblanc">
                    <div class="col-md-5">
                        <h2 class="txtmiddlered">FORMATION CERTIFIANTE</h2>
                        <p class="txtmiddlered3">Acquérir un titre professionnel</p>
                        <p class="txtmiddlered3">Titre certifié Niveau III RNCP</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/date.png">
                        <p>07NOV</p>
                        <p>[8 MOIS]</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/time.png">
                        <p>1127</p>
                        <p>HEURES</p>
                    </div>
                    <div class="col-md-2 buttttt3">
                        <img src="assets/images/formations/icon/eyes.png">
                    </div>
                    <span class="col-md-1"></span>

                    <div class="col-md-12">
                        <div class="col-md-11 letexte">
                            <p>
                                L’action de formation vise à former des chargés de production de niveau III capables
                                d’exécuter
                                des tâches avec une large autonomie au sein d’un cadre défini par l’employeur. Le chargé
                                de
                                production coordonne ses activités avec les autres partenaires de l’artiste et contribue
                                à une
                                stratégie globale fondée sur l’articulation des modes de production, de
                                commercialisation et de
                                communication des œuvres. Il peut assumer des tâches relevant de la production, de la
                                diffusion,
                                de l’administration, de la promotion, de la technique, etc. [Voir la fiche complète]
                            </p>
                        </div>
                        <div class="col-md-1 buttttt4">
                            <img src="assets/images/formations/icon/document.png">
                            <img src="assets/images/formations/icon/money_form.png">
                            <img src="assets/images/formations/icon/share.png">
                        </div>
                    </div>

                </div>

            </section>
            <!--CHARGE DE PRODUCTION -->
            <section class="col-md-12 espaceformcadre">
                <div id="prod" class="col-md-4">
                    <div class="txtcentrered">
                        <p>charge de production</p>
                    </div>
                    <div class="txtcentrered2">
                        <p>de musiques actuelles</p>
                    </div>
                    <!--<img src="assets/images/photos/charge_prod.jpg">-->
                </div>
                <div class="col-md-8 fondblanc">
                    <div class="col-md-5">
                        <h2 class="txtmiddlered">FORMATION CERTIFIANTE</h2>
                        <p class="txtmiddlered3">Acquérir un titre professionnel</p>
                        <p class="txtmiddlered3">Titre certifié Niveau III RNCP</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/date.png">
                        <p>07NOV</p>
                        <p>[8 MOIS]</p>
                    </div>
                    <div class="col-md-2 buttttt">
                        <img src="assets/images/formations/icon/time.png">
                        <p>1127</p>
                        <p>HEURES</p>
                    </div>
                    <div class="col-md-2 buttttt3">
                        <img src="assets/images/formations/icon/eyes.png">
                    </div>
                    <span class="col-md-1"></span>

                    <div class="col-md-12">
                        <div class="col-md-11 letexte">
                            <p>
                                L’action de formation vise à former des chargés de production de niveau III capables
                                d’exécuter
                                des tâches avec une large autonomie au sein d’un cadre défini par l’employeur. Le chargé
                                de
                                production coordonne ses activités avec les autres partenaires de l’artiste et contribue
                                à une
                                stratégie globale fondée sur l’articulation des modes de production, de
                                commercialisation et de
                                communication des œuvres. Il peut assumer des tâches relevant de la production, de la
                                diffusion,
                                de l’administration, de la promotion, de la technique, etc. [Voir la fiche complète]
                            </p>
                        </div>
                        <div class="col-md-1 buttttt4">
                            <img src="assets/images/formations/icon/document.png">
                            <img src="assets/images/formations/icon/money_form.png">
                            <img src="assets/images/formations/icon/share.png">
                        </div>
                    </div>

                </div>

            </section>

            <span class="clearfix"></span>

        </div>
    </section>

    <span class="clearfix"></span>



    <!-- PARTENAIRES -->
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
    <!-- FORMULAIRE -->
    <section id="">
        <div class="content">
            <div class="middle">
                <form method="POST" enctype="multipart/form-data" class="form-group">
                    <section id="formleft" class="">
                        <div>
                            <h5>NOUS<br>CONTACTER</h5>
                        </div>
                        <div>
                            <p>Afin de mieux répondre à vos attentes, merci de remplir le formulaire ci-contre.</p>
                        </div>
                    </section>
                    <section id="formcenter" class="">
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
                    <section id="formright" class="">
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
                                <textarea class="date-picker form-control" type="text" id="message" name="message"
                                          required="required" placeholder="MESSAGE" rows="6"></textarea>
                            </div>
                            <div>
                                <button id="send" type="submit" class="">ENVOYER</button>
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
    <!-- /page content -->
@endsection