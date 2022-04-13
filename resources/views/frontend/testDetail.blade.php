@extends('templates')

@section('content')
<!-- Detail Product -->
<div class="container detail border mt-3 mb-5">

    <div class="row mt-4 mb-5 g-5">
        <div class="col-md-4">
            <img src="{{asset('landing/img/detail.png')}}" class="img-fluid w-100" alt="...">
        </div>

        <div class="col-md-5">
            <h2>Penjualan Tenaga Listrik</h2>
            <h5><a href="#">Price Discuss</a></h5>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Detail</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Info Penting</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum repellat earum est nesciunt qui numquam quam ducimus commodi? Laborum perspiciatis quaerat ab repellendus, odio doloribus quasi aspernatur aut modi omnis.</p>
                    <img src="{{asset('landing/img/grafik-detail.png')}}" class="img-fluid w-100" alt="...">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ab veritatis vitae dolorem quaerat libero explicabo quae mollitia voluptatum, inventore natus culpa a ullam repellendus cum accusamus ducimus est impedit!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum fuga odio numquam natus aliquam praesentium non reprehenderit fugit repellendus officiis, alias id iure animi delectus minus vero hic nemo atque.
                    </p>
                    <img src="{{asset('landing/img/data-detail.png')}}" class="img-fluid w-100" alt="...">
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum repellat earum est nesciunt qui numquam quam ducimus commodi? Laborum perspiciatis quaerat ab repellendus, odio doloribus quasi aspernatur aut modi omnis.</p>
                    <img src="{{asset('landing/img/grafik-detail.png')}}" class="img-fluid w-100" alt="...">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ab veritatis vitae dolorem quaerat libero explicabo quae mollitia voluptatum, inventore natus culpa a ullam repellendus cum accusamus ducimus est impedit!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum fuga odio numquam natus aliquam praesentium non reprehenderit fugit repellendus officiis, alias id iure animi delectus minus vero hic nemo atque.
                    </p>
                    <img src="{{asset('landing/img/data-detail.png')}}" class="img-fluid w-100" alt="...">
                </div>
            </div>
        </div>

        <div class="col-md-3 pt-3">
            <p class="h5">Atur jumlah dan catatan</p>
            <div class="d-flex">
                <input type="number" class="form-control w-25">
                <div class="d-flex align-items-center">
                    <p class="ms-3"> Stock: <span class="total">1.200</span></p>
                </div>
            </div>
            <button type="button" class="btn w-75 mb-2 tambah">Tambah ke List</button>
            <button type="button" class="btn w-75 tawar">Ajukan Penawaran</button>
        </div>
    </div>

</div>
<!-- End Detail -->

@endsection