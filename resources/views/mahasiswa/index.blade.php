@extends('layout')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-semibold mb-0"> Daftar Mahasiswa</h4>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">
            + Tambah
        </a>
    </div>

    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>IPK</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mahasiswas as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td class="fw-medium">{{ $m->nama }}</td>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->jurusan }}</td>
                    <td>
                        <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">
                            {{ $m->ipk }}
                        </span>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('mahasiswa.edit', $m->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('mahasiswa.destroy', $m->id) }}"
                              method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button"
                                    class="btn btn-danger btn-sm delete-btn">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-4">
                        Belum ada data mahasiswa
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
$('.delete-btn').click(function () {
    let form = $(this).closest('form');

    Swal.fire({
        title: 'Hapus data?',
        text: 'Data tidak bisa dikembalikan',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal',
        confirmButtonColor: '#2563eb',
        cancelButtonColor: '#e5e7eb',
        reverseButtons: true,
        backdrop: 'rgba(15,23,42,0.4)'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Menghapus...',
                allowOutsideClick: false,
                didOpen: () => Swal.showLoading()
            })
            form.submit();
        }
    });
});
</script>

@if (session('success'))
<script>
Swal.fire({
    toast: true,
    position: 'top-end',
    icon: 'success',
    title: '{{ session('success') }}',
    showConfirmButton: false,
    timer: 2500,
    timerProgressBar: true
});
</script>
@endif
@endpush
