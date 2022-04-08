@extends('templates')

@section('content')

        <section class="">
            <div class="pembungkus">
                <img src="{{asset('landing/img/main-bg.png')}}" class="img-fluid" alt="Logo" />
                <div class="container">
                    <div class="banner_content row">
                        <div class="logo_banner offset-lg-2" style="font-weight:bold">
                            <h1 class="text-medium text-dlm">Building Things
                                <p>
                                    is our mission
                                </p>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="bg-image d-flex justify-content-center align-items-center" style="background-image:url('landing/img/reasons.png');
            height: 70vh;">
                <div class="container">
                    <div class="row">
                        <h2 class="text-center mb-5" style="font-family: 'Work-Sans'; font-size: 45px">Pilih Service</h2>
                        <div class="col ms-5">
                            <div class="card" style="width: 25rem; height:12rem;">
                                <div class="card-body">
                                    <i class="fas fa-home"></i>
                                    <h5 class="card-title mt-3">Special title treatment</h5>
                                    <p class="card-text mt-3">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col ms-5">
                            <div class="card" style="width: 25rem; height:12rem;">
                                <div class="card-body">
                                    <i class="fas fa-home"></i>
                                    <h5 class="card-title mt-3">Special title treatment</h5>
                                    <p class="card-text mt-3">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container mt-5 mb-5">
                <div class="pembungkus">
                    <div class="d-flex">
                        <img src="{{asset('landing/img/bg2.png')}}" class="img-fluid mt-3" alt="Logo">
                        <div class="d-flex justify-content-center mt-5">
                            <img src="{{asset('landing/img/frame2.png')}}" style="position:absolute" class="img-fluid mt-5" alt="Logo">
                            <div class="banner_content row">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="bg-image d-flex justify-content-center align-items-center" style="background-image:url('landing/img/services.png');">
                <div class="container">
                    <h2 class="text-center mt-5 mb-3" style="font-family: 'Work-Sans'; font-size: 45px">Mitra Electron</h2>
                    <div class="row g-5 mt-5 mb-5">
                        <div class="col-6 mt-4">
                            <div class="card d-flex justify-content-center" style="align-items: center; height:17rem;">
                                <img src="{{asset('landing/img/icon1.png')}}" class="img-fluid w-40" alt="...">
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <div class="card d-flex justify-content-center" style="align-items: center; height:17rem;">
                                <img src="{{asset('landing/img/icon2.png')}}" class="img-fluid w-40" alt="...">
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <div class="card d-flex justify-content-center" style="align-items: center; height:17rem;">
                                <img src="{{asset('landing/img/icon3.png')}}" class="img-fluid w-40" alt="...">
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <div class="card d-flex justify-content-center" style="align-items: center; height:17rem;">
                                <img src="{{asset('landing/img/icon4.png')}}" class="img-fluid w-40" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================Category Product Area =================-->
        <section>
            <div class="container mt-5 mb-5">
                <div class="h1" style="color: #000F48">
                    PRODUK TERBARU
                </div>

                <div class="row flex-row-reverse">
                    <div class="col-lg-8">

                        <div class="latest_product_inner row">
                            <div class="col-6 col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body" style="background-color: #FFC806;">
                                        <h4 style="color: #000F48">Penjualan Tenaga Listrik</h2>
                                            <p class="card-text">Some quick example text to build on</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body" style="background-color: #FFC806;">
                                        <h4 style="color: #000F48">Penjualan Tenaga Listrik</h2>
                                            <p class="card-text">Some quick example text to build on</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body" style="background-color: #FFC806;">
                                        <h4 style="color: #000F48">Penjualan Tenaga Listrik</h2>
                                            <p class="card-text">Some quick example text to build on</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                                    <div class="card-body" style="background-color: #FFC806;">
                                        <h4 style="color: #000F48">Penjualan Tenaga Listrik</h2>
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

@endsection