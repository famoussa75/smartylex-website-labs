@extends('outils.layout')
@section('title','Accueil')
@section('content')
<style>
    .an{
  animation-name: flo;
  animation-duration: 3s;
  animation-iteration-count: infinite;


}
@keyframes flo{
  50%{
    transform: translateY(30px);
  }
}

</style>
<main class="nk-pages">
    <!-- Banner Section Start -->
    <section class="nk-banner nk-banner-green-tech " style="background-image:url('images/green-tech/smartylex-bg.jpg')">
        <div class="nk-banner-wrap pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-7">
                        <div class="nk-banner-content text-center">
                            <div>
                                <h1 class="text-capitalize text-white display-6 mb-2" data-aos="fade-up">SMARTYLEX</h1>
                                <p class="nk-section-text text-white" data-aos="fade-up" data-aos-delay="50">Optimisez la
                                    performance de votre cabinet d'avocats avec <span
                                        class="text-layout-primary">Smartylex</span>.</p>
                            </div>
                            <ul class="nk-btn-group justify-content-center pt-5">
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <a data-fslightbox="" href="https://www.youtube.com/watch?v=w7iWJbXsgkA" class="media media-lg media-middle media-circle text-bg-primary shadow-xl animate animate-infinite animate-pulse animate-duration-1">
                                        <em class="icon ni ni-play-fill"></em>
                                    </a>                                
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="nk-banner-img pt-7" data-aos="fade-up" data-aos-delay="200">
                <div class="nk-video-btn">         
                    </div>
                        <img src="images/business-saas/accueil-admin3.png" alt="thumbnail"
                            style="border-top:10px solid #64728f;border-right:10px solid #64728f;border-left:10px solid #64728f; border-radius:8px">
                    </div>
                </div>
        </div>
    </section>
   
   
    <!-- Feature Section Start  -->
    <section class="nk-section bg-primary-100 overflow-hidden py-7 py-lg-120" id="debut">
        <div class="container shape-11">
            <div class="nk-section-head pb-7">
                <div class="row align-items-end">
                    <div class="col-xl-6">
                        <div>
                            <h2 class="nk-section-title mb-xl-0">Simple, Flexible, Interactif</h2>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row gy-5 gy-lg-0">
                <div class="col-md-6 col-lg-3 col-sm-12" data-aos="fade-up" data-aos-delay="0">
                    <div class="row col-md-12">
                        <div class="col-md-12 col-sm-6">
                            <a href="#">
                                <img src="images/business-tracker/section-cover-1.png" alt="cover"
                                    class="image-fluid position-relative overflow-hidden rounded-3 border border-ligh">
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-6 pt-1">
                            <h4>Analyse & Securité des données</h4>
                            <p style="text-align:justify">Nous assurons la sécurité de vos données et grâce au tableau
                                de bord vous pouvez voir les analyses de façon dynamique.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-12" data-aos="fade-up" data-aos-delay="50">
                    <div class="position-relative text-center">
                        <a href="#">
                            <img src="images/business-tracker/section-cover-1-b2.png" alt="cover"
                                class="image-fluid position-relative overflow-hidden rounded-3 border border-ligh ">
                        </a>
                        <div class="pt-4">
                            <h4>Accès facile aux dossiers</h4>
                            <p style="text-align:justify">Smartylex vous offre un accès très facile à vos dossiers
                                partout et à tout moment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="position-relative ">
                        <a href="#" style="background-color:white">
                            <img src="images/business-tracker/section-cover-1-a.png" alt="cover"
                                class="image-fluid position-relative overflow-hidden rounded-3 border border-ligh">
                        </a>
                        <div class="pt-4">
                            <h4>Multi-utilisateurs</h4>
                            <p style="text-align:justify">Vous avez la possibilité de créer plusieurs comptes
                                utilisateurs qui peuvent interagir ensemble dans le système.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="position-relative text-center">

                        <a href="#">
                            <img src="images/vector/l2.png" alt="card-cover"
                                class="image-fluid position-relative overflow-hidden rounded-3 border border-ligh"
                                style="background-color:white">
                        </a>
                        <div class="pt-3">
                            <h4>Portail client</h4>
                            <p style="text-align:justify">Vos clients peuvent suivre en temps réel leurs dossiers à
                                travers un portail client.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End  -->
    <section class="nk-section py-7 py-lg-120" id="modules">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="nk-section-head pb-7 text-center">
                        <h2 class="nk-section-title">Principales fonctionnalités</h2>
                        <p class="nk-section-text">Pour mieux profiter du système nous vous proposons plusieurs gammes
                            de fonctionnalités. <a href="#"><i class="fa fa-arrow-right"></i> Lire la
                                documentation</a>
                        </p>

                    </div>
                </div>

            </div>


            <div class="row justify-content-center">
                <div class="col-9 col-lg-10 col-xxl-9 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="pt-6 mt-md-2 pb-7 pb-md-0">
                        <div class="nk-banner-img nk-banner-img-s1">
                            <img class="thumb-base " src="images/thumb/lg.png" alt="thumb-content"
                                style="border:2px solid #64728f; border-radius:5px">
                            <img class="thumb thumb-1 animate animate-shakeY animate-duration-12"
                                src="images/thumb/pp.png" alt="thumb-content"
                                style="border:2px solid #64728f; border-radius:5px">
                            <img class="thumb thumb-2 animate animate-shakeY animate-duration-12 animate-delay-1"
                                src="images/thumb/hf.png" alt="thumb-content"
                                style="border:2px solid #64728f; border-radius:5px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" style="margin-top:120px">
                <div class="col-md-6 col-xl-4 aos-init aos-animate mt-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card border-0 bg-primary-100">
                        <div class="card-body">
                            <div class="media media-lg media-middle media-circle text-bg-blue text-white mb-3 mb-lg-5">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            <h4 class="mb-2">Tâches</h4>
                            <p class="fs-16 text-gray-800 line-clamp-3">Organisez votre travail et optimisez la
                                collaboration
                                en étant plus productif en équipe. &nbsp;&nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 aos-init aos-animate mt-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card border-0 bg-primary-100">
                        <div class="card-body">
                            <div
                                class="media media-lg media-middle media-circle text-bg-success text-white mb-3 mb-lg-5">
                                <em class="icon ni ni-users"></em>
                            </div>
                            <h4 class="mb-2">Clients</h4>
                            <p class="fs-16 text-gray-800 line-clamp-3">Gérez les informations et les besoins de vos
                                clients de
                                manière centralisée et optimisée pour un suivi personnalisé et efficace.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 aos-init aos-animate mt-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card border-0 bg-primary-100">
                        <div class="card-body">
                            <div
                                class="media media-lg media-middle media-circle text-bg-danger text-white mb-3 mb-lg-5">
                                <em class="icon ni ni-folder-fill"></em>
                            </div>
                            <h4 class="mb-2">Affaires</h4>
                            <p class="fs-16 text-gray-800 line-clamp-3">Centralisez et organisez toutes les données
                                essentielles
                                de vos affaires pour une vue d'ensemble complète et structurée</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 aos-init aos-animate mt-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card border-0 bg-primary-100">
                        <div class="card-body">
                            <div
                                class="media media-lg media-middle media-circle text-bg-blue-1300 text-white mb-3 mb-lg-5">
                                <i class="fa fa-balance-scale"></i>
                            </div>
                            <h4 class="mb-2">Audiences</h4>
                            <p class="fs-16 text-gray-800 line-clamp-3">Planifiez, suivez et gérez toutes vos audiences
                                et
                                procédures judiciaires pour une gestion précise de votre calendrier</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 aos-init aos-animate mt-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card border-0 bg-primary-100">
                        <div class="card-body">
                            <div
                                class="media media-lg media-middle media-circle text-bg-cyan-200 text-white mb-3 mb-lg-5">
                                <em class="icon ni ni-emails"></em>
                            </div>
                            <h4 class="mb-2">Courriers</h4>
                            <p class="fs-16 text-gray-800 line-clamp-3">Automatisez la création, l'envoi et le suivi de
                                vos
                                communications écrites pour une gestion rapide et efficace de votre correspondance.</p>
                               
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 aos-init aos-animate mt-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card border-0 bg-primary-100">
                        <div class="card-body">
                            <div
                                class="media media-lg media-middle media-circle text-bg-warning text-white mb-3 mb-lg-5">
                                <em class="icon ni ni-file-text"></em>
                            </div>
                            <h4 class="mb-2">Factures</h4>
                            <p class="fs-16 text-gray-800 line-clamp-3">Générez automatiquement des factures détaillées
                                et
                                précises pour un suivi financier transparent et organisé.</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- Banner Section End  -->

    <!-- Works Section End  -->
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xxl-6">
            <div class="nk-section-head text-center">
                <h2 class="">À propos</h2>
            </div>
        </div>
    </div>
    <section class="nk-section bg-primary-100 overflow-hidden" id="about" style="padding:0px">
        <div class="nk-mask shape-11" data-aos="fade-in" data-aos-delay="0"></div>
        <div class="container">

            <div class="nk-cta-wrap">
                <div class="row align-items-center justify-content-between">

                    <div class="col-lg-6 col-xxl-5">

                        <div class="nk-section-head">
                            <h3 class="nk-section-title">Qui sommes nous ?</h3>
                            <p class="nk-section-text fs-20" style="text-align:justify"> Smartylex est la solution de
                                pointe conçue pour
                                simplifier
                                la gestion de votre cabinet d'avocats. Notre plateforme innovante, combinée à une
                                équipe dynamique, vous propose les outils essentiels pour rationaliser vos
                                opérations, optimiser vos flux de travail et offrir une expérience exceptionnelle à
                                vos clients. </p><br>
                            <p class="nk-section-text fs-20" style="text-align:justify"> Smartylex vous offre la
                                possibilité de gérer votre
                                cabinet de manière optimisée, tout en favorisant un contact interactif avec vos
                                collaborateurs et votre personnel. Vous pourrez accéder à vos documents en un seul
                                clic, de n'importe où dans le monde, via votre téléphone, votre ordinateur ou votre
                                tablette. De plus, vous pourrez offrir à vos clients une prise en charge
                                transparente et efficace, leur permettant de se sentir pleinement accompagnés.</p>

                        </div>

                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                        <img src="images/business-tracker/section-cover-5.png" alt="cover">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Works Section End  -->


    <!-- Pricing Section Start  -->
    <section class="nk-section" id="prix">
        <div class="nk-mask shape-12"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="nk-section-head text-center">
                        <span class="nk-section-subtitle">Plan tarifaire</span>
                        <h2 class="nk-section-title">Lancez - vous</h2>
                        <p class="nk-section-text">Des prix abordables pour un resultat plus grand</p>
                    </div>
                </div>
            </div>
            <div class="nk-pricing-wrap">

                <div class="row gy-5 gy-xl-0">
                    <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="0">
                        <div class="nk-pricing h-100 p-4 p-md-5">
                            <div class="nk-pricing-head mb-4">
                                <div class="nk-pricing-title-group mb-2">
                                    <div class="d-flex align-items-center">
                                        <em class="icon ni ni-heart-fill"></em>
                                        <h3 class="title mb-0">Essaie gratuit</h3>
                                    </div>
                                </div>
                                <p class="text">Modules gratuits pendant 1 mois !</p>
                            </div>
                            <div class="nk-pricing-body">
                                <!-- <div class="nk-month-amount amount-wrap mb-2">
                                    <span class="amount h2 mb-0">€0</span>
                                    <span class="amount-text">/ 1 mois</span>
                                </div> -->

                                <ul class="nk-list-link">
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Création et suivi des tâches</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Gestion des clients et affaires</span>
                                    </li>
                                    <li class="active">
                                        <!-- <em class="icon ni ni-cross-circle-fill me-1"></em> -->
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Gestion des courriers</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Création et suivi d'audiences</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Facturation</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>système d'alerte et de rappel</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Mailing</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Portail client</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Ressources humaines </span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Comptes utilisateurs illimités </span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Accès aux bases de données avocats, huissiers, notaires </span>
                                    </li>
                                </ul>
                                <div class="pt-4">
                                    <a href="{{route('contact')}}"
                                        class="btn btn-block btn-outline-primary rounded-pill">Souscrire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="50">
                        <div class="nk-pricing h-100 p-4 p-md-5">
                            <div class="nk-pricing-head mb-4">
                                <div class="nk-pricing-title-group mb-2">
                                    <div class="d-flex align-items-center">
                                        <em class="icon ni ni-offer-fill"></em>
                                        <h3 class="title mb-0">Standard</h3>
                                    </div>
                                </div>
                                <p class="text">Plan parfait pour les professionnels !</p>
                            </div>
                            <div class="nk-pricing-body">
                                <!-- <div class="nk-month-amount amount-wrap mb-2">
                                    <span class="amount h2 mb-0">€600</span>
                                    <span class="amount-text">/ 1 an</span>
                                </div> -->

                                <ul class="nk-list-link">
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Création et suivi des tâches</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Gestion des clients et affaires</span>
                                    </li>
                                    <li class="active">
                                        <!-- <em class="icon ni ni-cross-circle-fill me-1"></em> -->
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Gestion des courriers</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Création et suivi d'audiences</span>
                                    </li>
                                    <li>
                                        <em class="icon ni ni-cross-circle-fill me-1"></em>
                                        <span>Facturation</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>système d'alerte et de rappel</span>
                                    </li>
                                    <li>
                                        <em class="icon ni ni-cross-circle-fill me-1"></em>
                                        <span>Mailing</span>
                                    </li>
                                    <li>
                                        <em class="icon ni ni-cross-circle-fill me-1"></em>
                                        <span>Portail client</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Ressources humaines </span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Comptes utilisateurs illimités </span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Accès aux bases de données avocats, huissiers, notaires </span>
                                    </li>
                                </ul>
                                <div class="pt-4">
                                    <a href="{{route('contact')}}"
                                        class="btn btn-block btn-primary rounded-pill">Souscrire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="nk-pricing h-100 p-4 p-md-5">
                            <div class="nk-pricing-head mb-4">
                                <div class="nk-pricing-title-group mb-2">
                                    <div class="d-flex align-items-center">
                                        <em class="icon ni ni-spark-fill"></em>
                                        <h3 class="title mb-0">Premium</h3>
                                    </div>
                                    <span class="badge rounded-pill text-bg-dark">Populaire</span>
                                </div>

                                <p class="text">Economisez en achetant 2 ans à la fois !</p>
                            </div>
                            <div class="nk-pricing-body">
                                <!-- <div class="nk-month-amount amount-wrap mb-2">
                                    <span class="amount h2 mb-0">€1200</span>
                                    <span class="amount-text">/ 2 ans</span>
                                </div> -->
                                <ul class="nk-list-link">
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Création et suivi des tâches</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Gestion des clients et affaires</span>
                                    </li>
                                    <li class="active">
                                        <!-- <em class="icon ni ni-cross-circle-fill me-1"></em> -->
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Gestion des courriers</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Création et suivi d'audiences</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Facturation</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>système d'alerte et de rappel</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Mailing</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Portail client</span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Ressources humaines </span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Comptes utilisateurs illimités </span>
                                    </li>
                                    <li class="active">
                                        <em class="icon ni ni-check-circle-fill me-1"></em>
                                        <span>Accès aux bases de données avocats, huissiers, notaires </span>
                                    </li>
                                </ul>
                                <div class="pt-4">
                                    <a href="{{route('contact')}}"
                                        class="btn btn-block btn-outline-primary rounded-pill">Souscrire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End  -->
    <!-- CTA Section Start  -->
    <section class="nk-section ">
        <div class="container">
            <div class="nk-section-content overflow-hidden bg-dark rounded-4 is-theme" data-aos="fade-up">
                <div class="row align-items-end justify-content-xl-between">
                    <div class="col-xl-6 col-xxl-6">
                        <div class="nk-section-head text-center text-xl-start p-5 p-md-7 pt-7">
                            <h2 class="nk-section-title" data-aos="fade-up" data-aos-delay="50"><em
                                    class="icon ni ni-call-alt-fill"></em> Assistance technique</h2>
                            <p>Notre équipe technique est là pour vous aider dans la manipulation et la comprehension du
                                fonctionnement du système à travers notre numero d'assistance.</p>

                            <div class="pt-5 pt-lg-7" data-aos="fade-up" data-aos-delay="150">
                                <a href="{{route('contact')}}" class="btn btn-primary rounded-pill">Appelez - nous</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6" data-aos="fade-left" data-aos-delay="50">
                        <div class="nk-frame text-end">
                            <img src="images/peoples/blamer-conseiller.jpg" alt="thumb" class="mb-n2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section End  -->
    <!-- NewsLetter Section Start  -->
    <section class="nk-section  pb-0">
        <div class="container">
            <div
                class="row justify-content-center justify-content-lg-between align-items-center pb-5 border-bottom border-gray-50">
                <div class="col-lg-6 col-xl-4">
                    <div class="nk-newsletter-content text-center text-lg-start pb-5 pb-lg-0">
                        <h4 class="">Abonnez-vous à notre newsletter</h4>
                        <p class="fs-16">Soyez au courant de nos nouvelles mise à jour.</p>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-4">
                    <form data-action="form/subscribe.php" class="form-submit-init" method="post">
                        <div class="form-group nk-newsletter-three">
                            <div class="form-control-wrap">
                                <input type="email" name="email" class="form-control" placeholder="Entrer votre email"
                                    required>
                                <button type="submit" class="btn btn-primary">S'inscrire</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- NewsLetter Section End  -->
</main>
@endsection