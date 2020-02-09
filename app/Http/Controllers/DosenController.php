<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        //data dalam bentuk single
        $nama = "Purwono, S.Kom otw M.Kom";
        //data dalam bentuk array
        $matakuliah = ["Proyek Perangkat Lunak","Pemrogramman Website","Pembelajaran Mesin"];
        
        //Passing (Lempar) data ke View biodata.blade.php
        return view('biodata',
        [
            'namadosen' => $nama,
            'matkul' => $matakuliah
        ]);
    }
}
