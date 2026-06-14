@extends('template')

@section('title', 'Data Nilai Kuliah')

@section('konten')
    <div class="container">
        <h2>Data Nilai Kuliah</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('nilaikuliah.create') }}" class="btn btn-primary">Tambah Data</a>

        <br><br>

        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>

            @forelse($nilai as $n)
                <tr>
                    <td>{{ $n->ID }}</td>
                    <td>{{ $n->NRP }}</td>
                    <td>{{ $n->NilaiAngka }}</td>
                    <td>{{ $n->SKS }}</td>
                    <td>
                        @if ($n->NilaiAngka <= 40)
                            D
                        @elseif ($n->NilaiAngka <= 60)
                            C
                        @elseif ($n->NilaiAngka <= 80)
                            B
                        @else
                            A
                        @endif
                    </td>
                    <td>{{ $n->NilaiAngka * $n->SKS }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data.</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
