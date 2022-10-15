<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kepegawaian</title>
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="style/main.css" rel="stylesheet" />
</head>
<body>

<div class="page-content page-home">
	<section class="store-trend-categories">
		<div class="container">
			<div class="row">
				<div class="col-12" data-aos="fade-up">
					<div class="card" class="mt-3">
						<div class="card-header bg-primary text-white">Tambah Data Saham</div>
							<div class="card-body">
								<form action="/pegawai/store" method="post">
									{{ csrf_field() }}
									<div class="modal-body">
										<div class="mb-3">
											<label class="form-label">Kode_Saham</label>
											<input type="text" class="form-control" name="nama">
										</div>
										<div class="mb-3">
											<label class="form-label">Nama</label>
											<input type="text" class="form-control" name="jabatan">
										</div>
										<div class="mb-3">
											<label class="form-label">Saham</label>
											<input type="number" class="form-control" name="umur">
										</div>
										<div class="mb-3">
											<label class="form-label">Papan_Pencatatan</label>
											<input type="text" class="form-control" name="alamat">
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary" value="Simpan Data">Simpan</button>
										</div> <br>
                    <div class="modal-footer">
											<a href="/pegawai" type="button" class="btn btn-danger">Kembali</a>
										</div>
									</div>
								</form> 
							</div>
						</div>
					</div>
				</div>
			</div>
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