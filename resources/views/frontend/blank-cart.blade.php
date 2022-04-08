<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('landing/img/logo.png')}}" type="image/x-icon">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="landing/uicons/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="{{asset('landing/fontawesome-free-5.15.4-web/css/all.css')}}">

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('landing/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing/css/style.css')}}">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Farsan&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <title>ELECTRON</title>
</head>

<style type="text/css">
    .pembungkus {
        position: relative;
    }

    .text-dlm {
        position: absolute;
        left: 170px;
        top: 230px;
        color: #33334f;
        font-family: 'Work Sans';
        font-size: 60px;
    }

    .bg {
        background-size: cover;
    }
</style>

<body>

<header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light ">
            <div class="container">
                <a href="/" aria-current="page"> <img class="img-fluid" src="{{asset('landing/img/logo.png')}}" style="width: 170px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
                        <li class="nav-item">
                            <a class="nav-link active" style="color: #33334F; font-family: Open Sans;" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item dropdown ms-4">
                            <a class="nav-link dropdown-toggle" style="color: #33334F; font-family: Open Sans;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link active" style="color: #33334F;" aria-current="page" href="#"><i class="fi fi-rr-search"></i></a>
                        <a class="nav-link active" style="color: #33334F;" aria-current="page" href="#"><i class="fi fi-rr-shopping-cart"></i></a>
                        <a href="#" class="btn btn-outline-secondary me-2" type="submit">Sign In</a>
                        <a href="#" class="btn" style="color: #FFC806; background-color:#000F48;" type="submit">Sign Up</a>
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

    <section>
        <div class="container mt-5 pt-5">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{asset('landing/img/cart-blank.png')}}" class="img-fluid" alt="...">
                <h3 style="font-weight: bolder;font-family:'Poppins';">Keranjang Pesanan Kosong</h3>
                <p style="color: #000F48;">Yuk, isi dengan produk pilihan kamu</p>
                <button type="button" class="btn w-25" style="background-color: #000F48;"><a class="btn" style="color: #FFC806;" href="/testAllProduk">Kembali ke produk</a></button>
            </div>
        </div>
    </section>


    <footer class="footer-03 pt-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 mb-md-0 mb-4">
                            <div class="d-flex justify-content-start">
                                <h5 class="footer-heading">ADDRESS: </h5> <span style="font-family: 'Times New Roman', Times, serif;">&nbsp;6391 Elgin St. Celina, Delaware 10299</span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <h2 class="footer-heading">PHONE: </h2> <span style="font-family: 'Times New Roman', Times, serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+84 1102 2703</span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <h2 class="footer-heading">EMAIL: </h2> <span style="font-family: 'Times New Roman', Times, serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hello@electron.com</span>
                            </div>
                            <a href="/" aria-current="page"> <img class="img-fluid" src="{{asset('landing/img/logo.png')}}" style="width: 140px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row justify-content-end">
                        <div class="col-md-12 col-lg-11 mb-md-0 mb-4">
                            <h2 class="footer-heading">Newsletter:</h2>
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control rounded-left" placeholder="Your email here">
                                    <input type="submit" value="Subscribe" class="form-control submit ms-3 rounded-right">
                                </div>
                            </form>
                            <h2 class="footer-heading mt-5">Social:</h2>
                            <ul class="ftco-footer-social p-0">
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><span class="ion-logo-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 mt-5 border-top py-2" style="background-color: #000F48;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-8">
                        <p class="copy" style="color: white;">
                            Electron Company &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="http://electron-pln.com/ecommerce/js/jquery-3.2.1.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/js/popper.js"></script>
    <script src="http://electron-pln.com/ecommerce/js/bootstrap.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/js/stellar.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/isotope/isotope-min.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/js/jquery.ajaxchimp.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/flipclock/timer.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/counter-up/jquery.counterup.js"></script>
    <script src="http://electron-pln.com/ecommerce/js/mail-script.js"></script>
    <script src="http://electron-pln.com/ecommerce/js/theme.js"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</body>

</html>