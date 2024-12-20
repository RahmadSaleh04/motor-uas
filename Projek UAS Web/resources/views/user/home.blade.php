@extends('layouts.userapp')

@section('title', 'User Home')

@section('content')

<!-- Layanan Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex py-5 px-4">
                    <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Layanan Berkualitas</h5>
                        <p>Kami memberikan pelayanan terbaik dengan standar kualitas tinggi.</p>
                        <a class="text-secondary border-bottom" href="">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex bg-light py-5 px-4">
                    <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Tenaga Ahli</h5>
                        <p>Tim kami terdiri dari teknisi berpengalaman dan profesional.</p>
                        <a class="text-secondary border-bottom" href="">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex py-5 px-4">
                    <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                    <div class="ps-4">
                        <h5 class="mb-3">Peralatan Modern</h5>
                        <p>Kami menggunakan peralatan canggih untuk hasil terbaik.</p>
                        <a class="text-secondary border-bottom" href="">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Layanan End -->

@endsection