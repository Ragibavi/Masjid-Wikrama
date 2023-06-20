<?php
$persentase = $nominal / 40000000 * 100;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masjid Wikrama</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <style>
        .navbar.navbar-scroll {
            transition: box-shadow 0.3s;
        }

        .navbar.navbar-scroll.shadow {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .foto1 {
            filter: brightness(50%);
        }

        .progress_container {
            max-width: 1140px;
            width: calc(100% - 2rem);
            padding: 0 1rem;
            margin: 0 auto;
        }

        .progress {
            height: 100vh;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
            justify-content: center;
        }

        .progress_item {
            padding: 0.5rem 0;
        }

        .progress_bar {
            position: relative;
            width: 65rem;
            height: 8px;
            border-radius: 2rem;
            background: rgb(222, 222, 222);
        }

        @media (max-width: 1500px) {
            .progress_bar {
                width: 50rem;
            }
        }

        @media (max-width: 1200px) {
            .progress_bar {
                width: 40rem;
            }
        }

        @media (max-width: 1000px) {
            .progress_bar {
                width: 35rem;
            }
        }

        @media (max-width: 900px) {
            .progress_bar {
                width: 30rem;
            }
        }

        @media (max-width: 600px) {
            .progress_bar {
                width: 20rem;
            }
        }

        @media (max-width: 400px) {
            .progress_bar {
                width: 15rem;
            }
        }

        .bar {
            border-radius: inherit;
            background: #1F3984;
            position: absolute;
            transition: width 1.5s cubic-bezier(0.1, 0.42, 0.85, 1);
            width: 0;
            height: 100%;
            left: 0;
        }

        .bar::after {
            content: attr(data-text);
            position: absolute;
            right: 0;
            top: -3rem;
            width: 4rem;
            height: 2rem;
            line-height: 2rem;
            color: #fff;
            border-radius: 0.1rem;
            animation: text 0.6s ease-in-out;
            font-weight: bold;
        }

        .bar::before {
            content: ' ';
            position: absolute;
            right: 1rem;
            top: -1.2rem;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid transparent;
            animation: text 0.6s ease-in-out;
        }

        @keyframes text {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .card {
            border-radius: 15px;
        }

        .span {
            color: #1F3984;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }

        .footer ul {
            list-style: none;
            padding-left: 0;
        }

        .footer ul li {
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: #333;
            text-decoration: none;
        }

        .footer .form-control {
            border-radius: 0;
        }

        .list-unstyled d-flex .li {
            border-radius: 10px;
            ;
        }

        .right-card {
            margin-left: auto;
        }

        .my-hover:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <div class="">
        <div class="container-fluid">
            <div class="">
                <nav class="navbar navbar-expand-lg bg-white mb-3 fixed-top navbar-light">
                    <div class="container">
                        <img src="{{ asset('img/image/wikrama.png')}}" class="img-thumbnail rounded-circle me-3" alt="...">
                        <a class="navbar-brand fw-bolder fs-6" href="#">SMK WIKRAMA<br>BOGOR</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link active me-4" aria-current="page" href="#">Beranda</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link" href="#cara">Cara wakaf</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link" href="#data">Data wakaf</a>
                                </li>
                                <li class="nav-item me-4">
                                    <a class="nav-link" href="#galeri">Gallery</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="https://smkwikrama.sch.id/">Web Wikrama</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('donatur.showTable')}}">Isi Tabel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>

        </div>
        <section>
            <div class="container-fluid">
                <div class="container" style="margin-top: 150px;">
                    <div class="row fs-5">
                        <div class="col-md-6">
                            <p class="lead mt-3 fs-6">Masjid Besar SMK WIKRAMA BOGOR</p>
                            <h1 class="">Mari <span style="color : #1F3984">Tingkatkan Keimanan Masyarakat</span> SMK WIKRAMA BOGOR</h1>
                            <button type="button" class="btn mt-3 text-light" style="background-color:  #1F3984;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Beri bantuan shodaqoh
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="fw-bolder fs-5">Isilah <span style="color : #1F3984" class="">Form </span>Berikut </div>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="">
                                                <div class="container-fluid pt-3 pb-5 ps-5 pe-5">
                                                    <div class="row">
                                                        <div class="card-body">
                                                            <form class="mt-4">
                                                                <div class="mb-3">
                                                                    <label for="nama" class="form-label fw-bolder">Nama</label>
                                                                    <input type="text" class="form-control" id="nama" placeholder="masukan nama">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="donasi" class="form-label fw-bolder">Jumlah Donasi</label>
                                                                    <input type="number" class="form-control" id="donasi" placeholder="jumlah donasi">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="transfer" class="form-label fw-bolder">Bukti Transfer</label>
                                                                    <input type="file" class="form-control" id="transfer" placeholder="Bukti transfer">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button class="btn text-light" style="background-color : #1F3984" type="button">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-end">
                            <img src="{{ asset('img/image/dashboard1.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid mt-5">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="container justify-content-center">
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <p class="lead">Total target dana</p>
                                        <h2 class="fw-bolder">Rp. <?= format(40000000); ?> </h2>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="lead">Total dana terkumpul</p>
                                        <h2 class="fw-bolder">Rp. <?php 
                                            function format($nilai)
                                            {
                                                $nominals = number_format($nilai,2,',','.');
                                                return $nominals;
                                            }
                                            
                                            echo format($nominal);
                                        ?></h2>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="lead">Total terdaftar</p>
                                        <h2 class="fw-bolder">{{ $count }}</h2>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="progress_item">
                                            <div class="progress_bar">
                                                <div class="bar" data-value="<?= $persentase ?>"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-end">
                                        <h1><?= $persentase ?> %</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-light" colspan="2" style="background-color:#1F3984 ;">
                            <?php
                            echo "<marquee>";
                            foreach ($donatur as $data) {
                                echo $data->name . " - Rp." . format($data->nominal);
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                            }
                            echo "</marquee>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="container mt-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="foto1">
                                    <img src="{{ asset('img/slide_1.svg')}}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="foto1">
                                    <img src="{{ asset('img/slide_2.svg')}}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="foto1">
                                    <img src="{{ asset('img/slide_3.svg')}}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col justify-content-start mt-5">
                            <div class="jumbotron ms-3">
                                <h1 class="fs-1 fw-bolder"><span style="color : #1F3984">Manfaat</span>, Wakaf, Infaq <br>Shodaqoh</h1>
                                <p class="lead mt-3 fs-5">Berikut adalah beberapa manfaat Wakaf, Infaq Shodaqoh <br> yang akan kamu dapatkan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="container mt-4" style="margin-bottom: 20px;">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-4 shadow my-hover" style="height: 370px;">
                                        <div class="card-body ">
                                            <img src="{{ asset('img/image/Vector.png')}}" alt="" class="card-title mt-3">
                                            <h2 class="card-title" style="margin-top: 40px;">Menjadikan hati <br> lebih tenang</h2>
                                            <p class="card-text mt-3">Kami memberikan harga yang terbaik dibandingkan dengan Kompetitor kami</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-4 shadow my-hover" style="height: 370px;">
                                        <div class="card-body">
                                            <img src="{{ asset('img/image/ceklis.png')}}" alt="" class="card-title mt-3">
                                            <h2 class="card-title" style="margin-top: 40px;">Terbukanya pintu <br> rezeki</h2>
                                            <p class="card-text mt-3">Allah SWT akan membuka pintu rezeki dari arah yang tidak dikira sebelumnya.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-4 shadow my-hover" style="height: 370px;">
                                        <div class="card-body">
                                            <img src="{{ asset('img/image/bintang.png')}}" alt="" class="card-title mt-3">
                                            <h2 class="card-title" style="margin-top: 40px;">Menjauhkan dari <br> bahaya</h2>
                                            <p class="card-text mt-3">Rasulullah SAW pernah bersabda: “Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-4 shadow my-hover" style="height: 370px;">
                                        <div class="card-body">
                                            <img src="{{ asset('img/image/Subtract.png')}}" alt="" class="card-title mt-3">
                                            <h2 class="card-title" style="margin-top: 40px;">Pahala yang tak <br>terputus</h2>
                                            <p class="card-text mt-3">Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api neraka.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="">
                                <div class="card-body">
                                    <img src="{{ asset('img/image/gambarsedekah.png')}}" alt="" style="height: 767px; width: 462px" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="cara">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col justify-content-start mt-5">
                            <div class="jumbotron ms-3">
                                <h1 class="fs-1 fw-bolder"><span style="color : #1F3984">Cara Melakukan</span>, Wakaf, Infaq <br>Shodaqoh.</h1>
                                <p class="lead mt-3 fs-5">Berikut adalah Cara melakukan wakaf, infaq shodaqoh untuk membantu pembangunan <br> masjid besar SMK Wikrama Bogor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mt-4 shadow my-hover">
                                <div class="card-body">
                                    <h3 class="card-title fw-bolder"><span style="color : #1F3984">01</span></h3>
                                    <h5 class="card-title fw-bolder">Isi Form Pendaftaran</h5>
                                    <p class="card-text">Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mt-4 shadow my-hover">
                                <div class="card-body">
                                    <h3 class="card-title fw-bolder"><span style="color : #1F3984">02</span></h3>
                                    <h5 class="card-title fw-bolder">Isikan nominal shodaqoh</h5>
                                    <p class="card-text">Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mt-4 shadow my-hover">
                                <div class="card-body">
                                    <h3 class="card-title fw-bolder"><span style="color : #1F3984">03</span></h3>
                                    <h5 class="card-title fw-bolder">upload bukti pembayaran</h5>
                                    <p class="card-text">Pilih motode pembayaran dan upload bukti <br> pembayaranya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mt-4 shadow my-hover">
                                <div class="card-body">
                                    <h3 class="card-title fw-bolder"><span style="color : #1F3984">04</span></h3>
                                    <h5 class="card-title fw-bolder">Verifikasi Pembayaran</h5>
                                    <p class="card-text">Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="data">
            <div class="container-fluid">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col justify-content-start mt-5">
                            <div class="jumbotron ms-3">
                                <h1 class="fs-1 fw-bolder"><span style="color : #1F3984">Data Donatur</span>, Wakaf, Infaq <br>Shodaqoh.</h1>
                                <p class="lead mt-3 fs-5">Berikut adalah data donatur wakaf, infaq shodaqoh untuk <br> masjid besar SMK Wikrama Bogor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col">
                            <table class="table justify-content-center text-center">
                                <thead style="color:#EAECF0 ;">
                                    <tr>
                                        <th scope="col">Nama Donatur</th>
                                        <th scope="col">Donatur Id</th>
                                        <th scope="col">Paket</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Nominal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($donatur as $data)
                                    <tr>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->donatur_id }}</td>
                                        <td>{{ $data->packet }}</td>
                                        <td>{{ $data->category }}</td>
                                        <td>Rp.{{format($data->nominal)}}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="galeri">
            <div class="container-fluid">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col justify-content-start mt-5">
                            <div class="jumbotron ms-3">
                                <h1 class="fs-1 fw-bolder"><span style="color : #1F3984">Gallery</span> Masjid Besar SMK <br>Wikrama Bogor</h1>
                                <p class="lead mt-3 fs-5">Berikut adalah gallery masjid besar SMK Wikrama Bogor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="container mt-4 mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 my-hover">
                                <img class="card-img-top img-fluid" src="{{ asset('img/image/Rectangle 300.png')}}" alt="...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 my-hover">
                                <img src="{{ asset('img/image/Rectangle 300 (1).png')}}" class="img-fluid card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 my-hover">
                                <img src="{{ asset('img/image/Rectangle 300 (2).png')}}" class="img-fluid card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 my-hover">
                                <img src="{{ asset('img/image/Rectangle 300 (3).png')}}" class="img-fluid card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 my-hover">
                                <img src="{{ asset('img/image/Rectangle 300 (4).png')}}" class="img-fluid card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 my-hover">
                                <a href="" class="my-hover"><img src="{{ asset('img/image/galeri.png')}}" class="img-fluid card-img-top" alt="..."></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="">
                <div class="">
                    <div class="row">
                        <div class="col">
                            <footer class="footer text-light" style="background: #001E42;">
                                <div class="container mt-4 ">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('img/image/wikrama.png')}}" alt="Logo Sekolah" width="100">
                                                <h5 class="ml-2 ms-3">SMK WIKRAMA<br>BOGOR</h5>
                                            </div>
                                            <p class="mt-4">Alamat<br><br>
                                                Jl. Raya Wangun
                                                Kelurahan Sindangsari
                                                Bogor Timur 16720</p>
                                            <hr>
                                            <p>Telepon<br>
                                                0251-8242411 /<br> 082221718035 (Whatsapp)</p>
                                            <p>prohumasi@smkwikrama.sch.id</p>
                                            <hr>
                                            <ul class="list-unstyled d-flex ">
                                                <li class="me-3"><a href="https://www.instagram.com/smkwikrama/"><img src="{{ asset('img/image/instagram.png')}}" alt="Instagram" width="20"></a></li>
                                                <li class="me-3"><a href="#"><img src="{{ asset('img/image/facebook.png')}}" alt="Facebook" width="20"></a></li>
                                                <li class="me-3"><a href="#"><img src="{{ asset('img/image/twitter.png')}}" alt="Twitter" width="20"></a></li>
                                                <li class="me-3"><a href="https://www.youtube.com/@multimediawikrama7482"><img src="{{ asset('img/image/yt.png')}}" alt="YouTube" width="20"></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="mb-5">Tentang Wikrama</h5>
                                            <ul class="mt-5">
                                                <li>Sejarah</li>
                                                <li>Peraturan Sekolah</li>
                                                <li>Rencana Strategi & Prestasi</li>
                                                <li>Yayasan</li>
                                                <li>Struktur Organisasi</li>
                                                <li>Cabang</li>
                                                <li>Penghargaan</li>
                                                <li>Kerjasama</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Kirim Pesan</h5>
                                            <form>
                                                <div class="form-group mb-3 mt-5">
                                                    <input type="text" class="form-control" placeholder="Nama">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <textarea class="form-control" rows="3" placeholder="Pesan"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-warning">Kirim</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <h6 class="text-center  ">Copyright © 2023 - SMK Wikrama Bogor. All Right Reserved.</h6>
            </footer>
        </section>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script>
        var navbar = document.querySelector('.navbar');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 0) {
                navbar.classList.add('navbar-scroll', 'shadow');
            } else {
                navbar.classList.remove('navbar-scroll', 'shadow');
            }
        });


        setInterval(function() {
            $('.carousel').carousel('next');
        }, 5000);

        window.onload = function() {
            let bar = document.querySelectorAll('.bar');
            bar.forEach((progress) => {
                let value = progress.getAttribute('data-value');
                progress.style.width = `${value}%`;
                let count = 0;
                let progressAnimation = setInterval(() => {
                    count++;
                    progress.setAttribute('data-text', `${count}%`);
                    if (count >= value) {
                        clearInterval(progressAnimation);
                    }
                }, 15);
            });
        };
    </script>
</body>

</html>