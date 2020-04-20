@extends('layout.master')
@section('judul', 'Halaman Produk')
@section('content')
@include('includes.header')

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