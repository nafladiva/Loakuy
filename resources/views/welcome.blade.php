@extends('layouts.app')

@section('content')
<div class="container-fluid mb-5 wave">
    <div class="row d-flex justify-content-between align-items-center ml-5 p-5">
        <div class="col-lg-5 col-md-6">
            <h1 class="mb-3" data-aos="fade-up" data-aos-delay="100" style="color: white; font-size: 60px;">
                <strong>Loakan saja!</strong>
            </h1>
            <h4 class="mb-3" data-aos="fade-up" data-aos-delay="400" style="color: white;">
                Apakah Anda pernah begadang memikirkan barang-barang tak terpakai berserakan dirumah? Mending Loakan saja di <strong>Loakuy</strong>
            </h4>
            <a data-aos="fade-up" data-aos-delay="600" class="btn mt-3 btn_welcome" href="#getStart"><b>Get Started</b></a>
        </div>

        <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
            <img class="img-fluid" src="images/loakuy-gs.png" alt="illustrator" style="width: 560px;">
        </div>
    </div>
    <br><br><br><br><br>
</div>

<div class="container">
    <h1 class="text-center mt-5" id="getStart" data-aos="fade-down">Getting Started</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="150">
            <img class="img-fluid" src="images/loakuy-vector.png" alt="illustrator2" style="width: 560px;">
        </div>
        <div class="col-lg-6 mt-5" data-aos="fade-down" data-aos-delay="300">
            <p>
                Untuk Pertama Kalinya anda bisa menjual barang bekas anda dan membeli barang dengan harga yang lebih murah secara bersamaan. Hanya ada di 'Loakuy'
            </p>
            <p>
                Caranya sangat mudah, cukup cari barang yang kamu inginkan di kolom Search dan lihat barang-barang menarik yang tersedia! Jika kamu ingin menjual barangmu, cukup buat akun di Loakuy dan langsung iklankan barangmu!
            </p>
            <p>
                Anda Sudah Menunggu Cukup Lama menanti kesempatan menjual barang bekas dan membeli barang dengan harga lebih murah secara bersamaan, jadi tunggu apa lagi!!!
            </p>
        </div>
    </div>
</div>

<div class="container-fluid pb-5 contactus">
    <h1 class="text-center mt-5 p-5" data-aos="fade-right" style="color: white;">Contact Us</h1>
    <div class="row d-flex justify-content-center mb-5">
        <div class="card card-cu col-lg-3 m-3 p-3" data-aos="flip-left" style="border: 3px solid white; background-color: transparent; border-radius: 20px;">
            <a class="card stretched-link text-decoration-none" href="http://www.gmail.com" style="background: transparent; border: none;">
                <img src="{{ asset('images/Gmail.png') }}" class="rounded-circle" style="max-width: 80px;">
                <h5 class="m-2" style="color: white;">loakuy@gmail.com</h5>
            </a>
        </div>
        <div class="card card-cu col-lg-3 m-3 p-3" data-aos="flip-left" data-aos-delay="300" style="border: 3px solid white; background-color: transparent; border-radius: 20px;">
            <a class="card stretched-link text-decoration-none" href="http://www.instagram.com/loakuy" style="background: transparent; border: none;">
                <img src="{{ asset('images/Instagram.png') }}" class="rounded-circle" style="max-width: 80px;">
                <h5 class="m-2" style="color: white;">@Loakuy</h5>
            </a>
        </div>
        <div class="card card-cu col-lg-3 m-3 p-3" data-aos="flip-left" data-aos-delay="600" style="border: 3px solid white; background-color: transparent; border-radius: 20px;">
            <a class="card stretched-link text-decoration-none" href="http://www.twitter.com/loakuy" style="background: transparent; border: none;">
                <img src="{{ asset('images/Twitter.png') }}" class="rounded-circle" style="max-width: 80px;">   
                <h5 class="m-2" style="color: white;">@Loakuy</h5>
            </a>
        </div>
    </div>
</div>

<div class="container">
    <h1 class="text-center mt-5" data-aos="fade-left">TEAM</h1>
    <div class="row d-flex justify-content-center mt-5">
        <div class="m-4" data-aos="zoom-in">
            <img src="{{ asset('images/Sarah.jpg') }}" class="rounded-circle" style="max-width: 220px;">
            <h5 class="text-center m-3">Sarah</h5>
        </div>
        <div class="m-4" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{ asset('images/Diana.jpg') }}" class="rounded-circle" style="max-width: 220px;">
            <h5 class="text-center m-3">Diana</h5>
        </div>
        <div class="m-4" data-aos="zoom-in" data-aos-delay="400">
            <img src="{{ asset('images/Farah.jpg') }}" class="rounded-circle" style="max-width: 220px;">
            <h5 class="text-center m-3">Farah</h5>
        </div>
        <div class="m-4" data-aos="zoom-in" data-aos-delay="600">
            <img src="{{ asset('images/Nafla.jpg') }}" class="rounded-circle" style="max-width: 220px;">
            <h5 class="text-center m-3">Nafla</h5>
        </div>
    </div>
</div>
@endsection