@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Detail Anggota</h5>
        </div>

        <div class="card-body">
            <p><strong>Kode:</strong> {{ $member->code }}</p>
            <p><strong>Nama:</strong> {{ $member->name }}</p>
            <p><strong>Email:</strong> {{ $member->email }}</p>
            <p><strong>Telepon:</strong> {{ $member->phone }}</p>
            <p><strong>Alamat:</strong> {{ $member->address }}</p>
            <a href="{{ route('member.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection
