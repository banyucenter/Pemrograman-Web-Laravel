<!-- Menghubungkan dengan view template master -->
@extends('dosen/master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<p>Ini Adalah Halaman Kontak</p>
	
	<table border="1">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>ipungofficial@gmail.com</td>
		</tr>
		<tr>
			<td>Hp</td>
			<td>:</td>
			<td>0821-1394-0427</td>
		</tr>
	</table>
 
@endsection