<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman Website</title>
</head>
<body>
 
	<h2>Data Dosen</h2>
	<h3>Edit Dosen</h3>
 
	<a href="/dosen/tampil"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($dosen as $p)
	<form action="/dosen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_dosen }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->jabatan }}"> <br/>
		Gaji <input type="number" required="required" name="gaji" value="{{ $p->gaji }}"> <br/>
        Status <input type="text" required="required" name="status" value="{{ $p->status }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>