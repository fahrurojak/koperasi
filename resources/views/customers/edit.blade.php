@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ERROR!!!</strong>
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
                <h1 class="h4 mb-0">Update Data Nasabah #{{ $customer->code }}</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('customer.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $customer->id }}">

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Nasabah</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $customer->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Telepon Nasabah</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{ $customer->phone }}">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat Nasabah</label>
                        <textarea id="address" name="address" cols="30" rows="3" class="form-control">{{ $customer->address }}</textarea>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
