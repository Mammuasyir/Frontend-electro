@extends('templates')

@section('content')
<!-- Detail Product -->
<div class="container border mt-3 mb-5">

    <div class="row mt-4 mb-5 g-5">
        <div class="col-md-4">
            <img src="{{asset('landing/img/detail.png')}}" class="w-100" alt="...">
        </div>

        <div class="col-md-5">
            <h2>Penjualan Tenaga Listrik</h2>
            <h5><a href="#">Price Discuss</a> </h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum repellat earum est nesciunt qui numquam quam ducimus commodi? Laborum perspiciatis quaerat ab repellendus, odio doloribus quasi aspernatur aut modi omnis.</p>
            <img src="{{asset('landing/img/grafik-detail.png')}}" class="w-100" alt="...">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ab veritatis vitae dolorem quaerat libero explicabo quae mollitia voluptatum, inventore natus culpa a ullam repellendus cum accusamus ducimus est impedit!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum fuga odio numquam natus aliquam praesentium non reprehenderit fugit repellendus officiis, alias id iure animi delectus minus vero hic nemo atque.
            </p>
            <img src="{{asset('landing/img/data-detail.png')}}" class="w-100" alt="...">
        </div>

        <div class="col-md-3">
            <p>Atur jumlah dan catatan</p>
            <input type="number" class="form-control w-25 h-5"><p> Stock 200</p>
            <button type="button" class="btn btn-primary w-75 mb-2">Tambah ke List</button>
            <button type="button" class="btn btn-outline-primary w-75">Ajukan Penawaran</button>
        </div>
    </div>

</div>
<!-- End Detail -->

@endsection