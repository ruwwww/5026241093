@extends('template')

@section('title', 'Tambah Keranjang Belanja')

@section('konten')
    <div class="container">
        <h2>Tambah Keranjang Belanja</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('keranjangbelanja.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Kode Barang</label>
                <input type="text" name="KodeBarang" class="form-control" value="{{ old('KodeBarang') }}">
            </div>

            <div class="mb-3">
                <label>Jumlah</label>
                <input type="text" name="Jumlah" class="form-control" value="{{ old('Jumlah') }}">
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="text" name="Harga" class="form-control" value="{{ old('Harga') }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('keranjangbelanja.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection