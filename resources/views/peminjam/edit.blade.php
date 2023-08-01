@extends('layout1.main2')
@section('username','Era Fazira')
@section('content')


<h4><b>Edit Data Peminjam</b></h1>
<br>
<form action="{{ asset('peminjam/edit_proses') }}" method="POST">

@csrf
<input type="hidden" name="id_peminjam" value="{{$peminjam->id}}">
<div class="mb-3 row">
    <label for="nim_peminjam" class="col-sm-2 col-form-label">NIM Peminjam</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nim_peminjam" value="{{$peminjam->nim_peminjam}}" name="nim_peminjam">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Nama Peminjam</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_peminjam" value="{{$peminjam->nama_peminjam}}" name="nama_peminjam">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat" value="{{$peminjam->alamat}}" name="alamat">
    </div>
</div>
<div class="mb-3 row">
    <label for="kelas_peminjam" class="col-sm-2 col-form-label">Kelas Peminjam</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="kelas_peminjam" value="{{$peminjam->kelas_peminjam}}" name="kelas_peminjam">
    </div>
</div>
<div class="mb-3 row">
    <label for="jurusan" class="col-sm-2 col-form-label">jurusan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="jurusan" value="{{$peminjam->jurusan}}" name="jurusan">
    </div>
</div>
<div class="mb-3 row">
    <label for="nohp" class="col-sm-2 col-form-label">No hp</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nohp" value="{{$peminjam->nohp}}" name="nohp">
    </div>
</div>
<input type="submit" value="Simpan">
</form>
@endsection