<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio Moch. Iqbal Az-zahir</title>

  <!-- LINK -->
  <link rel="shorcut icon" href="./aset/img/LOGO.png">
  <link rel="stylesheet" href="./aset/css/style.css">
  <link rel="stylesheet" href="./aset/css/bootstrap.main.css">
  <link rel="stylesheet" href="./aset/css/aos.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>
  <!-- navbar -->
  <div class="header-bg">
    <nav class="navbar navbar-drak navbar-expand-lg navbar-light bg-biru fw-bold fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Moch. Iqbal Az-zahir</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Keahlian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Projek</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Client</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- menampilkan isi komentar -->
    <div class="py-5">
      <div class="container text-white">
        <div class="row">
            <div class="col-12 text-center">
                <p class="m-0 text-biru">isi komentar</p>
                <p class="h1 text-uppercase fw-bold text-white">Kumpulan komentar dari orang lain😡</p>
            </div>
            <div class="col-12 mt-5 text-dark">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <?php
                            include "koneksi.php";

                            $query = "SELECT * FROM message";
                            $hasil = mysqli_query($conn, $query);

                            //loding data

                            while ($row = mysqli_fetch_array($hasil)) {
                                $nama = $row['nama'];
                                $email = $row['email'];
                                $pesan = $row['pesan']; 
                                echo '
                                    <div class="col-lg-12 mb-4">
                                        <div class="card">
                                            <div class="card-body"
                                            <h5 class="card-title">'. $row['nama'] . '</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">'. $row['email'] . '</h6>
                                            <p class="card-text">'. $row['pesan'] . '</p>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    <!-- footer -->
    <div class="py-5" id="footer">
      <div class="container text-white">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="logo-brand">
              Moch. Iqbal Az-zahir
            </h1>
            <p>Terimakasih telah berkunjung ke halaman web saya. 😘</p>
          </div>
          <div class="col-lg-3">
            <h3>Kategori Tulisan</h3>
            <div class="kategori">

              <ul class="p-0">
                <li><a href="#about">About Me</a></li>
                <li><a href="#keahlian">Keahlian</a></li>
                <li><a href="#projek">Projek</a></li>
                <li><a href="#clien">Client</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#kontak">Kontak</a></li>

              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <h3>Hubungi</h3>
            <div class="hubungi">
              <a href="mailto:iqbalazzahir831@gmail.com" target="_BLANK">iqbalazzahir831@gmail.com</a>
              <p>Lampung Selatan, Natar, Serbajadi<p>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <!-- sosmed -->
            <div class="d-flex justify-content-center icon-footer " style="top: 300px;" >
              <a href="https://web.facebook.com/iqbal.azzahir.9406" target="_BLANK|_SELF">
                <div class="icon"><i class='bx bxl-facebook'></i></div>
              </a>

              <a href="https://twitter.com/miqazz" target="_BLANK|_SELF">
                <div class="icon"><i class='bx bxl-twitter'></i></div>
              </a>

              <a href="https://wa.me/+6289699849509" target="_BLANK|_SELF">
                <div class="icon"><i class='bx bxl-whatsapp'></i></div>
              </a>
              <a href="https://www.instagram.com/iqbalazzahir_/" target="_BLANK|_SELF">
                <div class="icon"><i class='bx bxl-instagram'></i></div>
              </a>
            </div>
            
            <div class="col-md-12 text-center">
              <p>
                ©Copyrght dibuat oleh <span>Moch. Iqbal Az-zahir</span>,
                menggunakan <span>Bootstrap 5!</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>