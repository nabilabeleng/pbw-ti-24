@extends('layouts.app')

@section('title', 'Contact | My App')

@section('content')

<div class="contact-container">
    <div class="contact-header">
        <h2>Hubungi Saya</h2>
        <p>Jika kamu ingin berkomunikasi, bekerja sama, atau sekadar bertanya — silakan kirim pesan melalui formulir di bawah ini.</p>
    </div>

    <div class="contact-content">

        <!-- Informasi Kontak -->
        <div class="contact-info">
            <h3>Informasi Kontak</h3>
            <p><strong>Email:</strong> nengfams@gmail.com</p>
            <p><strong>Telepon:</strong> +62 854-3308-2669</p>
            <p><strong>Alamat:</strong> Universitas Muhammadiyah Semarang, Jawa Tengah</p>

            <div class="social-links">
                <a href="https://www.instagram.com/nf.future/" target="_blank">Instagram</a>
                <a href="https://www.linkedin.com/in/neneng-fajriyati-60bb73375/" target="_blank">LinkedIn</a>
                <a href="https://github.com/nengfajriyati/BelajarLaravel_nengFa.git" target="_blank">GitHub</a>
            </div>
        </div>

        <!-- Formulir Kontak -->
        <div class="contact-form">
            <form action="#" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama kamu" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email aktif" required>
                </div>

                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tulis pesanmu di sini..." required></textarea>
                </div>

                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>

@endsection
