@extends('dashboard.dashboard')
@section('judul_halaman','Kandidat')
@section('konten')
<?php $judul = 'Kandidat'; ?>
	<div class="panel panel-headline">
		<div class="panel-heading">
			<div class="panel-title">
				TAMBAH CALON KETUA OSIS
			</div>
			<div class="panel-subtitle">
				Periode : 2020-2021
			</div>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-5">
					<a href="/admin/kandidat" class="btn btn-primary"><i class="fa fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="row" style="margin-top:15px;">
				<div class="col-md-5">
					<form method="post" action="{{ route('admin.kandidat.store') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<label for="gambar">Foto Calon Ketua Osis :</label>
						<input type="file" id="gambar" name="gambar" class="form-control">
						<label for="nama">Nama :</label>
						<input type="text" id="nama" name="nama" class="form-control">
						<label for="visi">Visi :</label>
						<textarea id="visi" name="visi" class="form-control" rows="4"></textarea>
						<label for="misi">Misi :</label>
						<textarea id="misi" name="misi" class="form-control" rows="4"></textarea>
						<button class="btn btn-primary" style="margin-top:10px;float:right;">Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection