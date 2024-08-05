@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Ubah Pinjaman</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('loan.update', $loan->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="code" class="form-label">Kode</label>
                    <input type="text" class="form-control" id="code" name="code" value="{{ $loan->code }}" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $loan->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Jumlah Pinjaman</label>
                    <input type="number" class="form-control" id="amount" name="amount" value="{{ $loan->amount }}" required>
                </div>
                <div class="mb-3">
                    <label for="term" class="form-label">Jangka Waktu (bulan)</label>
                    <input type="number" class="form-control" id="term" name="term" value="{{ $loan->term }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('loan.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
