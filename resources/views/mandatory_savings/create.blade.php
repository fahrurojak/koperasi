@extends('layouts.main')

@section('content')
    <h1>Setor Simpanan Wajib</h1>

    <form action="{{ route('mandatory-saving.store') }}" method="post">
        @csrf

        <div class="mb-2">
            <label for="nasabah">Nasabah</label>
            <select name="customer_id" id="nasabah" class="form-select">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->code . ' - ' . $customer->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-2">
            <label for="amount">Jumlah Bayar</label>
            <input type="number" name="amount" placeholder="Jumlah Bayar" class="form-control" id="amount">
        </div>

        <div class="mb-2">
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>

    </form>
@endsection
