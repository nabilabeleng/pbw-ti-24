@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-text">
        <h2>Selamat Datang di Website Saya</h2>
        <p>Tempat berbagi informasi, berita terkini, dan profil pribadi saya.</p>
        <a href="{{ url('/berita') }}" class="btn">Lihat Berita</a>
    </div>
</div>

<section class="about">
    <h2>Kegiatan & Prestasi</h2>
    <p>Temukan berbagai informasi menarik tentang mahasiswa Unimus.</p>
</section>

<div class="info-cards">
    <div class="card">
        <img src="https://images.unsplash.com/photo-1544717305-996b815c338c?auto=format&fit=crop&w=800&q=80" alt="">
        <h3>Kegiatan Mahasiswa</h3>
        <p>Temukan berbagai kegiatan menarik yang dilakukan mahasiswa di kampus.</p>
        <a href="#" class="btn btn-small">Lihat</a>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1521790361543-f645cf042ec4?auto=format&fit=crop&w=800&q=80" alt="">
        <h3>Prestasi</h3>
        <p>Berbagai penghargaan dan pencapaian membanggakan dari mahasiswa Unimus.</p>
        <a href="#" class="btn btn-small">Baca</a>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=800&q=80" alt="">
        <h3>Tentang Saya</h3>
        <p>Kenali lebih dekat siapa saya dan perjalanan saya dalam dunia teknologi informasi.</p>
        <a href="{{ url('/profile') }}" class="btn btn-small">Profile</a>
    </div>
</div>
@endsection
