<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

//panggil library DB
use Illuminate\Support\Facades\DB;
 
class MahasiswaController extends Controller
{
    public function index(){
 
    	$mahasiswa = DB::table('mahasiswa')->orderBy('id_mahasiswa', 'desc')->get();
 
    	// mengirim data pegawai ke view index
    	return view('mahasiswa/tampil',['mahasiswa' => $mahasiswa]);
    }


    // method untuk menampilkan view form tambah dosen
    public function tambah()
    {
    
        // memanggil view tambah
        return view('mahasiswa/tambah');
    
    }

    // method untuk insert data ke table dosen
    public function aksi_tambah(Request $request)
    {
        // insert data ke table pegawai
        DB::table('mahasiswa')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'no_telp' => $request->no_telp
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/mahasiswa/tampil');

    }

    public function ambil($nama){
 
    	return $nama;
    }



    public function formulir(){
    	return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama."<br> Alamat : ".$alamat;
    }
}