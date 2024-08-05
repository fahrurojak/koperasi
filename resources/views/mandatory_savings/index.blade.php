@extends('layouts.main')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-dismiss="alert" aria-hidden="true"></button>
            <h6><i class="icon fas fa-check"></i> {{ $message }} </h6>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a href="{{ route('mandatory-saving.create') }}" class="btn btn-success float-end">Tambah Data</a>
        </div>

        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Kode Nasabah</th>
                        <th>Nama Nasabah</th>
                        <th>Jumlah bayar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mandatorySavings as $mandatorySaving)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mandatorySaving->date }}</td>
                            <td>{{ $mandatorySaving->customer->code }}</td>
                            <td>{{ $mandatorySaving->customer->name }}</td>
                            <td>{{ $mandatorySaving->amount }}</td>
                            <td class="d-flex">
                                <a href="{{ route('mandatory-saving.show', $mandatorySaving->id) }}" class="btn btn-info btn-sm me-1">
                                    <i class="fas fa-eye"></i> Lihat
                                </a>
                                <a href="{{ route('mandatory-saving.edit', $mandatorySaving->id) }}" class="btn btn-warning btn-sm me-1">
                                    <i class="fas fa-edit"></i> Ubah
                                </a>
                                <form action="{{ route('mandatory-saving.destroy', $mandatorySaving->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
