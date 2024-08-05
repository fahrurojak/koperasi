@extends('layouts.main')

@section('content')
<div class="container mt-5">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h6 class="mb-0"><i class="fas fa-check-circle me-1"></i> {{ $message }}</h6>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Berita</h5>
            <a href="{{ route('news.create') }}" class="btn btn-light btn-sm">Tambah Data</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($news as $newsItem)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $newsItem->title }}</td>
                                <td>{{ $newsItem->date }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('news.show', $newsItem->id) }}" class="btn btn-info btn-sm me-1">
                                            <i class="fas fa-eye"></i> Lihat
                                        </a>
                                        <a href="{{ route('news.edit', $newsItem->id) }}" class="btn btn-warning btn-sm me-1">
                                            <i class="fas fa-edit"></i> Ubah
                                        </a>
                                        <form action="{{ route('news.destroy', $newsItem->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Belum ada berita.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
