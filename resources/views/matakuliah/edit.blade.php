@extends('layout1.main2')
@section('username','Era Fazira')
@section('content')


<h4><b>Edit Data Peminjam</b></h1>
<br>
<form action="{{ route('update_matkul') }}" method="POST">

@csrf
@method('PATCH')
<div class="mb-3 row">
    <label for="nim_peminjam" class="col-sm-2 col-form-label">Kode Matakuliah</label>
    <div class="col-sm-10">
    <input value="{{ $matakuliah->id }}" type="hidden" name="id">
    <input value="{{ $matakuliah->kode_matkul }}" type="text" class="form-control" id="nim_peminjam" name="kode">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Nama Matakuliah</label>
    <div class="col-sm-10">
    <input value="{{ $matakuliah->nama_matkul }}" type="text" class="form-control" id="nama_peminjam" name="nama">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Bobot</label>
    <div class="col-sm-10">
    <input value="{{ $matakuliah->bobot }}" type="number" class="form-control" id="alamat" name="bobot">
    </div>
</div>
<input type="submit" class="btn btn-sm btn-primary" value="Simpan">
</form>
@endsection