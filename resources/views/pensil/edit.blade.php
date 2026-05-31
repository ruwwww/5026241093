@extends('template')

@section('title', 'Edit Pensil')

@section('konten')
<center>

<br />
<br />

<a href="/pensil" class="btn btn-info"> Kembali</a>

<br />
<br />

@foreach($pensil as $p)

<div class="card">
<div class="card-header">
Form Edit Data Pensil
</div>

<div class="card-body">
<form action="/pensilupdate" method="post">
{{ csrf_field() }}

<input type="hidden" name="id" value="{{ $p->kodepensil }}">

<div class="row mb-3">
<label for="merk" class="col-sm-2 col-form-label">Merk</label>
<div class="col-sm-10">
<input type="text" name="merk" id="merk" class="form-control" maxlength="30" required value="{{ $p->merkpensil }}">
</div>
</div>

<div class="row mb-3">
<label for="stock" class="col-sm-2 col-form-label">Stock</label>
<div class="col-sm-10">
<input type="number" name="stock" id="stock" class="form-control" required value="{{ $p->stockpensil }}">
</div>
</div>

<div class="row mb-3">
<label for="tersedia" class="col-sm-2 col-form-label">Tersedia (Y/N)</label>
<div class="col-sm-10">
<input type="text" name="tersedia" id="tersedia" class="form-control" maxlength="1" required value="{{ $p->tersedia }}">
</div>
</div>

<div class="row">
<div class="offset-sm-2 col-sm-10">
<input type="submit" value="Simpan Data" class="btn btn-primary">
</div>
</div>

</form>
</div>
</div>

@endforeach

</center>
@endsection
