@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<div class="container">

    <!-- TITLE -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Berita</h2>
        <p class="text-muted">
            Informasi dan update terbaru seputar kegiatan dan akademik
        </p>
    </div>

    <!-- NEWS CARDS -->
    <div class="row g-4">

        <!-- BERITA 1 -->
        <div class="col-md-4">
            <div class="card h-100 p-4">
                <h5 class="fw-semibold">
                    Pembukaan Semester Baru Tahun Akademik 2025/2026
                </h5>
                <p class="text-muted mt-2">
                    Informasi resmi mengenai jadwal perkuliahan, KRS,
                    dan kegiatan awal semester.
                </p>
                <a href="https://example.com/berita/semester-baru"
                   target="_blank"
                   class="text-decoration-none fw-semibold"
                   style="color:#AAC4F5">
                    Baca Selengkapnya →
                </a>
            </div>
        </div>

        <!-- BERITA 2 -->
        <div class="col-md-4">
            <div class="card h-100 p-4">
                <h5 class="fw-semibold">
                    Seminar Nasional Teknologi Informasi
                </h5>
                <p class="text-muted mt-2">
                    Seminar nasional dengan tema perkembangan teknologi
                    dan inovasi digital di era modern.
                </p>
                <a href="https://example.com/berita/seminar-teknologi"
                   target="_blank"
                   class="text-decoration-none fw-semibold"
                   style="color:#AAC4F5">
                    Baca Selengkapnya →
                </a>
            </div>
        </div>

        <!-- BERITA 3 -->
        <div class="col-md-4">
            <div class="card h-100 p-4">
                <h5 class="fw-semibold">
                    Kegiatan Mahasiswa & Pengabdian Masyarakat
                </h5>
                <p class="text-muted mt-2">
                    Berbagai kegiatan sosial dan pengabdian mahasiswa
                    sebagai bentuk kontribusi kepada masyarakat.
                </p>
                <a href="https://example.com/berita/kegiatan-mahasiswa"
                   target="_blank"
                   class="text-decoration-none fw-semibold"
                   style="color:#AAC4F5">
                    Baca Selengkapnya →
                </a>
            </div>
        </div>

    </div>

</div>
@endsection
