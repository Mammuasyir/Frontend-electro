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
    <link rel="stylesheet" href="{{asset('landing/css/footer.css')}}">



    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Farsan&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <title>ELECTRON</title>
</head>

<body>

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

    <div class="content_area">
        <div class="bg-web">
            <img src="{{asset('landing/img/main-bg.png')}}" class="img-fluid bg" alt="Logo">
            <div class="container">
                <h1>Building things
                    <p>
                        is our mission
                    </p>
                </h1>
            </div>
        </div>

        <section class="kategori-1 mb-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="container mb-5">
                    <h2 class="text-center mt-5">Pilih Service</h2>
                    <div class="row g-3 mt-3 mb-5">
                        <div class="col-md-2 col-xs-2 no"></div>
                        <div class="col-md-4 col-xs-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-home"></i>
                                    <h5 class="card-title mt-3">Special title treatment</h5>
                                    <p class="card-text mt-3">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-home"></i>
                                    <h5 class="card-title mt-3">Special title treatment</h5>
                                    <p class="card-text mt-3">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 no"></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="about mt-5 mb-5">
            <div class="container">
                <div class="d-flex">
                    <img src="{{asset('landing/img/bg2.png')}}" class="img-fluid bg mt-3 mb-5 " alt="Logo">
                    <div class="d-flex justify-content-center mt-5">
                        <img src="{{asset('landing/img/frame2.png')}}" class="img-fluid bg-2 mt-5" alt="Logo">
                        <h3>Tentang Electron</h3>
                        <p>Lorem ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quidem obcaecati quae vitae ratione unde esse, nesciunt repudiandae praesentium mollitia a ab ducimus labore accusamus deleniti ea fuga et quis!
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est corporis molestias porro rem fugiat. Vel a similique, optio, odit eius ipsa suscipit.
                        </p>
                        <button type="button" class="btn-about"><a class="btn" href="#">More on Our History</a></button>
                    </div>
                </div>
            </div>
        </div>

        <section class="mitra mt-5 mb-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="container">
                    <h2 class="text-center mt-5">Mitra Electron</h2>
                    <div class="row g-4 mt-2 mb-5">

                        <div class="col-md-2 col-xs-2 no"></div>
                        <div class="col-md-4 col-xs-4">
                            <div class="card d-flex justify-content-center card-mitra">
                                <img src="{{asset('landing/img/icon1.png')}}" class="img-fluid w-25" alt="...">
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <div class="card d-flex justify-content-center card-mitra">
                                <img src="{{asset('landing/img/icon2.png')}}" class="img-fluid w-50" alt="...">
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 no"></div>
                        <div class="col-md-2 col-xs-2 no"></div>
                        <div class="col-md-4 col-xs-4">
                            <div class="card d-flex justify-content-center card-mitra">
                                <img src="{{asset('landing/img/icon3.png')}}" class="img-fluid w-50" alt="...">
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <div class="card d-flex justify-content-center card-mitra">
                                <img src="{{asset('landing/img/icon4.png')}}" class="img-fluid w-50" alt="...">
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 no"></div>
                    </div>
                </div>
            </div>
        </section>

        <!--================Category Product Area =================-->
        <section class="produk-area">
            <div class="container mt-5 mb-5">
                <div class="h2 jud">
                    Produk Terbaru
                </div>

                <div class="row flex-row-reverse">
                    <div class="col-lg-8">

                        <div class="latest_product_inner row">
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4>Penjualan Tenaga Listrik</h4>
                                        <p class="card-text">Some quick example text to build on</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4>Penjualan Tenaga Listrik</h4>
                                        <p class="card-text">Some quick example text to build on</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4>Penjualan Tenaga Listrik</h4>
                                        <p class="card-text">Some quick example text to build on</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4>Penjualan Tenaga Listrik</h4>
                                        <p class="card-text">Some quick example text to build on</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="left_sidebar_area">
                            <aside class="left_widgets cat_widgets">

                                <div class="widgets_inner" id="accordion1">
                                    <ul class="list">
                                        <li type="disc" class="hoverbig" style="font-weight:bold; cursor:pointer;">
                                            <a data-toggle="collapse" data-target="#collapse3" role="button">
                                                <!-- href="https://electron-pln.com/category/haleyora" -->
                                                Haleyora Power
                                            </a>
                                        </li>

                                        <li type="disc" class="hoverbig" style="font-weight:bold; cursor:pointer;">
                                            <a data-toggle="collapse" data-target="#collapse4" role="button">
                                                <!-- href="https://electron-pln.com/category/icon" -->
                                                ICON +
                                            </a>
                                        </li>

                                        <li type="disc" class="hoverbig" style="font-weight:bold; cursor:pointer;">
                                            <a data-toggle="collapse" data-target="#collapse29" role="button">
                                                <!-- href="https://electron-pln.com/category/indonesia-power" -->
                                                Indonesia Power
                                            </a>
                                        </li>

                                        <li type="disc" class="hoverbig" style="font-weight:bold; cursor:pointer;">
                                            <a data-toggle="collapse" data-target="#collapse22" role="button">
                                                <!-- href="https://electron-pln.com/category/pln-insurance" -->
                                                PLN Insurance
                                            </a>
                                            <!-- <ul class="list" style="display: block"> -->
                                        <li class="collapse hoverbig" id="collapse22">
                                            <a class="hoverbig" href="https://electron-pln.com/category/retail">
                                                Retail</a>
                                        </li>
                                        <!-- </ul> -->
                                        </li>

                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>


                    <!-- Pagination -->
                    <div class="row mt-3 mb-5">
                        <nav>
                            <ul class="pagination d-flex justify-content-end">
                                <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                </li>
                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="https://electron-pln.com/product?page=2">2</a></li>
                                <li class="page-item"><a class="page-link" href="https://electron-pln.com/product?page=3">3</a></li>
                                <li class="page-item"><a class="page-link" href="https://electron-pln.com/product?page=4">4</a></li>
                                <li class="page-item"><a class="page-link" href="https://electron-pln.com/product?page=5">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="https://electron-pln.com/product?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- End Pagination -->
                </div>
            </div>
        </section>
        <!--================End Category Product Area =================-->
    </div>

    <footer class="footer-03 mt-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 mb-md-0 mb-4">
                            <div class="d-flex justify-content-start">
                                <h2 class="footer-heading">ADDRESS: </h2> <span>&nbsp;6391 Elgin St. Celina, Delaware 10299</span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <h2 class="footer-heading">PHONE: </h2> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+84 1102 2703</span>
                            </div>
                            <div class="d-flex justify-content-start">
                                <h2 class="footer-heading">EMAIL: </h2> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hello@electron.com</span>
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
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fi fi-brands-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fi fi-brands-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fi fi-brands-instagram"></i></a></li>
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fi fi-brands-linkedin"></i></a></li>
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