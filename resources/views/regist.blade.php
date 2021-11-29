<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="shortcut icon" href="{{ asset('image\logo.png') }}" type="x-icon">
    <title>UROOTD</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/492fc916a9.js" crossorigin="anonymous"></script>
    <title>UROOTD</title>
</head>

<body>
    <header>
        <!-- awal navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #ffeee3;">
            <div class="container">
                <a class="navbar-brand" style="color:#f36b60;" href="{{ route('landing') }}">
                    <img src="{{ asset('image\logoss.png') }}" class="brnd" alt="" width="70" class="d-inline-block "
                        id=beranda>#UROOTD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing') }}">Beranda</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Masuk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- akhir navbar -->
    </header>
    <section class="vh-100 bg-image" style="
        background-size: cover;
      ">
        <br>
        <br>
        <div class="mask d-flex align-items-center h-100 gradient-custom-3 ">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px">
                            <div class="card-body p-5">
                                <div class="
                      row
                      d-flex
                      justify-content-center
                      align-items-center
                      h-100
                    ">
                                    <img src="{{ asset('image\logo.png') }}" style="width: 150px; height: auto" />
                                </div>
                                <br />
                                <br />
                                <h2 class="text-uppercase text-center mb-5" style="font-family: Poppins, sans-serif">
                                    <strong>Registrasi Akun </strong>
                                </h2>

                                <form action=" {{ route('regist.store') }}" method="post">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <input type="name" id="name" class="form-control form-control-lg" name="name" />
                                        <label class="form-label" for="name"
                                            style="font-family: Poppins, sans-serif">Nama Kamu</label>
                                        @error('name')
                                        <div>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" name="email"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="email"
                                            style="font-family: Poppins, sans-serif">Email Kamu</label>
                                        @error('email')
                                        <div>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" name="password"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="password"
                                            style="font-family: Poppins, sans-serif">Password</label>
                                        @error('password')
                                        <div>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4cdg" name="password_confirmation"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cdg"
                                            style="font-family: Poppins, sans-serif">Konfirmasi Password</label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-dark btn-block btn-lg text-white">
                                            Daftar
                                        </button>
                                    </div>
                                </form>
                                <p class="text-center text-muted mt-5 mb-0" style="font-family: Poppins, sans-serif">
                                    Sudah Punya Akun?
                                    <a href="{{ route('login') }}" class="fw-bold text-body"><u
                                            style="font-family: Poppins, sans-serif">Login disini</u>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>