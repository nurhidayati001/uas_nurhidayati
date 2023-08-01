<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjam_model;

class PeminjamController extends Controller
{
    public function index (){
       // return ("Testing Katalog");
       $mypeminjam = new Peminjam_model();
        $peminjam = $mypeminjam->tampil_peminjam();
        
        $data = array('peminjam' => $peminjam);
        return view('peminjam/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('peminjam/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('peminjam')
         ->insert([
             'nim_peminjam' => $request->nim_peminjam,
             'nama_peminjam' => $request->nama_peminjam,
             'alamat' => $request->alamat,
             'kelas_peminjam' => $request->kelas_peminjam,
             'jurusan'  =>  $request->jurusan,
             'nohp'  =>  $request->no_hp,
         ]);
         return redirect('peminjam');
    }

    public function delete ($id_peminjam){
        $query = \DB::table('peminjam')->where('id',$id_peminjam)->delete();
        return redirect('peminjam');
    }

    public function edit($id_peminjam){
        $data['peminjam'] = Peminjam_model::where('id',$id_peminjam)->first();
        return view('peminjam/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Edit Proses');
        $query = Peminjam_model::where('id',$request->id_peminjam)
        ->update([
            'nim_peminjam' => $request->nim_peminjam,
            'nama_peminjam' => $request->nama_peminjam,
            'alamat' => $request->alamat,
            'kelas_peminjam' => $request->kelas_peminjam,
            'jurusan'  =>  $request->jurusan,
            'nohp'  =>  $request->nohp,
        ]);
        return redirect('peminjam');
    }
}
