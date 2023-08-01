@extends('layout1.main2')
@section('username','Era Fazira')
@section('content')

<h4><b>Data Master</b></h4>
<br>
<a href="{{ asset('peminjam/tambah')  }}"><span class="badge badge-success">Tambah Data</span></a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>NIM Peminjam</td>
    <td><b>Nama Peminjam</td>
    <td><b>Alamat Peminjam</td>
    <td><b>Kelas Peminjam</td>
    <td><b>Jurusan Peminjam</td>
    <td><b>No Hp</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($peminjam as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->nim_peminjam }}</td>
    <td>{{ $rows->nama_peminjam }}</td>
    <td>{{ $rows->alamat }}</td>
    <td>{{ $rows->kelas_peminjam}}</td>
    <td>{{ $rows->jurusan }}</td>
    <td>{{ $rows->nohp }}</td>
    <td>
        <a href="{{ asset('peminjam/edit/'.$rows->id ) }}"><span class="badge badge-warning">Edit</span></a>
        <a href="{{ url('peminjam/delete/'.$rows->id ) }}"><span class="right badge badge-danger">Del</span></a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection