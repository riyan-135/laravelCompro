@extends('layout.master')
@section('judul', 'Halaman Produk')
@section('content')
@include('includes.header')

<div class="container-fluid"><br>
    <div class="row">
        <div class="col-sm-12">
            <h1>Our Products</h1>
        </div>
    </div><br>
    <div class="row text-center">
        <div class="col-sm-4">
            <img src="/img/icon1.svg" style="height: 50px; filter: drop-shadow(0 0 0.20rem black);" class="img-fluid" alt="Responsive image">
            <h3 style="color:blue;">Advertising</h3>
            <p>Membuat iklan yang menarik dan sangat pas untuk mempromosikan iklan anda.</p>
        </div>
        <div class="col-sm-4">
            <img src="/img/icon2.svg" style="height: 50px; filter: drop-shadow(0 0 0.20rem black);" class="img-fluid" alt="Responsive image">
            <h3 style="color:blue;">Web Development</h3>
            <p>Membuat web idaman anda dengan tampilan yang menarik dan futuristik.</p>
        </div>
        <div class="col-sm-4">
            <img src="/img/icon3.svg" style="height: 50px; filter: drop-shadow(0 0 0.20rem black);" class="img-fluid" alt="Responsive image">
            <h3 style="color:blue;">Mobile App</h3>
            <p>Membuat usaha anda lebih dinamis dengan adanya aplikasi mobile.</p>
        </div>
    </div>
</div><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h1>Web examples</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <img src="/img/gambar1.png" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-sm-4">
            <img src="/img/gambar2.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-sm-4">
            <img src="/img/gambar3.jpg" class="img-fluid" alt="Responsive image">
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-12">
            <h1>Advertisement</h1>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-4">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/9oiAkeKx5fE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<br>


@include('includes.footer')
@endsection