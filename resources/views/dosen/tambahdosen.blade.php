@extends('dosen.layouts.main')

@section('content')
<h1>Tambah Data Dosen</h1>

<div class="col-8 justify-content-center">
<div class="card">
<div class="card-body">

<form action="/insertdata" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama dosen">
    </div>

    <div class="mb-3">
        <label for="nip" class="form-label">NIP</label>
        <input type="number" name="nip" class="form-control" id="nip" placeholder="Masukkan NIP">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email">
    </div>

    <div class="mb-3">
        <label for="nohp" class="form-label">No HP</label>
        <input type="text" name="nohp" class="form-control" id="nohp" placeholder="Masukkan nomor HP">
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat domisili">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
</div>

@endsection
