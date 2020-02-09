<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman Website</title>
</head>
<body>
 
	<h1>Biodata Dosen</h1>
    <p>Nama Dosen : <b> {{ $namadosen }}</b></p>
    <p>Mata Kuliah diAmpu</p>
    <ul>
		@foreach($matkul as $m)
		<li>{{ $m }}</li>
		@endforeach	
	</ul>
 
</body>
</html>