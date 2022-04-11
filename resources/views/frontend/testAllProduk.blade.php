@extends('templates')

@section('content')

<!--================Category Product Area =================-->
<div class="container all mt-5 mb-5">
    <div class="d-flex justify-content-between">
        <h2 class="pt-5">
            Product Electron
        </h2>
        <div class="search-bar pt-5">
            <form class="search-form d-flex justify-content-center" method="get" action="#">
                <input type="text" name="search" placeholder="Search by Name" title="Enter search keyword">
                <button type="submit" title="Search"><i class="fas fa-search"></i></button>
            </form>
        </div><!-- End Search Bar -->
    </div>

    <div class="row flex-row-reverse">
        <div class="col-lg-10">

            <div class="row mt-2">
                <div class="col col-lg-3 col-md-6 py-2 px-2">
                    <div class="card pro">
                        <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body py-2">
                            <h6 class="card-title">Penjualan Tenaga Listrik</h6>
                            <p class="card-text">Some quick example text to build on</p>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-3 col-md-6 py-2 px-2">
                    <div class="card pro">
                        <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body py-2">
                            <h6 class="card-title">Penjualan Tenaga Listrik</h6>
                            <p class="card-text">Some quick example text to build on</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 py-2 px-2">
                    <div class="card pro">
                        <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body py-2">
                            <h6 class="card-title">Penjualan Tenaga Listrik</h6>
                            <p class="card-text">Some quick example text to build on</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 py-2 px-2">
                    <div class="card pro">
                        <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body py-2">
                            <h6 class="card-title">Penjualan Tenaga Listrik</h6>
                            <p class="card-text">Some quick example text to build on</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 py-2 px-2">
                    <div class="card pro">
                        <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body py-2">
                            <h6 class="card-title">Penjualan Tenaga Listrik</h6>
                            <p class="card-text">Some quick example text to build on</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 py-2 px-2">
                    <div class="card pro">
                        <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body py-2">
                            <h6 class="card-title">Penjualan Tenaga Listrik</h6>
                            <p class="card-text">Some quick example text to build on</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 py-2 px-2">
                    <div class="card pro">
                        <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body py-2">
                            <h6 class="card-title">Penjualan Tenaga Listrik</h6>
                            <p class="card-text">Some quick example text to build on</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 py-2 px-2">
                    <div class="card pro">
                        <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body py-2">
                            <h6 class="card-title">Penjualan Tenaga Listrik</h6>
                            <p class="card-text">Some quick example text to build on</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 py-2 px-2">
                    <div class="card pro">
                        <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body py-2">
                            <h6 class="card-title">Penjualan Tenaga Listrik</h6>
                            <p class="card-text">Some quick example text to build on</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 pt-2">
            <div class="left_sidebar_area">
                <aside class="left_widgets cat_widgets">

                    <div class="widgets_inner" id="accordion1">
                        <ul class="list">
                            <li type="disc" class="hoverbig">
                                <a data-toggle="collapse" data-target="#collapse3" role="button">
                                    <!-- href="https://electron-pln.com/category/haleyora" -->
                                    Haleyora Power
                                </a>
                            </li>

                            <li type="disc" class="hoverbig">
                                <a data-toggle="collapse" data-target="#collapse4" role="button">
                                    <!-- href="https://electron-pln.com/category/icon" -->
                                    ICON +
                                </a>
                            </li>

                            <li type="disc" class="hoverbig">
                                <a data-toggle="collapse" data-target="#collapse29" role="button">
                                    <!-- href="https://electron-pln.com/category/indonesia-power" -->
                                    Indonesia Power
                                </a>
                            </li>

                            <li type="disc" class="hoverbig">
                                <a data-toggle="collapse" data-target="#collapse22" role="button">
                                    <!-- href="https://electron-pln.com/category/pln-insurance" -->
                                    PLN Insurance
                                </a>
                                <!-- <ul class="list" style="display: block"> -->
                            <li class="collapse hoverbig" id="collapse22">
                                <a class="hoverbig" href="#">
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
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- End Pagination -->
    </div>
</div>
<!--================End Category Product Area =================-->


@endsection