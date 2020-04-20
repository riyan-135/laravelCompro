{{-- @extends('layout.master')
@section('judul', 'Halaman header')
@section('content') --}}
<div class="container-fluid background">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <a class="navbar-brand" href="#"><img src="/img/logo.png" height="100px" alt=""></a><br>
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" href="/home">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="/contact">Contact</a>
                    </li>
                  </ul>
                  <form class="search" action="/action_page.php" style="margin:auto;max-width:300px;margin-right: 20px;">
                    <input type="text" placeholder="Search.." name="search2">
                  </form>
                </div>
              </nav>
        
        </div>
    </div>
</div>

<style>
    .search {
      box-sizing: border-box;
    }
    
    .search input[type=text] {
      padding: 6px;
      font-size: 17px;
      border: 1px solid grey;
      float: left;
      width: 80%;
      background: #f1f1f1;
      border-radius: 15px;
    }
    .background{
        background-image: url("/img/background.jpg");
        background-repeat: no-repeat;
        -webkit-background-size: 100% 100%;
        -moz-background-size: 100% 100%;
        -o-background-size: 100% 100%;
        background-size: 100% 100%;
        height: 500px;
    
    }
    
    </style>    
