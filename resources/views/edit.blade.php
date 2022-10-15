<!DOCTYPE html>
<html>
<head>
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
						<div class="card-header bg-primary text-white">Edit Data Pegawai</div>
							<div class="card-body">
							@foreach($pegawai as $p)
							<form action="/pegawai/update" method="post">
							{{ csrf_field() }}
							<div class="modal-body">
								<input type="hidden" name="id" value="{{ $p->id }}"> <br/>

								<div class="mb-3">
									<label class="form-label">Kode_Saham</label>
									<input type="text" required="required" class="form-control" name="nama" value="{{ $p->pegawai_nama }}">
								</div>
								<div class="mb-3">
									<label class="form-label">Nama</label>
									<input type="text" required="required" class="form-control" name="jabatan" value="{{ $p->pegawai_jabatan }}">
								</div>
								<div class="mb-3">
									<label class="form-label">Saham</label>
									<input type="number" required="required" class="form-control" name="umur" value="{{ $p->pegawai_umur }}">
								</div>
								<div class="mb-3">
									<label class="form-label">Papan_Pencatatan</label>
									<input type="text" required="required" class="form-control" name="alamat" value="{{ $p->pegawai_alamat }}">
								</div>
								
								<div class="modal-footer">
											<button type="submit" class="btn btn-primary" value="Simpan Data">Simpan</button>
										</div> <br>
                    			<div class="modal-footer">
											<a href="/pegawai" type="button" class="btn btn-danger">Kembali</a>
								</div>
								</div>
								</form>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
		
	
</body>
</html>
