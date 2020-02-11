<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman Website</title>
</head>
<body>
 
	<h2>DOSEN STIKOM YOS</h2>
	<h3>Data Mahasiswa</h3>
 
	<a href="/mahasiswa/tambah"> + Tambah Mahasiswa Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>no Telp</th>
		</tr>
		@foreach($mahasiswa as $p)
		<tr>
			<td>{{ $p->nim }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->no_telp }}</td>
			<td>
				<a href="/mahasiswa/edit/{{ $p->id_mahasiswa }}">Edit</a>
				|
				<a href="/mahasiswa/hapus/{{ $p->id_mahasiswa }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>

