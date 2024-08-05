@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">
                <h1 class="h4 mb-0">Data Nasabah</h1>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th class="text-secondary">Kode Nasabah</th>
                        <td>{{ $customer->code }}</td>
                    </tr>
                    <tr>
                        <th class="text-secondary">Nama Nasabah</th>
                        <td>{{ $customer->name }}</td>
                    </tr>
                    <tr>
                        <th class="text-secondary">Alamat Nasabah</th>
                        <td>{{ $customer->address }}</td>
                    </tr>
                    <tr>
                        <th class="text-secondary">Telepon Nasabah</th>
                        <td>{{ $customer->phone }}</td>
                    </tr>
                </table>
                <a href="{{ route('customer.index') }}" class="btn btn-secondary btn-sm mt-3">Kembali ke Daftar Nasabah</a>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="h5 mb-0">Riwayat Simpanan Wajib</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($customer->mandatorySavings as $index => $mandatorySaving)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $mandatorySaving->date }}</td>
                                    <td>Rp {{ number_format($mandatorySaving->amount, 0, ',', '.') }}</td>
                                </tr>
                                @php
                                    $total += $mandatorySaving->amount;
                                @endphp
                            @endforeach
                            <tr>
                                <td colspan="2" class="fw-bold">Total Simpanan Wajib</td>
                                <td class="fw-bold">Rp {{ number_format($total, 0, ',', '.') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
