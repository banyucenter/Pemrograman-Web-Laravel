<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class MahasiswaController extends Controller
{
    public function index(){
 
    	return "Controller Mahasiswa";
 
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