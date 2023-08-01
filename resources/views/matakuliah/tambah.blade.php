@extends('layout1.main2')
@section('username','Nurhidayati')
@section('content')


<h4><b>Tambah Peminjam</b></h4>
<br>
<form action="{{ route('simpan_matkul') }}" method="POST">
@csrf
@method('PUT')
<div class="mb-3 row">
    <label for="nim_peminjam" class="col-sm-2 col-form-label">Kode Matakuliah</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nim_peminjam" name="kode">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Nama Matakuliah</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_peminjam" name="nama">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Bobot</label>
    <div class="col-sm-10">
    <input type="number" class="form-control" id="alamat" name="bobot">
    </div>
</div>
<input type="submit" class="btn btn-xm btn-primary" value="Simpan">
</form> 

@endsection