<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
        [
            "judul" => "Laravel 11 Rilis",
            "slug" => "laravel-11-rilis",
            "penulis" => "Sasya",
            "konten" => "Laravel 11 membawa banyak fitur baru..."
        ],
        [
            "judul" => "Belajar Blade",
            "slug" => "belajar-blade",
            "penulis" => "Putri",
            "konten" => "Blade memudahkan kita membuat layout website..."
        ]
    ];

    public static function ambildata()
    {
        return self::$data_berita;
    }

    // ✅ tambahkan parameter $slugp di sini
    public static function caridata($slugp)
    {
        $data_beritas = self::$data_berita;
        $new_berita = [];

        foreach ($data_beritas as $berita) {
            if ($berita["slug"] === $slugp) {
                $new_berita = $berita; 
            }
        }

        return $new_berita;
    }
}
