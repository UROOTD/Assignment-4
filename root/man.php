<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, intial-scale=1.0" />
  <link rel="shortcut icon" href="img/logo.png" type="x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="stylesheet.css" />
  <link rel="stylesheet" href="starrr.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="starrr.js"></script>

  <title>UROOTD</title>
</head>

<?php
  $conn = mysqli_connect("localhost", "root", "", "rating");
  $result = mysqli_query($conn, "SELECT * FROM products");
  while ($row = mysqli_fetch_object($result)) {
    $result_ratings = mysqli_query($conn, "SELECT * FROM ratings WHERE product_id = '1" . $row->id . "'");
    $ratings = 0;
    while ($row_ratings = mysqli_fetch_object($result_ratings))
    {
        $ratings += $row_ratings->ratings;
    }
    $average_ratings = 0;
    if ($ratings > 0)
    {
        $average_ratings = $ratings / mysqli_num_rows($result_ratings);
    }
?>

<script>
    var ratings = 0;
    $(function () {
        $(".starrr").starrr().on("starrr:change", function (event, value) {
            ratings = value;
        });

        var rating = document.getElementsByClassName("ratings");
        for (var a = 0; a < rating.length; a++)
        {
            $(rating[a]).starrr({
                readOnly: true,
                rating: rating[a].getAttribute("data-rating")
            });
        }
    });

    function saveRatings(form) {
        var product_id = form.product_id.value;
 
    $.ajax({
        url: "save-ratings.php",
        method: "POST",
        data: {
            "product_id": product_id,
            "ratings": ratings
        },
        success: function (response) {
            alert(response);
        }
    });
    return false;
}
</script>

<body>
  <header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #ffeee3;">
      <div class="container">
        <a class="navbar-brand" style="color:#f36b60;" href="../index.html">
          <img src="img/logoss.png" alt="" width="70" class="d-inline-block " id=beranda>#UROOTD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="woman.php">Wanita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="man.php">Pria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="top.php">Teratas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="latest.php">Terbaru</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.html"><button class="btn btn-1">Masuk</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="regist.html"><button class="btn btn-3">Daftar</button></a>
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
    <h1 class="heading"> Kategori <span>Pria</span> </h1>
    <div class="container content">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="img\1.1.jpg" class="card-img-top" alt="..." />
              <form method="POST" onsubmit="return saveRatings(this);"><br>
                <input type="hidden" name="product_id" value="<?php echo $row->id; ?>">
                <div class="starrr"></div> &nbsp;
                <input type="submit" class="button"/>
              </form>
              <?php
                  }
              ?>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img\1.2.jpg" class="card-img-top" alt="..." />
              <form method="POST" onsubmit="return saveRatings(this);"><br>
                <input type="hidden" name="product_id" value="<?php echo $row->id; ?>">
                <div class="starrr"></div> &nbsp;
                <input type="submit" class="button"/>
              </form>
          </div>
        </div>
      </div>
    </div>
    <br><div class="container content">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="img\1.3.jpg" class="card-img-top" alt="..." />
              <form method="POST" onsubmit="return saveRatings(this);"><br>
                <input type="hidden" name="product_id" value="<?php echo $row->id; ?>">
                <div class="starrr"></div> &nbsp;
                <input type="submit" class="button"/>
              </form>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img\1.4.jpg" class="card-img-top" alt="..." />
              <form method="POST" onsubmit="return saveRatings(this);"><br>
                <input type="hidden" name="product_id" value="<?php echo $row->id; ?>">
                <div class="starrr"></div> &nbsp;
                <input type="submit" class="button"/>
              </form>
          </div>
        </div>
      </div>
    </div>
    <br><div class="container content">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="img\1.5.jpg" class="card-img-top" alt="..." />
              <form method="POST" onsubmit="return saveRatings(this);"><br>
                <input type="hidden" name="product_id" value="<?php echo $row->id; ?>">
                <div class="starrr"></div> &nbsp;
                <input type="submit" class="button"/>
              </form>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img\1.6.jpg" class="card-img-top" alt="..." />
              <form method="POST" onsubmit="return saveRatings(this);"><br>
                <input type="hidden" name="product_id" value="<?php echo $row->id; ?>">
                <div class="starrr"></div> &nbsp;
                <input type="submit" class="button"/>
              </form>
          </div>
        </div>
      </div>
    </div>
    <br><div class="container content">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="img\1.7.jpg" class="card-img-top" alt="..." />
              <form method="POST" onsubmit="return saveRatings(this);"><br>
                <input type="hidden" name="product_id" value="<?php echo $row->id; ?>">
                <div class="starrr"></div> &nbsp;
                <input type="submit" class="button"/>
              </form>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img\1.8.jpg" class="card-img-top" alt="..." />
              <form method="POST" onsubmit="return saveRatings(this);"><br>
                <input type="hidden" name="product_id" value="<?php echo $row->id; ?>">
                <div class="starrr"></div> &nbsp;
                <input type="submit" class="button"/>
              </form>
          </div>
        </div>
      </div>
    </div>
    <br><div class="container content">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="img\1.9.jpg" class="card-img-top" alt="..." />
              <form method="POST" onsubmit="return saveRatings(this);"><br>
                <input type="hidden" name="product_id" value="<?php echo $row->id; ?>">
                <div class="starrr"></div> &nbsp;
                <input type="submit" class="button"/>
              </form>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img\1.10.jpg" class="card-img-top" alt="..." />
              <form method="POST" onsubmit="return saveRatings(this);"><br>
                <input type="hidden" name="product_id" value="<?php echo $row->id; ?>">
                <div class="starrr"></div> &nbsp;
                <input type="submit" class="button"/>
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
          <img src="img/1.1.jpg" class="modal-img" alt="Modal Image">
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <script type="text/javascript">
    document.addEventListener("click", function (e) {
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

  <br><div class="credit"> Copyright &copy; 2021 - <span> UROOTD </span> | All Rights Reserved </div>

</body>

</html>
