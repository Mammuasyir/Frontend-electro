@extends('templates')

@section('content')

    <section class="blank">
        <div class="container mt-5 pt-5 pb-5">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{asset('landing/img/cart-blank.png')}}" class="img-fluid" alt="...">
                <h3>Keranjang Pesanan Kosong</h3>
                <p>Yuk, isi dengan produk pilihan kamu</p>
                <button type="button" class="btn-blank w-50"><a class="btn" href="/testAllProduk">Kembali ke produk</a></button>
            </div>
        </div>
    </section>


@endsection