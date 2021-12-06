<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- logo in link  -->
    <link rel="shortcut icon" href="{{ asset('image\logo.png') }}" type="x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- custom css file link  -->
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>UROOTD</title>
</head>

<body>
    <header>
        <!-- awal navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #ffeee3;">
            <div class="container">
                <a class="navbar-brand" style="color:#f36b60;" href="{{ route('landing') }}">
                    <img src="{{ asset('image\logoss.png') }}" alt="" width="70" class="d-inline-block "
                        id=beranda>#UROOTD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kategori">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak">Kontak</a>
                        </li>
                    </ul>
                    @auth
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Halo, {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-dark" href="" style="float:left;">Logout</button>
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    @endauth
                    @guest
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('login') }}"><button
                                    class="btn btn-1">Masuk</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('regist') }}"><button
                                    class="btn btn-3">Daftar</button></a>
                        </li>
                    </ul>
                    @endguest
                </div>
            </div>
        </nav>
        <!-- akhir navbar -->
    </header>
    <section class="beranda" id="beranda"></section>
    <!-- awal banner -->
    <!-- awal slider -->
    <section class="beranda" id="beranda">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner" data-aos="fade-up" data-aos-duration="1000">
                <div class="carousel-item active" style="background-image: url('{{ asset('image/bnr.png') }}');">
                    <div class="container-first">
                        <div class="carousel-caption first d-md-block">
                            <h3>#UROOTD</h3>
                            <span>Your Outfit Of The Day</span>
                            <p>Website yang menyediakan berbagai rekomendasi outfit</p>
                            <p>untuk menunjang penampilan terbaikmu setiap harinya.</p>
                            <br>
                            @guest
                            <div class="slider-btn">
                                <a href="{{ route('about') }}"><button class="btn btn-3">Pelajari Lebih
                                        Lanjut</button></a>
                            </div>
                            @endguest
                            @auth
                            <div class="slider-btn">
                                <a href="{{ route('about') }}"><button class="btn btn-3">Pelajari Lebih
                                        Lanjut</button></a>
                            </div>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="carousel-item next" style="background-image: url('{{ asset('image/crsl1.jpg') }}');">
                    <div class="container">
                        <h5>#UROOTD</h5>
                        <p class="txt">Rekomendasi pakaian setiap saat.</p>
                        <br>
                        @guest
                        <div class="slider-btn">
                            <a href="{{ route('login') }}" class="btn btn-1">Masuk</a>
                            <a href="{{ route('regist') }}" class="btn btn-2">Daftar</a>
                        </div>
                        @endguest
                        @auth
                        <div class="slider-btn">
                            <a href="{{ route('top') }}" class="btn btn-1">Teratas</a>
                            <a href="{{ route('latest') }}" class="btn btn-2">Terbaru</a>
                        </div>
                        @endauth

                    </div>
                </div>
                <div class="carousel-item next" style="background-image: url('{{ asset('image/crsl2.jpg') }}');">
                    <div class="container">
                        <h5>#UROOTD</h5>
                        <p class="txt">Rekomendasi terkini untukmu.</p>
                        <br>
                        @auth
                        <div class="slider-btn">
                            <a href="{{ route('man') }}" class="btn btn-1">Pria</a>
                            <a href="{{ route('woman') }}" class="btn btn-2">Wanita</a>
                        </div>
                        @endauth
                        @guest
                        <div class="slider-btn">
                            <a href="{{ route('login') }}" class="btn btn-1">Masuk</a>
                            <a href="{{ route('regist') }}" class="btn btn-2">Daftar</a>
                        </div>
                        @endguest
                    </div>
                </div>
                <div class="carousel-item next" style="background-image: url('{{ asset('image/crsl3.jpg') }}');">
                    <div class="container">
                        <h5>#UROOTD</h5>
                        <p class="txt">Beragam variasi pakaian.</p>
                        <br>
                        @guest
                        <div class="slider-btn">
                            <a href="{{ route('login') }}" class="btn btn-1">Masuk</a>
                            <a href="{{ route('regist') }}" class="btn btn-2">Daftar</a>
                        </div>
                        @endguest
                        @auth
                        <div class="slider-btn">
                            <a href="#" class="btn btn-1">Halo, {{ auth()->user()->name }}</a>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- akhir slider -->

    <!-- awal kategori -->
    <section class="kategori" id="kategori">
        <h1 class="heading"> Rekomendasi Berdasarkan <span>Kategori</span> </h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6 box-1">
                    <div class="box" data-aos="fade-in">
                        <img src="{{ asset('image\fit4.png') }}" class="img-fluid category-image" alt="">
                        <div class="content">
                            <h3>Wanita</h3>
                            <a href="{{ route('woman') }}" class="btn btn-3">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 box-2">
                    <div class="box" data-aos="fade-in">
                        <img src="{{ asset('image\fit2.png') }}" class="img-fluid category-image" alt="">
                        <div class="content">
                            <h3>Pria</h3>
                            <a href="{{ route('man') }}" class="btn btn-3">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 box-3">
                    <div class="box" data-aos="fade-in">
                        <img src="{{ asset('image\fit.png') }}" class="img-fluid category-image" alt="">
                        <div class="content">
                            <h3>Terbaru</h3>
                            <a href="{{ route('latest') }}" class="btn btn-3">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 box-4">
                    <div class="box" data-aos="fade-in">
                        <img src="{{ asset('image\fit3.png') }}" class="img-fluid category-image" alt="">
                        <div class="content">
                            <h3>Teratas</h3>
                            <a href="{{ route('latest') }}" class="btn btn-3">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir kategori -->

    <!-- footer -->
    <section class="kontak" id="kontak">
        <h1 class="heading"> <span> Kontak </span> Kami </h1>
        <footer class="footer">
            <div class="container" data-aos="fade-up" data-aos-duration="1000">
                <div class="row">
                    <div class="footer-col">
                        <h4 id=tentangKami>Akses Cepat</h4>
                        <ul>
                            <li><a href="#beranda">Beranda</a></li>
                            <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                            <li><a href="#kategori">Kategori</a></li>
                            <li><a href="#kontak">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4 id=kontak>Kontak</h4>
                        <ul>
                            <li><a href="#">Jakarta, Indonesia</a></li>
                            <li><a href="#">urootd@gmail.com</a></li>
                            <li><a href="#">+6285308530853</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">

                    </div>
                    <div class="footer-col">
                        <img src="{{ asset('image\logo.png') }}" width="100%">
                    </div>
                </div>
            </div>
        </footer>
        <div class="credit"> Copyright &copy; 2021 - <span> UROOTD </span> | All Rights Reserved </div>
    </section>
    <!-- n footer -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- AOS Scripts -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <script src="jsfile.js"></script>

</body>

</html>
