<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        return view('dosen.singleberita', [
            "title" => "Berita",
            "new_berita" => Berita::caridata(), // pastikan caridata() ada di model
        ]);
    }

    public function tampildata($slugp)
    {
        return view('dosen.singleberita', [
            "title" => "Berita",
            "new_berita" => Berita::caridata($slugp),
        ]);
    }
}
