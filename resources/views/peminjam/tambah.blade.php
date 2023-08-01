@extends('layout1.main2')
@section('username','Era Fazira')
@section('content')


<h4><b>Tambah Peminjam</b></h4>
<br>
<form action="{{ asset('peminjam/tambah_proses') }}" method="POST">
@csrf

<div class="mb-3 row">
    <label for="nim_peminjam" class="col-sm-2 col-form-label">NIM Peminjam</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nim_peminjam" name="nim_peminjam">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Nama Peminjam</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
</div>
<div class="mb-3 row">
    <label for="kelas_peminjam" class="col-sm-2 col-form-label">Kelas Peminjam</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="kelas_peminjam" name="kelas_peminjam">
    </div>
</div>
<div class="mb-3 row">
    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="jurusan" name="jurusan">
    </div>
</div>
<div class="mb-3 row">
    <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="no_hp" name="no_hp">
    </div>
</div>
<input type="submit" value="Simpan">
</form> 

@endsection