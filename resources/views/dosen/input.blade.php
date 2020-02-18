<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman Website</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

</head>
<body>
    {{-- menampilkan error validasi --}}
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif

	<h2>DOSEN STIKOM YOS SUDARSO</h2>
	<h3>Data Dosen</h3>

	<a href="/dosen/tampil"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/validasi/proses" method="post">
    {{ csrf_field() }}
		Nama <input type="text" name="nama"  value="{{ old('nama') }}"> <br/>
		Jabatan <input type="text" name="jabatan"  value="{{ old('jabatan') }}"> <br/>
		Gaji <input type="number" name="gaji"  value="{{ old('gaji') }}"> <br/>
		Status <input type="text" name="status"  value="{{ old('status') }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>