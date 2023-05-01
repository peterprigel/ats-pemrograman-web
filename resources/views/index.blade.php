@extends('layout.index')

@section('content')
    <h3>SELAMAT DATANG DI</h3>
    <h2>APLIKASI WEB JUAL BELI BARANG DAN JASA</h2>
    <div class="lokal-body-paddingtop">
        <div class="lokal-div1">
            <img src="{{asset("img/24thrift-mockup.png")}}" width="350px">
        </div>
        <div class="lokal-div">
            <p style="font-weight:700;">SEKILAS TENTANG KAMI</p>
            <p>Website yang kami rancang merupakan website e-commerce yang bernama 24THRIFT. Website ini merupakan website yang menjual pakaian bekas layak pakai secara online. Pada website ini terdapat client yang menyediakan produk, customer yang akan membeli produk, dan admin yang mengatur berjalannya website.</p>
            <p>Website ini dirancang dengan tujuan memudahkan customer untuk menemukan barang bekas yang menarik. Dengan pembuatan website thrift secara online, diharapkan customer dari lain daerah yang ingin membeli barang thrift dapat dimudah kan. Pembuatan website ini juga diharapkan dapat lebih menghemat waktu dalam kegiatan jual beli barang thrift, serta memudahkan penjual barang thrift untuk mendapatkan lebih banyak pelanggan.</p>
            {{-- <p style="font-style: italic;">24thrift.com</p> --}}
        </div>
    </div>
@endsection