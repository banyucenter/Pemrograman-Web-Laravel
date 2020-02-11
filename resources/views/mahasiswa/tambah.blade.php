
<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman Website</title>
</head>
<body>

	<h2>DOSEN STIKOM YOS SUDARSO</h2>
	<h3>Data Mahasiswa</h3>

	<a href="/mahasiswa/tampil"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/mahasiswa/aksi_tambah" method="post">
    
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
        NIM <input type="text" name="nim" required="required"> <br/>
        Nama <input type="text" name="nama" required="required"> <br/>
		No Telp <input type="text" name="no_telp" required="required"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>