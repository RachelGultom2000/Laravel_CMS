@extends('template')
@section('title', 'Contact Us')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset('belajar_laravel/images/contact-bg.jpg') }}') no-repeat center center;">
    <div class="container text-center">
      <h1>Website Sederhana dengan Laravel</h1>
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
          <h2><b>Kontak Saya</b></h2>
          <h4>Email : rachelgultom5@gmail.com</h4>
          <p class="lead">Perkenalkan saya Rachel Gultom mahasiswa Teknologi Informasi
            dari Institut Teknologi Del yang bercita cita ingin menjadi web developer.</p>
            <p>Quote : "Coba tanya ke orang sukses,mau kegagalan yang ke berapa yang ingin kalian dengar"</p>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection