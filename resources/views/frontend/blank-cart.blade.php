@extends('templates')

@section('content')

    <section>
        <div class="container mt-5 pt-5 pb-5">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="{{asset('landing/img/cart-blank.png')}}" class="img-fluid" alt="...">
                <h3 style="font-weight: bolder;font-family:'Poppins';">Keranjang Pesanan Kosong</h3>
                <p style="color: #000F48;">Yuk, isi dengan produk pilihan kamu</p>
                <button type="button" class="btn w-25" style="background-color: #000F48;"><a class="btn" style="color: #FFC806;" href="/testAllProduk">Kembali ke produk</a></button>
            </div>
        </div>
    </section>


@endsection