@extends('layouts.app')

@section('title', 'Berita | My App')

@section('content')

<!-- Hero Section -->
<section class="hero-berita">
  <div class="hero-overlay"></div>
  <div class="hero-text">
      <h2>Berita & Informasi Terbaru</h2>
      <p>Dapatkan kabar terkini seputar kegiatan, prestasi, dan inovasi mahasiswa Unimus.</p>
  </div>
</section>

<!-- Konten Berita -->
<div class="news-page-container">

  <!-- Konten Utama -->
  <div class="main-news">
      <h2 class="section-title">📰 Daftar Berita Terbaru</h2>

      <div class="news-grid">

          <div class="news-card">
              <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80" alt="Mahasiswa Unimus Raih Juara">
              <div class="news-content">
                  <h3>Mahasiswa Unimus Raih Juara Lomba Inovasi Digital Nasional</h3>
                  <p>Prestasi membanggakan kembali diraih oleh mahasiswa Unimus dalam ajang nasional inovasi digital 2025 yang diselenggarakan oleh Kemendikbud.</p>
                  <a href="#" class="btn btn-small">Baca Selengkapnya</a>
              </div>
          </div>

          <div class="news-card">
              <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80" alt="Bakti Sosial HIMTI">
              <div class="news-content">
                  <h3>Kegiatan Bakti Sosial HIMTI Berlangsung di Desa Rejosari</h3>
                  <p>Mahasiswa turun langsung ke masyarakat untuk berbagi dan memberikan dampak positif di lingkungan sekitar.</p>
                  <a href="#" class="btn btn-small">Baca Selengkapnya</a>
              </div>
          </div>

          <div class="news-card">
              <img src="https://images.unsplash.com/photo-1531058020387-3be344556be6?auto=format&fit=crop&w=800&q=80" alt="Seminar Nasional TI">
              <div class="news-content">
                  <h3>Seminar Nasional Teknologi Informasi 2025 Sukses Digelar</h3>
                  <p>Event tahunan ini dihadiri ratusan peserta dari berbagai universitas dan menghadirkan pembicara profesional dari industri teknologi.</p>
                  <a href="#" class="btn btn-small">Baca Selengkapnya</a>
              </div>
          </div>

          <div class="news-card">
              <img src="https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?auto=format&fit=crop&w=800&q=80" alt="Program Kampus Hijau">
              <div class="news-content">
                  <h3>Unimus Luncurkan Program Kampus Hijau</h3>
                  <p>Langkah menuju kampus ramah lingkungan mulai dilakukan dengan gerakan menanam pohon di area kampus dan penggunaan energi hijau.</p>
                  <a href="#" class="btn btn-small">Baca Selengkapnya</a>
              </div>
          </div>

          <div class="news-card">
              <img src="https://images.unsplash.com/photo-1529078155058-5d716f45d604?auto=format&fit=crop&w=800&q=80" alt="PKM Lolos DIKTI">
              <div class="news-content">
                  <h3>Tim PKM Unimus Berhasil Lolos Pendanaan DIKTI</h3>
                  <p>Kreativitas mahasiswa Unimus terus berkembang, salah satunya dengan lolosnya proposal PKM tahun ini untuk program pengabdian masyarakat.</p>
                  <a href="#" class="btn btn-small">Baca Selengkapnya</a>
              </div>
          </div>

      </div>
  </div>

  <!-- Sidebar -->
  <aside class="sidebar">
      <div class="sidebar-section">
          <h3>🔍 Cari Berita</h3>
          <input type="text" placeholder="Ketik judul berita...">
      </div>

      <div class="sidebar-section">
          <h3>🏷️ Kategori</h3>
          <ul>
              <li><a href="#">Kampus</a></li>
              <li><a href="#">Akademik</a></li>
              <li><a href="#">Prestasi</a></li>
              <li><a href="#">Kegiatan</a></li>
          </ul>
      </div>

      <div class="sidebar-section">
          <h3>🔥 Berita Populer</h3>
          <ul>
              <li><a href="#">Mahasiswa Raih Medali Emas PIMNAS</a></li>
              <li><a href="#">Dosen TI Rilis Buku Baru</a></li>
              <li><a href="#">Workshop AI Sukses Digelar</a></li>
          </ul>
      </div>
  </aside>
</div>

@endsection
