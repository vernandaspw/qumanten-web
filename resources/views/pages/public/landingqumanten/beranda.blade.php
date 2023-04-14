@extends('layouts.landingqumantu')

@section('slot')
    <div class="hero">
        <section class="h-100 w-100" style="box-sizing: border-box; background-color: #FEF8EC">

            <div class="container-xxl mx-auto p-0  position-relative header-2-1" style="font-family: 'roboto', sans-serif">
                <nav class="navbar navbar-expand-xl navbar-light">
                    <a href="#">
                        <img style="margin-right: 0.75rem" src="{{ asset(config('app.imgurl') . 'assets/logoqm.png') }}"
                            alt="" />
                    </a>
                    <div class="ml-auto">
                        <button class="btn btn-default btn-no-fill d-xl-none mr-1" style="color: #FFAA00">
                            <i class="fas fa-receipt"></i>
                        </button>
                        <button type="button" class="btn position-relative d-xl-none mr-1"
                            style="background-color: #FFAA00; color: white">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </button>
                        <button class="navbar-toggler border-0 mr-1" type="button" data-bs-toggle="modal"
                            data-bs-target="#targetModal-item">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>


                    <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
                        aria-labelledby="targetModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content bg-white border-0">
                                <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                                    <a class="modal-title" id="targetModalLabel">
                                        <img style="margin-top: 0.5rem"
                                            src="{{ asset(config('app.imgurl') . 'assets/logoqm.png') }}" alt="" />
                                    </a>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">

                                    <ul class="navbar-nav responsive ms-auto mt-2 mt-lg-0">
                                        <li class="nav-item active">
                                            <a class="nav-link" style=" font-family: 'roboto'; color: #FFAA00;"
                                                href="#">Beranda</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" style=" font-family: 'roboto'; color: #FFAA00;"
                                                href="#">Layanan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" style=" font-family: 'roboto'; color: #FFAA00;"
                                                href="#">Filtur</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" style=" font-family: 'roboto'; color: #FFAA00;"
                                                href="#">Tema
                                                undangan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" style=" font-family: 'roboto'; color: #FFAA00;"
                                                href="#">Harga</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" style=" font-family: 'roboto'; color: #FFAA00;"
                                                href="#">Kontak</a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                                    <button class="btn btn-default btn-no-fill" style="color: #FFAA00">
                                        Cek Pesanan
                                    </button>
                                    {{-- <button class="btn btn-fill text-white"></button> --}}
                                    <button type="button" class="btn position-relative"
                                        style="background-color: #FFAA00; color: white">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                            3
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" style=" font-family: 'roboto'; color: #FFAA00;"
                                    href="#">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style=" font-family: 'roboto'; color: #FFAA00;"
                                    href="#">Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style=" font-family: 'roboto'; color: #FFAA00;"
                                    href="#">Filtur</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style=" font-family: 'roboto'; color: #FFAA00;" href="#">Tema
                                    undangan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style=" font-family: 'roboto'; color: #FFAA00;" href="#">Harga</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style=" font-family: 'roboto'; color: #FFAA00;"
                                    href="#">Kontak</a>
                            </li>
                        </ul>
                        <div class="gap-3">
                            <button class="btn btn-default btn-no-fill" style="color: #FFAA00">
                                Cek Pesanan
                            </button>
                            {{-- <button class="btn btn-fill text-white"><i class="fas fa-shopping-cart"></i></button> --}}
                            <button type="button" class="btn position-relative"
                                style="background-color: #FFAA00; color: white">
                                <i class="fas fa-shopping-cart"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    3
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </nav>

                <div>
                    <div class="mx-auto d-flex flex-lg-row flex-column hero">
                        <!-- Left Column -->
                        <div
                            class="left-column mt-3 d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                            {{-- <p class="text-caption">FREE 30 DAY TRIAL</p> --}}
                            <h4 class=""
                                style="font-size: 35px; font-weight: bold; font-family: 'roboto'; color: #FFAA00;">
                                Bagikan Momen<br class="d-lg-block d-none" />
                                Bahagiamu Tanpa Batas
                            </h4>
                            <br>
                            <p style="font-size: 18px; font-weight: reguler; font-family: 'roboto'; color: #FFAA00;">Solusi
                                kebutuhan pernikahan di era digital dengan mudah, cepat, berkualitas dan harga murah
                            </p>
                            <br>
                            <div
                                class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                                <button class="btn d-inline-flex mb-md-0 btn-try text-white shadow"
                                    style="background-color: #FFAA00;">
                                    Cek orderan
                                </button>
                                <button class="btn btn-transparent">
                                    <div class="d-flex align-items-center" style=" font-family: 'roboto'; color: #FFAA00;">

                                        Cara pesan
                                    </div>
                                </button>
                            </div>
                        </div>
                        <!-- Right Column -->
                        <div class=" right-column text-center d-flex justify-content-center pe-0">
                            <img id="img-fluid" class="h-auto mw-100 mb-5"
                                src="{{ asset(config('app.imgurl') . 'assets/Couple_hero.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <section id="tentang" class="h-100 w-100 bg-white" style="box-sizing: border-box;">

        <div class="content-3-1 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="d-flex flex-lg-row flex-column align-items-center">
                <!-- Left Column -->
                <div class="img-hero text-center justify-content-center d-flex">
                    <img id="hero" class="img-fluid" src="{{ asset(config('app.imgurl') . 'assets/logoqm.png') }}"
                        alt="" />
                </div>

                <!-- Right Column -->
                <div
                    class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                    <h2 class="title-text" style="color: #FFAA00;">Kenapa Harus Qumanten?</h2>
                    <ul class="p-0 m-0">
                        <li class="list-unstyled" style="margin-bottom: 2rem">

                            <p class="text-caption">
                                Qumanten adalah sebuah platform penyedia layanan kebutuhan pernikahan. Pembuatan
                                undangan digital dalam bentuk undangan website, undangan gambar, dan undangan video.
                            </p>
                        </li>
                        <li class="list-unstyled" style="margin-bottom: 2rem">

                            <p class="text-caption">
                                Kamu bisa memilih tema undangan pernikahan sesuai selera kamu, dan menyebarkan undangan
                                pernikahan digital dengan mudah dan cepat.
                            </p>
                        </li>

                    </ul>
                    <button class="btn btn-learn text-white" style="background-color: #FFAA00">Selengkapnya</button>
                </div>
            </div>
        </div>
    </section>
    <div class="layanan">
        <section class="h-100 w-100" style=" background-color: #FEF8EC">
            <div class="container" style="padding-top: 60px; padding-bottom: 100px">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-5 text-center pb-md-5">
                        <h1 class=""
                            style="font-size: 35px; font-weight: bold; font-family: 'roboto'; color: #FFAA00;">
                            Layanan
                        </h1>
                        <p class="lead">Layanan yang Kami Berikan</p>
                    </div>
                </div>

                <div class="row text-center justify-content-center mt-3">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <img alt="image" class="d-block mx-auto"
                            src="{{ asset(config('app.imgurl') . 'assets/VideoConference.png') }}">

                        <h3 class="mb-2 mt-3"><strong>Undangan Website</strong></h3>

                        <p>Undangan digital dalam bentuk website yang cepat dan modern</p>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 pt-4 pt-sm-0">
                        <img alt="image" class="d-block mx-auto"
                            src="{{ asset(config('app.imgurl') . 'assets/Picture.png') }}">

                        <h3 class="mb-2 mt-3"><strong>Undangan gambar</strong></h3>

                        <p>Undangan digital dalam bentuk gambar yang berkualitas</p>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3 pt-4 pt-lg-0">
                        <img alt="image" class="d-block mx-auto"
                            src="{{ asset(config('app.imgurl') . 'assets/Video.png') }}">

                        <h3 class="mb-2 mt-3"><strong>Undangan Video</strong></h3>

                        <p>Undangan digital dalam bentuk video yang berkualitas</p>
                    </div>


                </div>
            </div>
        </section>
    </div>

    <div class="filtur">
        <section class="h-100 w-100 bg-white">
            <div class="container" style="padding-top: 50px; padding-bottom: 90px">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-5 text-center pb-md-5">
                        <h1 class=""
                            style="font-size: 35px; font-weight: bold; font-family: 'roboto'; color: #FFAA00;">
                            Filtur Undangan Website yang Menarik
                        </h1>
                        <p class="lead">Fitur yang ada dalam undangan digital qumanten</p>
                    </div>
                </div>

                <div class="row text-center justify-content-center mt-3">
                    <div class="col-12 col-sm-3 col-lg-2">
                        <div class="box border-0 pb-3">
                            <img alt="image" class="d-block mx-auto"
                                src="{{ asset(config('app.imgurl') . 'assets/00_00.png') }}">
                            <h3 class="mb-2 mt-3" style="font-size: 13px; font-weight: bold; font-family: 'roboto';">
                                <strong>Countdown Acara</strong>
                            </h3>
                            <p style="font-size: 12px; font-weight: light; font-family: 'roboto';">Hitung mundur waktu acara
                                pernikahanmu</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2">
                        <div class="box border-0 pb-3">
                            <img alt="image" class="d-block mx-auto"
                                src="{{ asset(config('app.imgurl') . 'assets/Marker.png') }}">
                            <h3 class="mb-2 mt-3" style="font-size: 13px; font-weight: bold; font-family: 'roboto';">
                                <strong>Peta Lokasi</strong>
                            </h3>
                            <p style="font-size: 12px; font-weight: light; font-family: 'roboto';">Menampilkan map lokasi
                                acara pernikahanmu</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2">
                        <div class="box border-0 pb-3">
                            <img alt="image" class="d-block mx-auto"
                                src="{{ asset(config('app.imgurl') . 'assets/special.png') }}">
                            <h3 class="mb-2 mt-3" style="font-size: 13px; font-weight: bold; font-family: 'roboto';">
                                <strong>Special Invitation</strong>
                            </h3>
                            <p style="font-size: 12px; font-weight: light; font-family: 'roboto';">Tulis nama tamu yang kamu
                                undang secara UNLIMITED</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2">
                        <div class="box border-0 pb-3">
                            <img alt="image" class="d-block mx-auto"
                                src="{{ asset(config('app.imgurl') . 'assets/galleri.png') }}">
                            <h3 class="mb-2 mt-3" style="font-size: 13px; font-weight: bold; font-family: 'roboto';">
                                <strong>Galeri Foto</strong>
                            </h3>
                            <p style="font-size: 12px; font-weight: light; font-family: 'roboto';">Menampilkan foto kenangan
                                atau prewedding</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2">
                        <div class="box border-0 pb-3">
                            <img alt="image" class="d-block mx-auto"
                                src="{{ asset(config('app.imgurl') . 'assets/galerivideo.png') }}">
                            <h3 class="mb-2 mt-3" style="font-size: 13px; font-weight: bold; font-family: 'roboto';">
                                <strong>Galeri Video</strong>
                            </h3>
                            <p style="font-size: 12px; font-weight: light; font-family: 'roboto';">Menampilkan video
                                kenangan atau prewedding</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2">
                        <div class="box border-0 pb-3">
                            <img alt="image" class="d-block mx-auto"
                                src="{{ asset(config('app.imgurl') . 'assets/kolomucapan.png') }}">
                            <h3 class="mb-2 mt-3" style="font-size: 13px; font-weight: bold; font-family: 'roboto';">
                                <strong>Kolom Ucapan</strong>
                            </h3>
                            <p style="font-size: 12px; font-weight: light; font-family: 'roboto';">Kerabat dan keluarga
                                dapat memberikan ucapan selamat untuk pernikahanmu</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2">
                        <div class="box border-0 pb-3">
                            <img alt="image" class="d-block mx-auto"
                                src="{{ asset(config('app.imgurl') . 'assets/rsvp.png') }}">
                            <h3 class="mb-2 mt-3" style="font-size: 13px; font-weight: bold; font-family: 'roboto';">
                                <strong>RSVP</strong>
                            </h3>
                            <p style="font-size: 12px; font-weight: light; font-family: 'roboto';">Konfirmasi kehadiran
                                untuk para tamu undangan</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2">
                        <div class="box border-0 pb-3">
                            <img alt="image" class="d-block mx-auto"
                                src="{{ asset(config('app.imgurl') . 'assets/amplop.png') }}">
                            <h3 class="mb-2 mt-3" style="font-size: 13px; font-weight: bold; font-family: 'roboto';">
                                <strong>Amplop Digital</strong>
                            </h3>
                            <p style="font-size: 12px; font-weight: light; font-family: 'roboto';">Mudahkan tamu undanganmu
                                untuk memberikan amplop</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2">
                        <div class="box border-0 pb-3">
                            <img alt="image" class="d-block mx-auto"
                                src="{{ asset(config('app.imgurl') . 'assets/lovetimeline.png') }}">
                            <h3 class="mb-2 mt-3" style="font-size: 13px; font-weight: bold; font-family: 'roboto';">
                                <strong>Love Timeline</strong>
                            </h3>
                            <p style="font-size: 12px; font-weight: light; font-family: 'roboto';">Bagikan kisah perjalanan
                                cintamu.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2">
                        <div class="box border-0 pb-3">
                            <img alt="image" class="d-block mx-auto"
                                src="{{ asset(config('app.imgurl') . 'assets/autoplay.png') }}">
                            <h3 class="mb-2 mt-3" style="font-size: 13px; font-weight: bold; font-family: 'roboto';">
                                <strong>Autoplay Music</strong>
                            </h3>
                            <p style="font-size: 12px; font-weight: light; font-family: 'roboto';">Putar lagu yang mewakili
                                kisah cinta kalian.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <div class="tema">
        <section class="h-100 w-100" style=" background-color: #FEF8EC">
            <div class="container" style="padding-top: 50px; padding-bottom: 80px">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-5 text-center pb-md-5">
                        <h1 class=""
                            style="font-size: 35px; font-weight: bold; font-family: 'roboto'; color: #FFAA00;">
                            Toko Tema Undangan
                        </h1>
                        <p class="lead">Banyak Tema yang Bisa dipilih</p>
                    </div>
                </div>
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active text-black" aria-current="page" href="#">Untuk Pernikahan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Untuk Ulang Tahun</a>
                    </li>
                </ul>
                <br>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active btn btn-warning rounded-pill text-white m-2 shadow-sm"
                            aria-current="page" href="#">Website</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-warning rounded-pill text-black m-2" href="#">Gambar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-warning rounded-pill text-black m-2" href="#">Video</a>
                    </li>
                </ul>
                <br>
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset(config('app.imgurl') . 'assets/Rectangle.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <span class="badge mb-2 bg-secondary">Basic</span>
                                <h5 class="card-title text-bold">Website 1</h5>
                                <h4 style="color: #FFAA00; font-size: 30; font-weight: bold">Rp20.000</h4>
                                <br>
                                <a href="#" class="btn btn-warning mb-1 text-white">Lihat</a>
                                <a href="#" class="btn btn-warning mb-1"><i class="fas fa-cart-plus text-white"></i></a>
                                <a href="#" class="btn btn-warning mb-1 text-white">Beli langsung</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset(config('app.imgurl') . 'assets/Rectangle.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <span class="badge mb-2 bg-warning">Premium</span>
                                <h5 class="card-title">Card title</h5>
                                <h4>Rp20.000</h4>
                                <br>
                                <a href="#" class="btn btn-warning mb-1 text-white">Lihat</a>
                                <a href="#" class="btn btn-warning mb-1"><i class="fas fa-cart-plus text-white"></i></a>
                                <a href="#" class="btn btn-warning mb-1 text-white">Beli langsung</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset(config('app.imgurl') . 'assets/Rectangle.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <span class="badge mb-2 bg-secondary">Basic</span>
                                <h5 class="card-title">Card title</h5>
                                <h4>Rp20.000</h4>
                                <br>
                                <a href="#" class="btn btn-warning mb-1 text-white">Lihat</a>
                                <a href="#" class="btn btn-warning mb-1"><i class="fas fa-cart-plus text-white"></i></a>
                                <a href="#" class="btn btn-warning mb-1 text-white">Beli langsung</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset(config('app.imgurl') . 'assets/Rectangle.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <span class="badge mb-2 bg-secondary">Basic</span>
                                <h5 class="card-title">Card title</h5>
                                <h4>Rp20.000</h4>
                                <br>
                                <a href="#" class="btn btn-warning mb-1 text-white">Lihat</a>
                                <a href="#" class="btn btn-warning mb-1"><i class="fas fa-cart-plus text-white"></i></a>
                                <a href="#" class="btn btn-warning mb-1 text-white">Beli langsung</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="harga">
        <section class="h-100 w-100" style="box-sizing: border-box; background-color: #FEF8EC">
            <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative"
                style="font-family: 'Poppins', sans-serif">
                <div class="container mx-auto">
                    <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
                        <h2 class="title-text">Harga Terbaik Untuk Anda</h2>
                        <p class="caption-text mx-auto">
                            Harga yang murah <br />
                            untuk semua kebutuhan Anda
                        </p>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="mx-auto card-item position-relative">
                            <div
                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                                <h2 class="price-title">Mulai dari</h2>
                                <h2 class="price-value d-flex align-items-center">
                                    <span>Rp10.000</span>
                                    <span class="price-duration"></span>
                                </h2>
                                <p class="price-caption">
                                    Pilihan tema yang <br />
                                    diinginkan
                                </p>
                                <div class="price-list">
                                    <p class="d-flex align-items-center check">
                                        <span
                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                            <img class="img-fluid"
                                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                                                alt="" /> </span>Semua filtur sesuai Tema undangan yang dipilih
                                    </p>
                                    <p class="d-flex align-items-center check">
                                        <span
                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                            <img class="img-fluid"
                                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                                                alt="" /> </span>Masa aktif 2 Hari
                                    </p>

                                </div>
                                <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                                    Cari Tema
                                </button>
                            </div>
                        </div>
                        <div class="mx-auto card-item position-relative">
                            <div class="card-item-outline d-flex flex-column position-relative overflow-hidden h-100"
                                style="background-color: #FFAA00">
                                <h2 class="price-title text-white">Custom</h2>
                                <h2 class="price-value d-flex align-items-center text-white">
                                    <span>Dengan harga pilihan</span>
                                    <span class="price-duration" style="color: #FFFFFF"></span>
                                </h2>
                                <p class="price-caption" style="color: #FFFFFF">
                                    Pilih berbagai<br />
                                    layanan yang diinginkan
                                </p>
                                <div class="price-list">
                                    <p class="d-flex align-items-center check text-white">
                                        <span
                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                            <img class="img-fluid"
                                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                                                alt="" /> </span>Semua filtur sesuai Tema undangan yang dipilih
                                    </p>
                                    <p class="d-flex align-items-center check text-white">
                                        <span
                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                            <img class="img-fluid"
                                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                                                alt="" /> </span>Free revisi tanggal dan lokasi acara
                                    </p>
                                    <p class="d-flex align-items-center check text-white">
                                        <span
                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                            <img class="img-fluid"
                                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                                                alt="" /> </span>Free revisi minor & mayor (teks, foto,map, dll)
                                    </p>
                                    <p class="d-flex align-items-center check text-white">
                                        <span
                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                            <img class="img-fluid"
                                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-6.png"
                                                alt="" /> </span>Pilihan Masa aktif (3,6,12)
                                    </p>

                                </div>
                                <button
                                    class="btn btn-fill text-white d-flex justify-content-center align-items-center w-100">
                                    Cari Tema
                                </button>
                            </div>
                        </div>
                        <div class="mx-auto card-item position-relative">
                            <div
                                class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                                <h2 class="price-title">Reseller</h2>
                                <h2 class="price-value d-flex align-items-center">
                                    <span>Gratis</span>
                                    <span class="price-duration"></span>
                                </h2>
                                <p class="price-caption">
                                    Cocok untuk anda yang <br />
                                    ingin menghasilkan uang
                                </p>
                                <div class="price-list">
                                    <p class="d-flex align-items-center check">
                                        <span
                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                            <img class="img-fluid"
                                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                                                alt="" /> </span>Mendapat Website merek sendiri
                                    </p>
                                    <p class="d-flex align-items-center check">
                                        <span
                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                            <img class="img-fluid"
                                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                                                alt="" /> </span>Tentukan sendiri keuntungan
                                    </p>
                                    <p class="d-flex align-items-center check">
                                        <span
                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                            <img class="img-fluid"
                                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                                                alt="" /> </span>Project kami buatkan
                                    </p>
                                    <p class="d-flex align-items-center check">
                                        <span
                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                            <img class="img-fluid"
                                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                                                alt="" /> </span>Terima beres
                                    </p>
                                    <p class="d-flex align-items-center check">
                                        <span
                                            class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                            <img class="img-fluid"
                                                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-4.png"
                                                alt="" /> </span>Menu dashboard Reseller
                                    </p>
                                </div>
                                <button class="btn btn-outline d-flex justify-content-center align-items-center w-100">
                                    Daftar
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="testi">
        <section class="h-100 w-100" style="box-sizing: border-box; background-color: white">
            <div class="container" style="padding-top: 50px; padding-bottom: 80px">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-5 text-center pb-md-5">
                        <h1 class=""
                            style="font-size: 35px; font-weight: bold; font-family: 'roboto'; color: #FFAA00;">
                            Testimonial
                        </h1>
                        <p class="lead">Apa kata mereka</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-5 text-center pb-md-5">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="container  p-4 d-flex justify-content-center align-items-center">
                                        <div class="
                                        card border-0"
                                            style="width: 18rem;">
                                            <img src="{{ asset(config('app.imgurl') . 'assets/avatars/avataaars1.png') }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><b>Dedi</b></h5>
                                                <p class="card-text">"Uandangannya keren dan cepat."</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="container  p-4 d-flex justify-content-center align-items-center">
                                        <div class="
                                        card border-0"
                                            style="width: 18rem;">
                                            <img src="{{ asset(config('app.imgurl') . 'assets/avatars/avataaars2.png') }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><b>Chen</b></h5>
                                                <p class="card-text">Mantapppp</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container  p-4 d-flex justify-content-center align-items-center">
                                        <div class="
                                        card border-0"
                                            style="width: 18rem;">
                                            <img src="{{ asset(config('app.imgurl') . 'assets/avatars/avataaars3.png') }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><b>Natan</b></h5>
                                                <p class="card-text">Cepat pembuatannya</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="footer">
        <section class="h-100 w-100" style="box-sizing: border-box; background-color: #FEF8EC;">
            <div class="footer-2-1 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
                <div class="list-footer">
                    <div class="row gap-md-0 gap-3">
                        <div class="col-lg-3 col-md-6">
                            <div class="">
                                <div class="list-space">
                                    <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-2.png"
                                        alt="" />
                                </div>
                                <nav class="list-unstyled">
                                    <li class="list-space">
                                        <a href="" class="list-menu">Beranda</a>
                                    </li>
                                    <li class="list-space">
                                        <a href="" class="list-menu">Layanan</a>
                                    </li>
                                    <li class="list-space">
                                        <a href="" class="list-menu">Filtur</a>
                                    </li>
                                    <li class="list-space">
                                        <a href="" class="list-menu">Toko Tema</a>
                                    </li>
                                    <li class="list-space">
                                        <a href="" class="list-menu">Harga</a>
                                    </li>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h2 class="footer-text-title">Layanan</h2>
                            <nav class="list-unstyled">
                                <li class="list-space">
                                    <a href="" class="list-menu">Undangan Website</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Undangan Gambar</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Undangan Video</a>
                                </li>

                            </nav>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h2 class="footer-text-title">Perusahaan</h2>
                            <nav class="list-unstyled">
                                <li class="list-space">
                                    <a href="" class="list-menu">Tentang Kami</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Kontak Kami</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Karir</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Reseller</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Komunitas</a>
                                </li>
                            </nav>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h2 class="footer-text-title">Support</h2>
                            <nav class="list-unstyled">
                                <li class="list-space">
                                    <a href="" class="list-menu">Pertanyaan</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Cara Memesan</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Cara melacak orderan</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Pusat Bantuan</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Metode Pembayaran</a>
                                </li>


                            </nav>
                        </div>
                    </div>
                </div>

                <div class="border-color info-footer">
                    <div class="">
                        <hr class="hr" />
                    </div>
                    <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
                        <div class="d-flex title-font font-medium align-items-center gap-4">
                            <a href="">
                                <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667V9.65667Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>

                            <a href="">
                                <svg class="social-media-p" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z"
                                        fill="#C7C7C7" />
                                    <path
                                        d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039V9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z"
                                        fill="#C7C7C7" />
                                    <path
                                        d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511V18.5511Z"
                                        fill="#C7C7C7" />
                                </svg>
                            </a>

                        </div>
                        <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center gap-4">
                            <a href="" class="footer-link" style="text-decoration: none">Terms of Service</a>
                            <span>|</span>
                            <a href="" class="footer-link" style="text-decoration: none">Privacy Policy</a>
                            <span>|</span>
                            <a href="" class="footer-link" style="text-decoration: none">Licenses</a>
                        </nav>
                        <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
                            <p style="margin: 0">Copyright © 2021 Qumanten</p>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('style')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");


        .header-2-1 .modal-item.modal {
            top: 2rem;
        }

        .header-2-1 .navbar,
        .header-2-1 .hero {
            padding: 3rem 2rem;
        }

        .header-2-1 .navbar-light .navbar-nav .nav-link {
            font: 300 18px/1.5rem Poppins, sans-serif;
            color: #1d1e3c;
            transition: 0.3s;
        }

        .header-2-1 .navbar-light .navbar-nav .nav-link:hover {
            font: 600 18px/1.5rem Poppins, sans-serif;
            color: #1d1e3c;
            transition: 0.3s;
        }

        .header-2-1 .navbar-light .navbar-nav .active>.nav-link,
        .header-2-1 .navbar-light .navbar-nav .nav-link.active,
        .header-2-1 .navbar-light .navbar-nav .nav-link.show,
        .header-2-1 .navbar-light .navbar-nav .show>.nav-link {
            font-weight: 600;
            transition: 0.3s;
        }

        .header-2-1 .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .header-2-1 .btn:focus,
        .header-2-1 .btn:active {
            outline: none !important;
        }

        .header-2-1 .btn-fill {
            font: 600 18px/normal Poppins, sans-serif;
            background-color: #ff7c57;
            border-radius: 12px;
            padding: 12px 32px;
            transition: 0.3s;
        }

        .header-2-1 .btn-fill:hover {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            transition: 0.3s;
        }

        .header-2-1 .btn-no-fill {
            font: 300 18px/1.75rem Poppins, sans-serif;
            color: #1d1e3c;
            padding: 12px 32px;
            transition: 0.3s;
        }

        .header-2-1 .modal-item .modal-dialog .modal-content {
            border-radius: 8px;
        }

        .header-2-1 .responsive li a {
            padding: 1rem;
        }

        .header-2-1 .text-caption {
            font: 600 0.875rem/1.625 Poppins, sans-serif;
            margin-bottom: 2rem;
            color: #ff7c57;
        }

        .header-2-1 .left-column {
            margin-bottom: 2.75rem;
            width: 100%;
        }

        .header-2-1 .right-column {
            width: 100%;
        }

        .header-2-1 .title-text-big {
            font: 600 2.25rem/2.5rem Poppins, sans-serif;
            margin-bottom: 2rem;
            color: #272e35;
        }

        .header-2-1 .btn-try {
            font: 600 1rem/1.5rem Poppins, sans-serif;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
            background-color: #ff7c57;
            transition: 0.3s;
        }

        .header-2-1 .btn-try:hover {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            transition: 0.3s;
        }

        .header-2-1 .btn-outline {
            font: 400 1rem/1.5rem Poppins, sans-serif;
            border: 1px solid #555b61;
            color: #555b61;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
            background-color: transparent;
            transition: 0.3s;
        }

        .header-2-1 .btn-outline:hover {
            border: 1px solid #ff7c57;
            color: #ff7c57;
            transition: 0.3s;
        }

        .header-2-1 .btn-outline:hover div path {
            fill: #ff7c57;
            transition: 0.3s;
        }

        @media (min-width: 576px) {
            .header-2-1 .modal-item .modal-dialog {
                max-width: 95%;
                border-radius: 12px;
            }

            .header-2-1 .navbar {
                padding: 3rem 2rem;
            }

            .header-2-1 .hero {
                padding: 3rem 2rem 5rem;
            }

            .header-2-1 .title-text-big {
                font-size: 3rem;
                line-height: 1.2;
            }
        }

        @media (min-width: 768px) {
            .header-2-1 .navbar {
                padding: 3rem 4rem;
            }

            .header-2-1 .hero {
                padding: 3rem 4rem 5rem;
            }

            .header-2-1 .left-column {
                margin-bottom: 3rem;
            }
        }

        @media (min-width: 992px) {
            .header-2-1 .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 1.25rem;
                padding-left: 1.25rem;
            }

            .header-2-1 .navbar {
                padding: 3rem 6rem;
            }

            .header-2-1 .hero {
                padding: 3rem 6rem 5rem;
            }

            .header-2-1 .left-column {
                width: 50%;
                margin-bottom: 0;
            }

            .header-2-1 .right-column {
                width: 50%;
            }

            .header-2-1 .title-text-big {
                font-size: 3.75rem;
                line-height: 1.2;
            }

        }

    </style>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .content-3-1 .btn:focus,
        .content-3-1 .btn:active {
            outline: none !important;
        }

        .content-3-1 {
            padding: 5rem 2rem;
        }

        .content-3-1 .img-hero {
            width: 100%;
            margin-bottom: 3rem;
        }

        .content-3-1 .right-column {
            width: 100%;
        }

        .content-3-1 .title-text {
            font: 600 1.875rem/2.25rem Poppins, sans-serif;
            margin-bottom: 2.5rem;
            letter-spacing: -0.025em;
            color: #121212;
        }

        .content-3-1 .title-caption {
            font: 500 1.5rem/2rem Poppins, sans-serif;
            margin-bottom: 1.25rem;
            color: #121212;
        }

        .content-3-1 .circle {
            font: 500 1.25rem/1.75rem Poppins, sans-serif;
            height: 3rem;
            width: 3rem;
            margin-bottom: 1.25rem;
            border-radius: 9999px;
            background-color: #ffbf56;
        }

        .content-3-1 .text-caption {
            font: 400 1rem/1.75rem Poppins, sans-serif;
            letter-spacing: 0.025em;
            color: #565656;
        }

        .content-3-1 .btn-learn {
            font: 600 1rem/1.5rem Poppins, sans-serif;
            padding: 1rem 2.5rem;
            background-color: #ff7c57;
            transition: 0.3s;
            letter-spacing: 0.025em;
            border-radius: 0.75rem;
        }

        .content-3-1 .btn-learn:hover {
            background-color: #ff9779;
            transition: 0.3s;
        }

        @media (min-width: 768px) {
            .content-3-1 .title-text {
                font: 600 2.25rem/2.5rem Poppins, sans-serif;
            }
        }

        @media (min-width: 992px) {
            .content-3-1 .img-hero {
                width: 50%;
                margin-bottom: 0;
            }

            .content-3-1 .right-column {
                width: 50%;
            }

            .content-3-1 .circle {
                margin-right: 1.25rem;
                margin-bottom: 0;
            }
        }

    </style>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .content-3-1 .btn:focus,
        .content-3-1 .btn:active {
            outline: none !important;
        }

        .content-3-1 {
            padding: 5rem 2rem;
        }

        .content-3-1 .img-hero {
            width: 100%;
            margin-bottom: 3rem;
        }

        .content-3-1 .right-column {
            width: 100%;
        }

        .content-3-1 .title-text {
            font: 600 1.875rem/2.25rem Poppins, sans-serif;
            margin-bottom: 2.5rem;
            letter-spacing: -0.025em;
            color: #121212;
        }

        .content-3-1 .title-caption {
            font: 500 1.5rem/2rem Poppins, sans-serif;
            margin-bottom: 1.25rem;
            color: #121212;
        }

        .content-3-1 .circle {
            font: 500 1.25rem/1.75rem Poppins, sans-serif;
            height: 3rem;
            width: 3rem;
            margin-bottom: 1.25rem;
            border-radius: 9999px;
            background-color: #ffbf56;
        }

        .content-3-1 .text-caption {
            font: 400 1rem/1.75rem Poppins, sans-serif;
            letter-spacing: 0.025em;
            color: #565656;
        }

        .content-3-1 .btn-learn {
            font: 600 1rem/1.5rem Poppins, sans-serif;
            padding: 1rem 2.5rem;
            background-color: #ff7c57;
            transition: 0.3s;
            letter-spacing: 0.025em;
            border-radius: 0.75rem;
        }

        .content-3-1 .btn-learn:hover {
            background-color: #ff9779;
            transition: 0.3s;
        }

        @media (min-width: 768px) {
            .content-3-1 .title-text {
                font: 600 2.25rem/2.5rem Poppins, sans-serif;
            }
        }

        @media (min-width: 992px) {
            .content-3-1 .img-hero {
                width: 50%;
                margin-bottom: 0;
            }

            .content-3-1 .right-column {
                width: 50%;
            }

            .content-3-1 .circle {
                margin-right: 1.25rem;
                margin-bottom: 0;
            }
        }

    </style>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .content-3-7 .btn:focus,
        .content-3-7 .btn:active {
            outline: none !important;
        }

        .content-3-7 {
            padding: 5rem 2rem 7rem;
        }

        .content-3-7 .title-text {
            font: 800 1.875rem/2.25rem Poppins, sans-serif;
            letter-spacing: 0.05em;
            margin-bottom: 0.75rem;
            color: #2e3a53;
        }

        .content-3-7 .caption-text {
            font: 400 1rem/1.5rem Poppins, sans-serif;
            letter-spacing: 0.025em;
            color: #8e8fad;
            margin-bottom: 0;
        }

        .content-3-7 .card-item {
            transition: 0.4s;
            top: 0px;
            left: 0px;
            padding: 1rem 0;
        }

        .content-3-7 .card-item:hover {
            top: -3px;
            left: -3px;
            transition: 0.4s;
        }

        .content-3-7 .card-item-outline {
            border: 1px solid #e5ebf9;
            padding: 2rem 2.75rem;
            border-radius: 1rem;
        }

        .content-3-7 .price-title {
            font: 500 1.25rem/1.75rem Poppins, sans-serif;
            color: #141c2e;
            letter-spacing: 0.025em;
            margin-bottom: 0.75rem;
        }

        .content-3-7 .price-value {
            font: 500 2.25rem/2.5rem Poppins, sans-serif;
            letter-spacing: 0.025em;
            margin-bottom: 0.75rem;
            color: #2e3a53;
        }

        .content-3-7 .price-duration {
            font: 400 1rem/1.5rem Poppins, sans-serif;
            margin: 0.625rem;
            color: #9e9e9e;
        }

        .content-3-7 .price-caption {
            font: 400 1rem/1.5rem Poppins, sans-serif;
            letter-spacing: 0.025em;
            margin-bottom: 2.5rem;
            color: #c3c3c8;
        }

        .content-3-7 .price-list .check {
            font: 400 0.875rem/1.25rem Poppins, sans-serif;
            color: #2e3a53;
            letter-spacing: 0.025em;
            margin-bottom: 1.75rem;
        }

        .content-3-7 .price-list .no-check {
            font: 400 0.875rem/1.25rem Poppins, sans-serif;
            color: #e1e1e1;
            letter-spacing: 0.025em;
            margin-bottom: 1.75rem;
        }

        .content-3-7 .span-icon {
            width: 1rem;
            height: 1rem;
            margin-right: 0.75rem;
        }

        .content-3-7 .btn-outline {
            border: 1px solid #2ec49c;
            color: #2ec49c;
            padding-top: 1rem;
            padding-bottom: 1rem;
            font-weight: 500;
            letter-spacing: 0.025em;
            border-radius: 0.5rem;
        }

        .content-3-7 .btn-outline:hover {
            background-color: #2ec49c;
            color: #ffffff;
        }

        .content-3-7 .btn-fill {
            background-image: linear-gradient(rgba(91, 203, 173, 1),
                    rgba(39, 194, 153, 1));
            padding-top: 1rem;
            padding-bottom: 1rem;
            font-weight: 500;
            letter-spacing: 0.025em;
            border-radius: 0.5rem;
        }

        .content-3-7 .btn-fill:hover {
            background-image: linear-gradient(#29b18d, #29b18d);
        }

        @media (min-width: 576px) {
            .content-3-7 .title-text {
                font: 800 2.25rem/2.5rem Poppins, sans-serif;
            }

            .content-3-7 .card-item {
                padding: 1rem;
            }
        }

        @media (min-width: 768px) {
            .content-3-7 {
                padding-left: 3.5rem;
                padding-right: 3.5rem;
            }
        }

        @media (min-width: 992px) {
            .content-3-7 .caption-text {
                width: 66.666667%;
            }

            .content-3-7 .card-item {
                width: 33.333333%;
            }
        }

        @media (min-width: 1200px) {
            .content-3-7 {
                padding-left: 9rem;
                padding-right: 9rem;
            }
        }

    </style>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .footer-2-1 .list-space {
            margin-bottom: 1.25rem;
        }

        .footer-2-1 .footer-text-title {
            font: 600 1.5rem Poppins, sans-serif;
            margin-bottom: 1.5rem;
        }

        .footer-2-1 .list-menu {
            color: #c7c7c7;
            text-decoration: none !important;
        }

        .footer-2-1 .list-menu:hover {
            color: #555252;
        }

        .footer-2-1 hr.hr {
            margin: 0;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .footer-2-1 .border-color {
            color: #c7c7c7;
        }

        .footer-2-1 .footer-link {
            color: #c7c7c7;
        }

        .footer-2-1 .footer-link:hover {
            color: #555252;
        }

        .footer-2-1 .social-media-c:hover circle,
        .footer-2-1 .social-media-p:hover path {
            fill: #555252;
        }

        .footer-2-1 .footer-info-space {
            padding-top: 3rem;
        }

        .footer-2-1 .list-footer {
            padding: 5rem 1rem 3rem 1rem;
        }

        .footer-2-1 .info-footer {
            padding: 0 1rem 3rem;
        }

        @media (min-width: 576px) {
            .footer-2-1 .list-footer {
                padding: 5rem 2rem 3rem 2rem;
            }

            .footer-2-1 .info-footer {
                padding: 0 2rem 3rem;
            }
        }

        @media (min-width: 768px) {
            .footer-2-1 .list-footer {
                padding: 5rem 4rem 6rem 4rem;
            }

            .footer-2-1 .info-footer {
                padding: 0 4rem 3rem;
            }
        }

        @media (min-width: 992px) {
            .footer-2-1 .list-footer {
                padding: 5rem 6rem 6rem 6rem;
            }

            .footer-2-1 .info-footer {
                padding: 0 6rem 3rem;
            }
        }

    </style>




@endpush
