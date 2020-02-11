<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman Website</title>
</head>
<body>

	<h2>DOSEN STIKOM YOS SUDARSO</h2>
	<h3>Data Dosen</h3>

	<a href="/dosen/tampil"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/dosen/aksi_tambah" method="post">
    {{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Gaji <input type="number" name="gaji" required="required"> <br/>
		Status <input type="text" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>