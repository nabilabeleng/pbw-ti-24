@extends('layouts.app')

@section('title', 'Profile | My App')

@section('content')

<!-- Hero Profile -->
<section class="hero-profile">
    <div class="hero-overlay"></div>
    <div class="hero-text">
        <h2>Tentang Saya</h2>
        <p>Kenali lebih dekat siapa saya, perjalanan belajar, dan keterampilan yang sedang saya kembangkan.</p>
    </div>
</section>

<!-- Profile Card -->
<div class="profile-container">
    <div class="profile-card">
        <img src="{{ asset('img/miauw.PNG') }}" alt="Foto Profil" class="profile-img">
        <h2 class="profile-name">Sasya Putri</h2>
        <p class="profile-role">Mahasiswa Teknologi Informasi | Universitas Muhammadiyah Semarang</p>
        <p class="profile-bio">
            Saya adalah mahasiswa yang memiliki semangat tinggi dalam bidang teknologi dan pengembangan aplikasi web. 
            Saat ini saya fokus mempelajari <strong>Laravel</strong> dan membangun proyek pribadi untuk meningkatkan kemampuan saya.
        </p>
        <div class="profile-buttons">
            <a href="/contact" class="btn">Hubungi Saya</a>
            <a href="/berita" class="btn btn-outline">Lihat Berita</a>
        </div>
    </div>
</div>

<!-- Skills Section -->
<section class="skills-section">
    <h2 class="section-title" style="text-align:center;"> Keterampilan Saya</h2>
    <div class="skills-progress">
        <div>
            <div class="skill-info"><span>HTML & CSS</span><span>90%</span></div>
            <div class="progress-bar"><div class="progress" style="--progress-width:90%;"></div></div>
        </div>
        <div>
            <div class="skill-info"><span>JavaScript</span><span>75%</span></div>
            <div class="progress-bar"><div class="progress" style="--progress-width:75%;"></div></div>
        </div>
        <div>
            <div class="skill-info"><span>Laravel</span><span>80%</span></div>
            <div class="progress-bar"><div class="progress" style="--progress-width:80%;"></div></div>
        </div>
        <div>
            <div class="skill-info"><span>Komunikasi</span><span>95%</span></div>
            <div class="progress-bar"><div class="progress" style="--progress-width:95%;"></div></div>
        </div>
    </div>
</section>

<!-- Education & Hobby -->
<section class="extra-section">
    <div class="extra-container">
        <div class="extra-box">
            <h3> Pendidikan</h3>
            <ul>
                <li><strong>Universitas Muhammadiyah Semarang</strong> — S1 Teknologi Informasi (2022 - Sekarang)</li>
                <li>Fokus pada pengembangan web, pemrograman, dan sistem informasi.</li>
            </ul>
        </div>
        <div class="extra-box">
            <h3> Hobi & Minat</h3>
            <ul>
                <li>Mendesain UI/UX modern</li>
                <li>Mengembangkan website interaktif</li>
            </ul>
        </div>
    </div>
</section>

@endsection
