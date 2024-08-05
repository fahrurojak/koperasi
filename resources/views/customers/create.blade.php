@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ERROR!</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h1 class="h4 mb-0">Pendaftaran Nasabah</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('customer.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="code" class="form-label">Kode Nasabah</label>
                        <input type="text" name="code" id="code" class="form-control" placeholder="XXXX">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Nasabah</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nama">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Telepon Nasabah</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="08xxxx">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat Nasabah</label>
                        <textarea name="address" id="address" cols="30" rows="3" class="form-control" placeholder="Alamat"></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
