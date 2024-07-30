@extends('outils.layout')
@section('title','Docs')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style-business-solution.css') }}">

<main class="nk-pages">
<section class="nk-banner-wrap nk-banner-business-feature ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="nk-section-head text-center">
                        <h1 class=" text-white aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="50"><span class="text-layout-secondary"><i class="fa fa-book"></i>&nbsp;Documentation</span></h1>
                        <p class="nk-section-text aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">La documentation vous aide lorsque vous avez des difficultés dans le système </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="nk-mask shape-36 aos-init aos-animate" data-aos="fade-in" data-aos-delay="0"></div>
    </section>
    <!-- Header Section End -->
    <section class="nk-section pt-80 pt-lg-100">
        <div class="nk-mask blur-1 left top"></div>
        <div class="nk-mask blur-1 right bottom"></div>
        <div class="container">
            <div class="nk-section-head">
               
                <h2 class="nk-section-title">À lire</h2>
                <p>Parcourez les rubiques à gauche pour trouver la solution à vos problèmes.</p>
                <hr class="mt-5 mb-0">
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="nk-entry-sidebar">
                        <ul class="nk-list-link nk-list-link-collapse flush">
                            <li class="align-items-start">
                                <a href="#priseEnMain" class="nk-list-link-collapse-link fs-16 gap-2"
                                    data-bs-toggle="collapse" aria-expanded="true">
                                    <span>Prise en main</span>
                                    <em class="on icon ni ni-plus"></em>
                                    <em class="off icon ni ni-minus"></em>
                                </a>
                                <div class="collapse show" id="priseEnMain">
                                    <ul class="nk-list-dot nk-list-dot-sm pt-2">
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Introduction</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Connexion & Deconnexion</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Paramètre avancé</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Thèmes & Confidentialité</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Données publiques</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="align-items-start">
                                <a href="#taches" class="nk-list-link-collapse-link fs-16 gap-2"
                                    data-bs-toggle="collapse" aria-expanded="false">
                                    <span>Tâches</span>
                                    <em class="on icon ni ni-plus"></em>
                                    <em class="off icon ni ni-minus"></em>
                                </a>
                                <div class="collapse" id="taches">
                                    <ul class="nk-list-dot nk-list-dot-sm pt-2">
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment créer, editer ou supprimer une tâche?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment afficher le contenu d'une tâche?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment ajouter un traitement ou une suggestion à la tâche?</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="align-items-start">
                                <a href="#clients" class="nk-list-link-collapse-link fs-16 gap-2"
                                    data-bs-toggle="collapse" aria-expanded="false">
                                    <span>Clients</span>
                                    <em class="on icon ni ni-plus"></em>
                                    <em class="off icon ni ni-minus"></em>
                                </a>
                                <div class="collapse" id="clients">
                                    <ul class="nk-list-dot nk-list-dot-sm pt-2">
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment créer un client?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment afficher, edit, supprimer les informations du client?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment importer les personnels d'un client dans le système?</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="align-items-start">
                                <a href="#affaires" class="nk-list-link-collapse-link fs-16 gap-2"
                                    data-bs-toggle="collapse" aria-expanded="false">
                                    <span>Affaires</span>
                                    <em class="on icon ni ni-plus"></em>
                                    <em class="off icon ni ni-minus"></em>
                                </a>
                                <div class="collapse" id="affaires">
                                    <ul class="nk-list-dot nk-list-dot-sm pt-2">
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment créer une affaire liée au client?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment afficher, supprimer une affaire?</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="align-items-start">
                                <a href="#audiences" class="nk-list-link-collapse-link fs-16 gap-2"
                                    data-bs-toggle="collapse" aria-expanded="false">
                                    <span>Audiences</span>
                                    <em class="on icon ni ni-plus"></em>
                                    <em class="off icon ni ni-minus"></em>
                                </a>
                                <div class="collapse" id="audiences">
                                    <ul class="nk-list-dot nk-list-dot-sm pt-2">
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment créer une audience?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment reprendre la création en cas d'erreur?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment afficher le contenu d'une audience?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment passer d'un niveau procedural à l'autre?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment faire le suivit d'une audience?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment retirer un suivit créer par erreur?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment envoyer chaque rapport d'audience au client par email?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment ajouter des pièces supplémentaires?</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="align-items-start">
                                <a href="#courriers" class="nk-list-link-collapse-link fs-16 gap-2"
                                    data-bs-toggle="collapse" aria-expanded="false">
                                    <span>Courriers</span>
                                    <em class="on icon ni ni-plus"></em>
                                    <em class="off icon ni ni-minus"></em>
                                </a>
                                <div class="collapse" id="courriers">
                                    <ul class="nk-list-dot nk-list-dot-sm pt-2">
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment créer courrier départ ou arrivée affaire?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment afficher le contenu d'un courrier?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comprendre le processus d'un courrier-départ</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment créer une tâche à partir d'un courrier-arrivée?</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="align-items-start">
                                <a href="#factures" class="nk-list-link-collapse-link fs-16 gap-2"
                                    data-bs-toggle="collapse" aria-expanded="false">
                                    <span>Factures</span>
                                    <em class="on icon ni ni-plus"></em>
                                    <em class="off icon ni ni-minus"></em>
                                </a>
                                <div class="collapse" id="factures">
                                    <ul class="nk-list-dot nk-list-dot-sm pt-2">
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment créer une facture pour un client?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment afficher, telecharger en pdf ou supprimer une facture?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comprendre le processus de paiement d'une facture</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comprendre le statut des factures</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment envoyer la facture au client par email?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment voir l'historique de toutes les factures?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment filtrer les factures en fonction d'un interval de temps précis?</a>
                                        </li>
                                      
                                    </ul>
                                </div>
                            </li>
                            <li class="align-items-start">
                                <a href="#rh" class="nk-list-link-collapse-link fs-16 gap-2"
                                    data-bs-toggle="collapse" aria-expanded="false">
                                    <span>Ressources humaines & Comptes utilisateurs</span>
                                    <em class="on icon ni ni-plus"></em>
                                    <em class="off icon ni ni-minus"></em>
                                </a>
                                <div class="collapse" id="rh">
                                    <ul class="nk-list-dot nk-list-dot-sm pt-2">
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment ajouter un personnel?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment afficher, modifier les informations du personnel?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment créer le compte utilisateur d'un personnel?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment bloquer ou debloquer un compte utilisateur?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment créer le profil de votre client </a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment modifier son mot de passe? </a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment reinitialiser le mot de passe en cas d'oublie? </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="align-items-start">
                                <a href="#rh" class="nk-list-link-collapse-link fs-16 gap-2"
                                    data-bs-toggle="collapse" aria-expanded="false">
                                    <span>Annuaire de contacts</span>
                                    <em class="on icon ni ni-plus"></em>
                                    <em class="off icon ni ni-minus"></em>
                                </a>
                                <div class="collapse" id="rh">
                                    <ul class="nk-list-dot nk-list-dot-sm pt-2">
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment importer une liste de contact depuis EXCEL?</a>
                                        </li>
                                        <li class="nk-list-dot-item align-items-start">
                                            <a href="#">Comment ajouter, modifier, supprimer un contact?</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="nk-entry-wrap pt-3 pslg-5">
                        <div class="nk-entry">
                            <h5>Is there a free trial version available?</h5>
                            <p class="fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit ultricies
                                ullamcorper orci vulputate mauris in nibh nullam elementum. Nibh purus, pretium sed
                                pellentesque amet. Eget gravida ut vel amet ut id nunc, neque. Viverra purus pretium
                                elementum tincidunt mollis.</p>
                            <p class="fs-16">Ipsum, imperdiet nibh venenatis dictumst lectus neque, ante sit. Volutpat
                                gravida commodo augue augue habitasse. Imperdiet ullamcorper bibendum ut sit lorem sit.
                                Quam enim eu, velit ultricies nisl ultricies cras.</p>
                            <img src="images/help-center/a.jpg" alt="">
                            <h5>Offer your clients a self-service help center</h5>
                            <p class="fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit ultricies
                                ullamcorper orci vulputate mauris in nibh nullam elementum. Nibh purus, pretium sed
                                pellentesque amet. Eget gravida ut vel amet ut id nunc, neque. Viverra purus pretium
                                elementum tincidunt mollis.</p>
                            <h5>Ease your Support team with Docs Help Center</h5>
                            <p class="fs-16">At risus viverra adipiscing at in tellus integer feugiat nisl pretium fusce
                                id velit ut tortor sagittis orci a scelerisque purus semper eget at lectus urna duis
                                convallis. porta nibh venenatis cras sed felis eget neque laoreet suspendisse interdum
                                consectetur libero nisl donec pretium vulputate sapien nec sagittis aliquam nunc
                                lobortis mattis aliquam faucibus purus in.</p>
                            <ul class="ms-2">
                                <li class="fs-16">Neque sodales ut etiam sit amet nisl purus non tellus orci ac auctor
                                </li>
                                <li class="fs-16">Adipiscing elit ut aliquam purus sit amet viverra suspendisse potenti
                                </li>
                                <li class="fs-16">Mauris commodo quis imperdiet massa tincidunt nunc pulvinar</li>
                                <li class="fs-16">Adipiscing elit ut aliquam purus sit amet viverra suspendisse potenti
                                </li>
                            </ul>
                            <img src="images/help-center/b.jpg" alt="">
                            <h5>Docs Changelog helps you announce new features</h5>
                            <p class="fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit ultricies
                                ullamcorper orci vulputate mauris in nibh nullam elementum. Nibh purus, pretium sed
                                pellentesque amet. Eget gravida ut vel amet ut id nunc, neque. Viverra purus pretium
                                elementum tincidunt mollis.</p>
                            <p class="fs-16">Ipsum, imperdiet nibh venenatis dictumst lectus neque, ante sit. Volutpat
                                gravida commodo augue augue habitasse. Imperdiet ullamcorper bibendum ut sit lorem sit.
                                Quam enim eu, velit ultricies nisl ultricies cras.</p>
                            <h5>Stay tuned to our ongoing updates</h5>
                            <p class="fs-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit ultricies
                                ullamcorper orci vulputate mauris in nibh nullam elementum. Nibh purus, pretium sed
                                pellentesque amet. Eget gravida ut vel amet ut id nunc, neque. Viverra purus pretium
                                elementum tincidunt mollis.</p>
                            <p class="fs-16">Ipsum, imperdiet nibh venenatis dictumst lectus neque, ante sit. Volutpat
                                gravida commodo augue augue habitasse. Imperdiet ullamcorper bibendum ut sit lorem sit.
                                Quam enim eu, velit ultricies nisl ultricies cras. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Elit ultricies ullamcorper orci vulputate mauris in nibh
                                nullam elementum. Nibh purus, pretium sed pellentesque amet. Eget gravida ut vel amet ut
                                id nunc, neque. Viverra purus pretium elementum tincidunt mollis.</p>
                        </div>
                        <!-- .nk-entry -->
                    </div>
                    <!-- .nk-entry-wrap -->
                </div>
            </div>
        </div>
    </section>
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