@extends('template')

@section('title', 'Tambah Nilai Kuliah')

@section('konten')
    <div class="container">
        <h2>Tambah Data Nilai Kuliah</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('nilaikuliah.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>NRP</label>
                <input type="text" name="NRP" class="form-control" value="{{ old('NRP') }}" maxlength="6">
            </div>

            <div class="mb-3">
                <label>Nilai Angka</label>
                <input type="number" name="NilaiAngka" class="form-control" value="{{ old('NilaiAngka') }}" min="0" max="100">
            </div>

            <div class="mb-3">
                <label>SKS</label>
                <input type="number" name="SKS" class="form-control" value="{{ old('SKS') }}" min="1">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('nilaikuliah.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
