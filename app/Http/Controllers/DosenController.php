<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function index(){
        //data dalam bentuk single
        $nama = "Purwono, S.Kom otw M.Kom";
        //data dalam bentuk array
        $matakuliah = [
            "Proyek Perangkat Lunak",
            "Pemrogramman Website",
            "Pembelajaran Mesin"
        ];

        //Passing (Lempar) data ke View biodata.blade.php
        return view('biodata',
        [
            'namadosen' => $nama,
            'matkul' => $matakuliah
        ]);
    }

    public function tampil(){
        // mengambil data dari table dosen
       // $dosen = DB::table('dosen')->get();
        
        $dosen = DB::table('dosen')->orderBy('id_dosen', 'desc')->paginate(10);;
 
    	// mengirim data pegawai ke view index
    	return view('dosen/tampil',['dosen' => $dosen]);
    }

    // method untuk menampilkan view form tambah dosen
    public function tambah()
    {
    
        // memanggil view tambah
        return view('dosen/tambah');
    
    }

    // method untuk insert data ke table dosen
    public function aksi_tambah(Request $request)
    {
        // insert data ke table pegawai
        DB::table('dosen')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'gaji' => $request->gaji,
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/dosen/tampil');

    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $dosen = DB::table('dosen')->where('id_dosen',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('dosen/edit',['dosen' => $dosen]);
    
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('dosen')->where('id_dosen',$request->id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'gaji' => $request->gaji,
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/dosen/tampil');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('dosen')->where('id_dosen',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/dosen/tampil');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$dosen = DB::table('dosen')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('dosen/tampil',['dosen' => $dosen]);
 
	}


    //untuk template dinamis
    public function profil(){
		return view('dosen/profil');
	}
 
	public function tentang(){
		return view('dosen/tentang');
	}
 
	public function kontak(){
		return view('dosen/kontak');
	}
}
