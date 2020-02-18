<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ValidasiController extends Controller
{
    public function index()
    {
        return view('dosen/input');
    }
    
    public function proses(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required|min:5|max:15',
            'jabatan' => 'required|min:5|max:15',
            'gaji' => 'required|numeric',
            'status' => 'required|min:5|max:15',
        ]);

        if($validatedData){
            DB::table('dosen')->insert([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'gaji' => $request->gaji,
                'status' => $request->status
            ]);
            return redirect('/dosen/tampil');
        }
        
 
        
    }

    
}


