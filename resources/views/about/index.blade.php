
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
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tentang Kami</h5>
        </div>

        <div class="card-body">
            <p>Selamat datang di halaman Tentang Kami.</p>
            <p>Informasi tentang perusahaan, visi, misi, dan sejarah akan ditampilkan di sini.</p>
        </div>
    </div>
</div>
@endsection
