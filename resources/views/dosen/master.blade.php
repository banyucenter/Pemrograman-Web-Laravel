<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #8 : Sistem Template Blade Laravel</title>
</head>
<body>
 
	<header>
 
		<h2>Biografi Dosen</h2>
		<nav>
			<a href="/dosen/profil">PROFIL</a>
			|
			<a href="/dosen/tentang">TENTANG</a>
			|
			<a href="/dosen/kontak">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy;STIKOM YOS SUDARSO</a>. 2019 - 2020</p>
	</footer>
 
</body>
</html>