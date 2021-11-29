<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, intial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('image\logo.png') }}" type="x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @include('styles.starrr')
    @include('styles.stylesheet')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    @include('scripts.script')

    <title>UROOTD</title>
</head>


<script>
var ratings = 0;
$(function() {
    $(".starrr").starrr().on("starrr:change", function(event, value) {
        ratings = value;
        $('.rating_class').val(ratings);
        console.log($('.rating_class').val());
    });

    var rating = document.getElementsByClassName("ratings");
    for (var a = 0; a < rating.length; a++) {
        $(rating[a]).starrr({
            readOnly: true,
            rating: rating[a].getAttribute("data-rating")
        });
    }
});
</script>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #ffeee3;">
            <div class="container">
                <a class="navbar-brand" style="color:#f36b60;" href="{{ route('landing') }}">
                    <img src="{{ asset('image\logoss.png') }}" alt="" width="70" class="d-inline-block "
                        id=beranda>UROOTD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('woman') }}">Wanita</a>
                        </li>
                        <li class=" nav-item">
                            <a class="nav-link" href="{{ route('man') }}">Pria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('top') }}">Teratas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('latest') }}">Terbaru</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('regist') }}">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Akhir Navbar -->
    </header>
    <br />
    <br />
    <br />
    <br />
    <section class="gallery">
        <h1 class="heading"> Kategori <span>
                @if(Route::current()->getName() == 'man')
                Pria
                @elseif (Route::current()->getName() == 'woman')
                Wanita
                @elseif (Route::current()->getName() == 'latest')
                Terbaru
                @elseif (Route::current()->getName() == 'top')
                Teratas
                @endif
            </span> </h1>
        <div class="container content">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="{{ $products[0]->image }}" class="card-img-top" alt="..." />
                        <div class="fs-2 text-white">
                            Rating : {{ $products[0]->rating }}
                        </div>
                        <form method="POST" action="{{ route('rating.store') }}" onsubmit="return saveRatings(this);">
                            <br>
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $products[0]->id }}">
                            <input type="hidden" name="rating" class="rating_class" value="">
                            <div class="starrr"></div> &nbsp;
                            <input type="submit" class="button" value="Submit" />
                        </form>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ $products[1]->image }}" class="card-img-top" alt="..." />
                        <div class="fs-2 text-white">
                            Rating : {{ $products[1]->rating }}
                        </div>
                        <form method="POST" action="{{ route('rating.store') }}" onsubmit="return saveRatings(this);">
                            <br>
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $products[1]->id }}">
                            <input type="hidden" name="rating" class="rating_class" value="">
                            <div class="starrr"></div> &nbsp;
                            <input type="submit" class="button" value="submit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container content">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="{{ $products[2]->image }}" class="card-img-top" alt="..." />
                        <div class="fs-2 text-white">
                            Rating : {{ $products[2]->rating }}
                        </div>
                        <form method="POST" action="{{ route('rating.store') }}" onsubmit="return saveRatings(this);">
                            <br>
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $products[2]->id }}">
                            <input type="hidden" name="rating" class="rating_class" value="">
                            <div class="starrr"></div> &nbsp;
                            <input type="submit" class="button" value="submit" />
                        </form>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ $products[3]->image }}" class="card-img-top" alt="..." />
                        <div class="fs-2 text-white">
                            Rating : {{ $products[3]->rating }}
                        </div>
                        <form method="POST" action="{{ route('rating.store') }}" onsubmit="return saveRatings(this);">
                            <br>
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $products[3]->id }}">
                            <input type="hidden" name="rating" class="rating_class" value="">
                            <div class="starrr"></div> &nbsp;
                            <input type="submit" class="button" value="submit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container content">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="{{ $products[4]->image }}" class="card-img-top" alt="..." />
                        <div class="fs-2 text-white">
                            Rating : {{ $products[4]->rating }}
                        </div>
                        <form method="POST" action="{{ route('rating.store') }}" onsubmit="return saveRatings(this);">
                            <br>
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $products[4]->id }}">
                            <input type="hidden" name="rating" class="rating_class" value="">
                            <div class="starrr"></div> &nbsp;
                            <input type="submit" class="button" value="submit" />
                        </form>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ $products[5]->image }}" class="card-img-top" alt="..." />
                        <div class="fs-2 text-white">
                            Rating : {{ $products[5]->rating }}
                        </div>
                        <form method="POST" action="{{ route('rating.store') }}" onsubmit="return saveRatings(this);">
                            <br>
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $products[5]->id }}">
                            <input type="hidden" name="rating" class="rating_class" value="">
                            <div class="starrr"></div> &nbsp;
                            <input type="submit" class="button" value="submit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container content">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="{{ $products[6]->image }}" class="card-img-top" alt="..." />
                        <div class="fs-2 text-white">
                            Rating : {{ $products[6]->rating }}
                        </div>
                        <form method="POST" action="{{ route('rating.store') }}" onsubmit="return saveRatings(this);">
                            <br>
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $products[6]->id }}">
                            <input type="hidden" name="rating" class="rating_class" value="">
                            <div class="starrr"></div> &nbsp;
                            <input type="submit" class="button" value="submit" />
                        </form>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ $products[7]->image }}" class="card-img-top" alt="..." />
                        <div class="fs-2 text-white">
                            Rating : {{ $products[7]->rating }}
                        </div>
                        <form method="POST" action="{{ route('rating.store') }}" onsubmit="return saveRatings(this);">
                            <br>
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $products[7]->id }}">
                            <input type="hidden" name="rating" class="rating_class" value="">
                            <div class="starrr"></div> &nbsp;
                            <input type="submit" class="button" value="submit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container content">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="{{ $products[8]->image }}" class="card-img-top" alt="..." />
                        <div class="fs-2 text-white">
                            Rating : {{ $products[8]->rating }}
                        </div>
                        <form method="POST" action="{{ route('rating.store') }}" onsubmit="return saveRatings(this);">
                            <br>
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $products[8]->id }}">
                            <input type="hidden" name="rating" class="rating_class" value="">
                            <div class="starrr"></div> &nbsp;
                            <input type="submit" class="button" value="submit" />
                        </form>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ $products[9]->image }}" class="card-img-top" alt="..." />
                        <div class="fs-2 text-white">
                            Rating : {{ $products[9]->rating }}
                        </div>
                        <form method="POST" action="{{ route('rating.store') }}" onsubmit="return saveRatings(this);">
                            <br>
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $products[9]->id }}">
                            <input type="hidden" name="rating" class="rating_class" value="">
                            <div class="starrr"></div> &nbsp;
                            <input type="submit" class="button" value="submit" />
                        </form>
                    </div>
                </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="gallery-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('image\1.1.jpg') }}" class="modal-img" alt="Modal Image">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
    document.addEventListener("click", function(e) {
        if (e.target.classList.contains("card-img-top")) {
            const src = e.target.getAttribute("src");
            document.querySelector(".modal-img").src = src;
            const myModal = new bootstrap.Modal(document.getElementById('gallery-popup'));
            myModal.show();
        }
    })
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    const galleryImage = document.querySelectorAll('.card');

    galleryImage.forEach((img) => {
        img.dataset.aos = 'flip-up';
    })

    AOS.init();
    </script>

    <br>
    <div class="credit"> Copyright &copy; 2021 - <span> UROOTD </span> | All Rights Reserved </div>


    @include('sweetalert::alert')
</body>

</html>