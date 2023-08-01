@extends('layout1.main2')
@section('username','Nurhidayati')
@section('content')

<h4><b>Data Matakuliah</b></h4>
<br>
<a href="{{ route('tambah_matkul') }}" class="btn btn-primary btn-xs mb-2">Tambah Data</span></a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>Kode</td>
    <td><b>Nama Matakuliah</td>
    <td><b>Bobot</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($matakuliah as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->kode_matkul }}</td>
    <td>{{ $rows->nama_matkul }}</td>
    <td>{{ $rows->bobot }}</td>
    <td>
        <a href="{{ route('edit_matkul',$rows->id) }}"><span class="badge badge-warning">Edit</span></a>
        <a href="{{ route('delete_matkul',$rows->id) }}"><span class="right badge badge-danger">Del</span></a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection