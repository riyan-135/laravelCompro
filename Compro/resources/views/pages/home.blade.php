@extends('layout.master')
@section('judul', 'Halaman Home')
@section('content')

@include('includes.header')

<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <img src="/img/gambar.jpeg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-sm-8 text-center" style="font-family:Arial, Helvetica, sans-serif">
            <h1>Selamat Datang Di Website Kami</h1>
            <p>PT Cipta Buana adalah sebuah Perusahaan yang bergerak dibidang jasa pembuatan web dan advertising. Di dirikan pada tahun 2020 perusahaan ini telah berkembang dan menjadi perusahaan yang mungkin akan dipertimbangkan oleh para client ketika ingin membuat iklan atau membuat sebuah website. Kepercayaan client adalah hal yang selalu kami jaga, maka dari itu ayo buat website idaman kamu disini sekarang juga. </p>
        </div>
    </div>
</div>
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
            <h1>Contacts</h1>
        </div>
    </div><br>
    <div class="row">
        <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63465.16364722634!2d106.75617816061646!3d-6.187888265989665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f77abfc5d3cf%3A0x6653aecc17740a12!2sPuri%20Indah%20Mall!5e0!3m2!1sid!2sid!4v1587340810645!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-sm-6 ">
            <div class="form-group">
                <form>
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Kirim Pesan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary">Submit</button>
                <div class="kontak"><br>
                    <h5>Hubungi kami</h5>
                    <p><img src="/img/icon4.svg" style="height: 20px;" alt=""> 0895378296437</p>
                    <p><img src="/img/icon5.svg" style="height: 20px;" alt=""> admin@gmail.com</p>
                </div>
              </form>
        </div>
    </div>
</div>
<br>

@include('includes.footer')

@endsection