@extends('dosen.layouts.main')

@section('content')
    <h1>Data Dosen</h1>
    <p>Halaman ini berisi informasi tentang data dosen</p>
    <p>Website ini dibuat untuk latihan Laravel sesuai materi perkuliahan.</p> <br>
    <a href="/tambahdosen" class="btn btn-success mb-3">Tambah Data +</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIP</th>
      <th scope="col">Email</th>
      <th scope="col">No. HP</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Nabila</td>
      <td>13246466774</td>
      <td>bila@gmail.com</td>
      <td>085345787654</td>
      <td>SBY</td>
      <td>
        <button type="button" class="btn btn-primary">Ubah</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
  </tbody>
</table>
@endsection
