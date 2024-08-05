@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Detail Pinjaman</h5>
        </div>

        <div class="card-body">
            <p><strong>Kode:</strong> {{ $loan->code }}</p>
            <p><strong>Nama:</strong> {{ $loan->name }}</p>
            <p><strong>Jumlah Pinjaman:</strong> Rp {{ number_format($loan->amount, 0, ',', '.') }}</p>
            <p><strong>Jangka Waktu (bulan):</strong> {{ $loan->term }}</p>
            <a href="{{ route('loan.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection
