<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kepegawaian</title>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="style/main.css" rel="stylesheet" />
</head>
<body>

	<nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="/index.html" class="navbar-brand">
          <img src="images/logo.svg" alt="logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="/index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="/categories.html" class="nav-link">Categories</a>
            </li>
            <li class="nav-item">
              <a href="/register.html" class="nav-link">Sign Up</a>
            </li>
            <li class="nav-item">
              <a href="#" class="btn btn-success nav-link px-4 text-white"
                >Sign in</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

	<!--Page Content-->
    <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    class="active"
                    data-target="#storeCarousel"
                    data-slide-to="0"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="/images/Banner1.png"
                      alt="Carousel Image"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/banner2.png"
                      alt="Carousel Image"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/Banner1.jpg"
                      alt="Carousel Image"
                      class="d-block w-100"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

	  
	  <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">

	<div class="card" class="mt-3">
        <div class="card-header bg-primary text-white">Data Saham</div>
            <div class="card-body">
				<a href="/pegawai/tambah" class="btn btn-success mb-3"> + Tambah Saham Baru</a>

        <form action="Index_Customer.php" method="get">
                        <div class="input-group">
                            <input type="text" name="cari" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <input type="submit" class="btn btn-outline-primary" value="Cari">
                        </div>
                    </form>

        <?php
                    if (isset($_GET['cari'])) {
                        $cari = $_GET['cari'];
                        echo "<b>Hasil pencarian : " . $cari . "</b>";
                    }
                    ?>

                    <br><br>

				<table border="1" class="table table-bordered table-striped table-hover">
				<tr>
					<th>Kode Saham</th>
					<th>Nama</th>
					<th>Saham</th>
					<th>Papan Pencatatan</th>
					<th>Opsi</th>
				</tr>
				@foreach($pegawai as $p)
				<tr>
					<td>{{ $p->pegawai_nama }}</td>
					<td>{{ $p->pegawai_jabatan }}</td>
					<td>{{ $p->pegawai_umur }}</td>
					<td>{{ $p->pegawai_alamat }}</td>
					<td>
						<a href="/pegawai/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
						|
						<a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
				@endforeach		
				</table>

				


	@if($pegawai->hasPages())
	<div class="card-footer">
		{{ $pegawai->links() }}
	</div>
	@endif
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</div>
      </section>
	  </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="pt-4 pb-2">2022 Copyright Weesia. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="/script/navbar-scroll.js"></script>
  </body>
</html>