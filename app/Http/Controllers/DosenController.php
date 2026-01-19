<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen; // ← tambahkan ini

class DosenController extends Controller
{
    public function index()
    {
        return view('dosen.dosenti', [
            'title' => 'Data Dosen'
        ]);
    }

    public function tambahdosen()
    {
        return view('dosen.tambahdosen', [ // ← perbaikan di sini
            "title" => "Tambah Data Dosen"
        ]);
    }
    
    public function insertdata(Request $request)
    {
        Dosen::create($request->all());
        return redirect('/dosen')->with('success', 'Data Berhasil Ditambahkan!');
    }
}

