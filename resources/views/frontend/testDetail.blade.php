@extends('templates')

@section('content')
        <!-- Detail Product -->
        <div class="container mt-5 mb-5">
        

        <div class="row flex-row-reverse">
            <div class="col-lg-10">

                <div class="row mt-2">

                        <div class="card">
                            <img src="{{asset('landing/img/produk1.png')}}" class="card-img-top" alt="...">
                            <div class="card-body py-2" style="background-color: #FFC806;">
                                <h6 class="card-title" style="color: #000F48">Penjualan Tenaga Listrik</h6>
                                <p class="card-text">Some quick example text to build on</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 pt-2">
                <div class="left_sidebar_area">
                    <aside class="left_widgets cat_widgets">


                    </aside>
                </div>
            </div>

        </div>
    </div>
        <!-- End Detail -->
    </div>


@endsection