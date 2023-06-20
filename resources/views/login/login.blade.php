@section('container')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
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
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="container" style="margin-top: 150px;">
                <div class="row">
                    <div class="col-md-7 mb-5">
                        <p class="lead mt-3 fs-6">Masjid Besar SMK WIKRAMA BOGOR</p>
                        <h1 class="fw-bolder">Selamat Datang Di <br> <span style="color : #1F3984">Masjid Al-Ikram</span><br> SMK WIKRAMA BOGOR</h1>
                        <p class="lead mt-3 fs-3">Menyediakan Tempat Untuk Bershodaqoh, Melihat Galeri Masjid, Manfaat Bershodaqoh, Dan Yang Lainnya.</p>
                    </div>
                    <div class="col-md-5">
                        <div class="card shadow">
                            <div class="container-fluid pt-3 pb-5 ps-5 pe-5">
                                @if(session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        </button>
                                    </div>
                                @endif
                                @if(session()->has('loginError'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('loginError')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        </button>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="card-body">
                                        <div class="fw-bolder fs-5">Login Untuk Melihat <span style="color : #1F3984" class="">Masjid Al-Ikram</span></div> 
                                        <form class="mt-4" method="POST" action="/login">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" class="form-label fw-bolder">Email</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label fw-bolder">Password</label>
                                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button class="btn text-light" style="background-color : #1F3984" type="submit">Login</button>
                                            </div>
                                        </form>
                                       <a href="{{ route('donatur.index') }}">Tidak Memiliki Akun? Lanjutkan Sebagai Tamu.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#001E42" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,197.3C384,213,480,235,576,240C672,245,768,235,864,240C960,245,1056,267,1152,261.3C1248,256,1344,224,1392,208L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    <footer style="background-color:#001E42;">
        <div class="container text-light">
            <div class="row">
                <div class="col text-center">
                    <p class="lead">Copyright © 2023 - SMK Wikrama Bogor. All Right Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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
    </script>
</body>

</html>