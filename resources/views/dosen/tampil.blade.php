<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman Website</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">

	<h2>STIKOM YOS SUDARSO PURWOKERTO</h2>
	<h3>Data Dosen</h3>
 
	<a href="/dosen/tambah"> + Tambah Dosen Baru</a>
	
	<br/>
	<br/>
	<div class="form-group">
					
	</div>

	<p>Cari Data Dosen :</p>
	<form action="/dosen/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Dosen .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
	<br>
 
	<table class="table table-bordered" >
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Gaji</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($dosen as $p)
		<tr>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->jabatan }}</td>
			<td>{{ $p->gaji }}</td>
			<td>{{ $p->status }}</td>
			<td>
				<a class="btn btn-warning btn-sm" href="/dosen/edit/{{ $p->id_dosen }}">Edit</a>
				
				<a class ="btn btn-danger btn-sm" href="/dosen/hapus/{{ $p->id_dosen }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	<br/>
	Halaman : {{ $dosen->currentPage() }} <br/>
	Jumlah Data : {{ $dosen->total() }} <br/>
	Data Per Halaman : {{ $dosen->perPage() }} <br/>
 
 
	{{ $dosen->links() }}
	</div>
		</div>
	</div>
 
</body>
</html>

