<header>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
            <div class="container">
                <a href="/" aria-current="page"> <img class="img-fluid" src="{{asset('landing/img/logo.png')}}"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PRODUCT
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>

                                </li>

                            </ul>
                        </li>
                    </ul>

                    <div class="d-flex">
                        @guest
                        <a class="nav-link active" aria-current="page" href="#"><i class="fi fi-rr-search"></i></a>
                        <a class="nav-link active" aria-current="page" href="#"><i class="fi fi-rr-shopping-cart"></i></a>
                        <a href="#" class="btn btn-login me-2" type="submit">Sign In</a>
                        <a href="#" class="btn daftar" type="submit">Sign Up</a>
                        @else
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <a class="nav-link active anchor" aria-current="page" href="#"><i class="fas fa-search"></i> Cari</a>

                            <li class="nav-item dropdown ms-3">
                                <a class="nav-link active anchor ms-3" aria-current="page" href="#"><i class="fi fi-rr-shopping-cart">History</i>
                            </li>

                            <li class="nav-item dropdown ms-3">
                                <a class="nav-link active anchor ms-3" aria-current="page" href="#">

                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></span>

                                    <i class="fas fa-shopping-cart"></i> Keranjang
                                </a>
                            </li>

                            <li class="nav-item dropdown ms-3">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">profile</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="#" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
    </header>