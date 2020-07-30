@extends('template')
@section('title', 'About Us')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset('belajar_laravel/images/about-bg.jpg') }}') no-repeat top center;">
    <div class="container text-center">
      <h1>Website sederhana dengan Laravel</h1>
      <p class="lead">Yuk belajar ngoding! Supaya kamu bisa menjadi programmer handal kebanggaan Indonesia</p>
    </div>
  </header>
  <!-- END : Header -->
@endsection
 
@section('main')
  <!-- Main -->
  <section class="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Halaman Tentang Website</h2>
          <p class="lead">Ini merupakan website sederhana yang saya buat dengan framework laravel dan bootstrap.Di website ini kita dapat melihat blog atau konten barang barang di toko.</p>
          <p class="lead">Kenapa Laravel?
          Karena laravel merupakan framework terbaik yang bisa kita manfaatkan untuk membuat sebuah sistem
          yang aman dan tentunya nyaman digunakan oleh user.</p>
        </div>
              <div class="col-xs-6 col-md-3">
    <div class="thumbnail">
      <img src="" alt="">
    </div>
    <div class="caption">
      <h3>Gambar 1</h3>
      <p>buku</p>
      <a href="#" class="btn btn-primary" role="button">Button</a>
    </div>
    <div class="col-xs-6 col-md-3">
      <div class="thumbnail">
        <img src="" alt="">
      </div>
      <div class="caption">
        <h3>Gambar 2</h3>
        <p>Bunga</p>
        <a href="#" class="btn btn-primary" role="button">Button</a>
      </div>
    </div>
      </div>
    </div>

  </div>
  </section>

  
  <!-- END : Main -->
@endsection