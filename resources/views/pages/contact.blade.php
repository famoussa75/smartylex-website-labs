@extends('outils.layout')
@section('title','Contact')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style-business-solution.css') }}">

<main class="nk-pages">
    <!-- Banner Section Start  -->
    <section class="nk-banner-wrap nk-banner-business-feature ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="nk-section-head text-center">

                        <h1 class=" text-white aos-init aos-animate" data-aos="fade-up" data-aos-delay="50"><span
                                class="text-layout-secondary"> <i class="fa fa-regular fa-file-lines"></i>&nbsp;
                                Souscrire</span></h1>
                        <!-- <p class="nk-section-text aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">Vous
                            voulez bénéficier de Smartylex, souscrivez en remplissant le formulaire ci-dessous. </p> -->
                    </div>
                </div>
            </div>

        </div>
        <div class="nk-mask shape-36 aos-init aos-animate" data-aos="fade-in" data-aos-delay="0"></div>
    </section>
    <!-- Banner Section End -->
    <!-- Contact Section Start -->
    <section class="nk-section pt-7 pt-lg-120">
        <div class="container">
            <div class="row justify-content-center text-center">
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Félicitaions !</strong>  {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Échec!</strong> {{ session()->get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="col-lg-8 col-xxl-6">
                    <div class="nk-section-head">
                        <h2 class="">Formulaire de souscription</h2>
                        <p class="nk-section-text">Pour souscrire, veuillez compléter le formulaire ci-dessous.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-between">
                <div class="col-lg-8 aos-init" data-aos="fade-up">
                    <p>(<span style="color:red">*</span>) Champs obligatoires</p>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('sendMail')}}" method="post" class="" id="contactForm">
                                @csrf
                                <div class="row g-gs">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Nom du cabinet<span
                                                    style="color:red">*</span></label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="cabinet" class="form-control"
                                                    placeholder="Entrez le nom de votre cabinet" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Nom du représentant<span
                                                    style="color:red">*</span></label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="user-name" class="form-control"
                                                    placeholder="Entrez votre nom et prenom" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Email<span style="color:red">*</span></label>
                                            <div class="form-control-wrap">
                                                <input type="email" name="user-email" class="form-control"
                                                    placeholder="Entrez votre email" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Telephone<span style="color:red">*</span></label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="user-phone" class="form-control"
                                                    placeholder="(+224)" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Quel plan voulez vous souscrire<span
                                                    style="color:red">*</span> ? &nbsp;&nbsp;<a
                                                    href="{{route('home')}}#prix"
                                                    class="btn-link text-primary"><span>Voir les plans</span><em
                                                        class="icon ni ni-arrow-right"></em> </a></label>
                                            <div class="form-control-wrap">
                                                <select name="plan" id="" class="form-control" required="true">
                                                    <option value="" seleted>-- Choisissez --</option>
                                                    <option value="Essai gratuit">Essai gratuit</option>
                                                    <option value="Standard">Standard</option>
                                                    <option value="Premium">Premium</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label">Parlez-nous un peu de votre requête</label>
                                                <span>
                                                    <span id="char-count">0</span>/ <span id="char-max"
                                                        data-char-max="255">255</span>
                                                </span>
                                            </div>
                                            <!-- .form-label-group -->
                                            <div class="form-control-wrap">
                                                <textarea id="textarea-box" name="user-message" class="form-control"
                                                    placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>Veuillez confirmer que vous n'êtes pas un robot.</strong>
                                        </span>
                                    @endif
                                    <div class="g-recaptcha" data-sitekey="6Lfp3kkpAAAAAMjbEZzN3W73uGl4Xwk99TGZnlbr"></div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit"
                                                id="submit-btn">Soumettre</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-list">
                        <div class="card aos-init" data-aos="fade-up" data-aos-delay="50">
                            <div class="card-body">
                                <div class="media media-lg media-middle media-circle text-bg-primary-soft mb-5">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <h5 class="card-title mb-1">Email</h5>
                                <p class="line-clamp-2">contact@smartylex.com</p>
                                <div class="pt-2">
                                    <a href="#" class="btn-link text-primary">
                                        <span>Documentation</span>
                                        <em class="icon ni ni-arrow-right"></em>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card aos-init" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-body">
                                <div class="media media-lg media-middle media-circle text-bg-primary-soft mb-5">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <h5 class="card-title mb-1">Adresse</h5>
                                <p class="line-clamp-2">Route du Niger, Immeuble Qaski, 5eme étage, Conakry, Guinée </p>
                                <div class="pt-2">
                                    <a href="#" class="btn-link text-primary">
                                        <span>Documentation</span>
                                        <em class="icon ni ni-arrow-right"></em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .card-list -->
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section end  -->

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