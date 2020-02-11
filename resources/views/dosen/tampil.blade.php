<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman Website</title>
</head>
<body>
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

	<h2>DOSEN STIKOM YOS</h2>
	<h3>Data Dosen</h3>
 
	<a href="/dosen/tambah"> + Tambah Dosen Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
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
				<a href="/dosen/edit/{{ $p->id_dosen }}">Edit</a>
				|
				<a href="/dosen/hapus/{{ $p->id_dosen }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	<br/>
	Halaman : {{ $dosen->currentPage() }} <br/>
	Jumlah Data : {{ $dosen->total() }} <br/>
	Data Per Halaman : {{ $dosen->perPage() }} <br/>
 
 
	{{ $dosen->links() }}
 
 
</body>
</html>

