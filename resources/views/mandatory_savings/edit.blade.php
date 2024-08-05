@extends('layouts.main')

@section('content')
    <h1>Ubah Simpanan Wajib</h1>

    <form action="{{ route('mandatory-saving.update', $mandatorySaving->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-2">
            <label for="nasabah">Nasabah</label>
            <select name="customer_id" id="nasabah" class="form-select">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $customer->id == $mandatorySaving->customer_id ? 'selected' : '' }}>
                        {{ $customer->code . ' - ' . $customer->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-2">
            <label for="amount">Jumlah Bayar</label>
            <input type="number" name="amount" placeholder="Jumlah Bayar" class="form-control" id="amount" value="{{ $mandatorySaving->amount }}">
        </div>

        <div class="mb-2">
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>

    </form>
@endsection
