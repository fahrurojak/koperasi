@extends('layouts.main')

@section('content')
    <h1>Detail Simpanan Wajib</h1>

    <p><strong>Tanggal:</strong> {{ $mandatorySaving->date }}</p>
    <p><strong>Kode Nasabah:</strong> {{ $mandatorySaving->customer->code }}</p>
    <p><strong>Nama Nasabah:</strong> {{ $mandatorySaving->customer->name }}</p>
    <p><strong>Jumlah Bayar:</strong> {{ $mandatorySaving->amount }}</p>

    <a href="{{ route('mandatory-saving.index') }}" class="btn btn-primary">Kembali</a>
@endsection
