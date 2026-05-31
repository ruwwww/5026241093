@extends('template')

@section('title', 'Data Pensil')

@section('konten')
<center>
	
<p>Cari Data Pensil :</p>
<form action="/pensilcari" method="GET" class="d-flex justify-content-center gap-3">
	<input class="form-control" type="text" name="cari" placeholder="Cari Merk Pensil .." value="{{ request('cari') }}">
	<input class="btn btn-secondary" type="submit" value="CARI">
</form>

<br/>

<table class="table table-striped table-hover">
	<tr>
		<th>Kode Pensil</th>
		<th>Merk Pensil</th>
		<th>Stock Pensil</th>
		<th>Tersedia</th>
		<th>Opsi</th>
	</tr>
	@foreach($pensil as $p)
	<tr>
		<td>{{ $p->kodepensil }}</td>
		<td>{{ $p->merkpensil }}</td>
		<td>{{ $p->stockpensil }}</td>
		<td>{{ $p->tersedia }}</td>
		<td>
			<a class="btn btn-warning btn-sm" href="/pensiledit{{ $p->kodepensil }}">Edit</a>
			&nbsp;
			<a class="btn btn-danger btn-sm" href="/pensilhapus/{{ $p->kodepensil }}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>
<ul class="pagination" style="margin:20px 0">
{{ $pensil->links() }}
</ul>
<a href="/pensiltambah" class="btn btn-primary">Tambah Pensil Baru</a>

</center>

@endsection
