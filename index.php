<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Daily Journal</title>
    <link rel="icon" href="img/logo.png" />
    <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">My Daily Journal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#schedule">Schedule</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php" target="_blank">Login</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
     <!-- nav end -->
     <!-- hero begin -->
     <section id="hero" class="text-center p-5 text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img src="img/logo.png" class="img-fluid" width="300" gap="10px">
          <div>
            <h1 class="fw-bold display-4">
              Create Memories, Save Memories, Everyday.
            </h1>
            <h4 class="lead display-6">
              Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali.
            </h4>
          </div>
        </div>
      </div>
     </section>
     <!-- hero end -->
     <!-- article begin -->
     <section id="article" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">article</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
          <?php
            $sql = "SELECT * FROM article ORDER BY tanggal DESC";
            $hasil = $conn->query($sql); 

            $no = 1;
            while($row = $hasil->fetch_assoc()){
              ?>
              <div class="col">
                <div class="card h-100">
                  <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                  <div class="card-body">
                    <h5 class="card-title"><?= $row["judul"]?></h5>
                    <p class="card-text">
                      <?= $row["isi"]?>
                    </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary">
                      <?= $row["tanggal"]?>
                    </small>
                  </div>
                </div>
              </div>
              <?php
            }
            ?> 
          </div>
      </div>
     </section>
     <!-- article end -->
     <!-- gallery begin -->
     <section id="gallery" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/gambyong.jpg" class="d-block w-100" alt="100">
            </div>
            <div class="carousel-item">
              <img src="img/panel.jpg" class="d-block w-100" alt="100">
            </div>
            <div class="carousel-item">
              <img src="img/olahraga.jpg" class="d-block w-100" alt="100">
            </div>
            <div class="carousel-item">
              <img src="img/lumpia.jpg" class="d-block w-100" alt="100">
            </div>
            <div class="carousel-item">
              <img src="img/siswa.jpg" class="d-block w-100" alt="100">
            </div>
            <div class="carousel-item">
              <img src="img/woman.jpg" class="d-block w-100" alt="100">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
     </section>
     <!-- gallery end -->
     <!-- schedule begin -->
     <section id="schedule" class="text-center p-5 bg-primary-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <div class="col">
            <div class="card mb-3" style="max-width: 18rem;">
              <div class="card-header text-bg-primary">Senin</div>
              <div class="card-body">
                <h5 class="card-title">BASIS DATA (Teori)</h5>
                <p class="card-text">08.40-10.20 <br> H.5.12</p>
                <h5 class="card-title">REKAYASA PERANGKAT LUNAK</h5>
                <p class="card-text">12.30-15.00 <br> H.5.14</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3" style="max-width: 18rem;">
              <div class="card-header text-bg-secondary">Selasa</div>
              <div class="card-body">
              <h5 class="card-title">PENDIDIKAN KEWARGANEGARAAN</h5>
                <p class="card-text">10.20-12.00 <br> AULA H.7</p>
                <h5 class="card-title">PEMROGRAMAN BERBASIS WEB</h5>
                <p class="card-text">12.30-14.10 <br> D.2.J</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3" style="max-width: 18rem;">
              <div class="card-header text-bg-success">Rabu</div>
              <div class="card-body">
              <h5 class="card-title">BASIS DATA (Praktek)</h5>
                <p class="card-text">08.40-10.20 <br> D.3.M</p>
                <h5 class="card-title">SISTEM OPERASI</h5>
                <p class="card-text">12.30-15.00 <br> H.4.8</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3" style="max-width: 18rem;">
              <div class="card-header text-bg-danger">Kamis</div>
              <div class="card-body">
              <h5 class="card-title">LOGIKA INFORMATIKA</h5>
                <p class="card-text">09.30-12.00 <br> H.4.1</p>
                <h5 class="card-title">PROBABILITAS DAN STATISTIK</h5>
                <p class="card-text">12.30-15.00 <br> H.4.12</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3" style="max-width: 18rem;">
              <div class="card-header text-bg-warning">Jumat</div>
              <div class="card-body">
              <h5 class="card-title">SISTEM INFORMASI</h5>
                <p class="card-text">09.00-12.00 <br> H.4.6</p>
                <h5 class="card-title"> - </h5>
                <p class="card-text"> - </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3" style="max-width: 18rem;">
              <div class="card-header text-bg-info">Sabtu</div>
              <div class="card-body">
              <h5 class="card-title">TIDAK ADA JADWA;</h5>
                <p class="card-text"> - </p>
                <h5 class="card-title"> - </h5>
                <p class="card-text"> - </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-3" style="max-width: 18rem;">
              <div class="card-header text-bg-dark">Minggu</div>
              <div class="card-body">
              <h5 class="card-title">TIDAK ADA JADWAL</h5>
                <p class="card-text"> - </p>
                <h5 class="card-title"> - </h5>
                <p class="card-text"> - </p>
              </div>
            </div>
          </div>
        </div>
      </div>
     </section>     
    <!-- schedule end -->
    <!-- profile begin -->
     <section id="profile" class="p-5">
     <div class="container my-5">
     <div class="row align-items-center">
     <div class="col-md-3 text-center">
        <img src="img/face.jpg"  width="300px" gap="10px" alt="Profile Image" class="img-fluid profile-img rounded-circle">
     </div>
     <div class="col-md-9">
        <h2 class="profile-name">Naya Alifiah</h2>
        <table class="table table-borderless profile-info">
            <tr>
                <td><strong>NIM</strong></td>
                <td>: A11.2023.15357</td>
            </tr>
            <tr>
                <td><strong>Program Studi</strong></td>
                <td>: Teknik Informatika</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>: 111202315357@mhs.dinus.ac.id</td>
            </tr>
            <tr>
                <td><strong>Telepon</strong></td>
                <td>: +62 815 7572 4795</td>
            </tr>
            <tr>
                <td><strong>Alamat</strong></td>
                <td>: Jl. Sadewa I No.65, Semarang</td>
            </tr>
        </table>
     </div>
     </div>
     </div>
     </section>
     <!-- profile end -->
     <!-- footer begin -->
     <footer class="text-center p-2 bg-primary-subtle">
      <div>
        <a href="https://www.instagram.com/itsnayaz"></a><i class="bi bi-instagram h2 p-2 text-dark"></i>
        <a href="https://x.com/arrcticsnowzz"></a><i class="bi bi-twitter-x h2 p-2 text-dark"></i>
        <a href="https://wa.me/+6281575724795"></a><i class="bi bi-whatsapp h2 p-2 text-dark"></i>
      </div>
      <div>
        Naya Alifiah &copy; Semarang 2024
      </div>
     </footer>
     <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>