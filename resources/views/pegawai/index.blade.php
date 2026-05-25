@extends('template')

@section('title', 'Data Pegawai')

@section('konten')
<center>
	
<p>Cari Data Pegawai :</p>
<form action="/pegawaicari" method="GET" class="d-flex justify-content-center gap-3">
	<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ request('cari') }}">
	<input class="btn btn-secondary" type="submit" value="CARI">
</form>

<br/>

<table class="table table-striped table-hover">
	<tr>
		<th>Nama</th>
		<th>Jabatan</th>
		<th>Umur</th>
		<th>Alamat</th>
		<th>Opsi</th>
	</tr>
	@foreach($pegawai as $p)
	<tr>
		<td>{{ $p->pegawai_nama }}</td>
		<td>{{ $p->pegawai_jabatan }}</td>
		<td>{{ $p->pegawai_umur }}</td>
		<td>{{ $p->pegawai_alamat }}</td>
		<td>
			<a class="btn btn-warning btn-sm" href="/pegawaiedit{{ $p->pegawai_id }}">Edit</a>
			&nbsp;
			<a class="btn btn-danger btn-sm" href="/pegawaihapus/{{ $p->pegawai_id }}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>
<ul class="pagination" style="margin:20px 0">
{{ $pegawai->links() }}
</ul>
<a href="/pegawaitambah" class="btn btn-primary">Tambah Pegawai Baru</a>

<!-- <br/>
Halaman : {{ $pegawai->currentPage() }} <br/>
Jumlah Data : {{ $pegawai->total() }} <br/>
Data Per Halaman : {{ $pegawai->perPage() }} <br/>
<br/> -->
</center>

@endsection