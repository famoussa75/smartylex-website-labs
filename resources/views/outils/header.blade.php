<header class="nk-header">
    <div class="nk-header-main  is-theme is-theme-bg ">
        <div class="container">
            <div class="nk-header-wrap">
                <div class="nk-header-logo">
                    <a href="{{route('home')}}" class="logo-link">
                        <div class="logo-wrap">
                            <img class="logo-img logo-light" src="images/logo-312.png" srcset="images/logo-312.png 2x"
                                alt="brand-logo">
                           
                        </div>
                    </a>
                </div>
                <nav class="nk-header-menu nk-navbar">
                    <div>
                        <ul class="nk-nav">
                            <li class="nk-nav-item">
                                <a href="{{route('home')}}" class="nk-nav-link">
                                    <span class="nk-nav-text">Accueil</span>
                                </a>
                             
                            </li> 
                            <li class="nk-nav-item">
                                <a href="{{route('home')}}#about" class="nk-nav-link">
                                    <span class="nk-nav-text">À propos</span>
                                </a>
                            </li>
                        
                            <li class="nk-nav-item">
                                <a href="{{route('home')}}#prix" class="nk-nav-link">
                                    <span class="nk-nav-text">Plans</span>
                                </a>
                            </li>
                            <!-- <li class="nk-nav-item">
                                <a href="{{route('docs')}}" class="nk-nav-link">
                                    <span class="nk-nav-text">Docs</span>
                                </a>
                            </li> -->
                        </ul>
                        <div class="nk-navbar-btn d-lg-none">
                            <ul class="nk-btn-group sm justify-content-center">
                                <li class="w-100">
                                    <a href="{{route('contact')}}"
                                        class="btn btn-primary w-100">
                                        <i class="fa fa-regular fa-file-lines"></i>&nbsp;&nbsp; <span>Souscrire</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="nk-header-action">
                    <ul class="nk-btn-group sm justify-content-center">
                        <li class="d-none d-md-block">
                            <a href="{{route('contact')}}" class="btn btn-primary rounded-pill">
                            <i class="fa fa-regular fa-file-lines"></i>&nbsp;&nbsp; <span>Souscrire</span>
                            </a>
                        </li>
                        <li class="nk-navbar-toggle">
                            <button class="btn btn-outline-white navbar-toggle h-100 rounded-1 p-2">
                                <em class="icon ni ni-menu"></em>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>