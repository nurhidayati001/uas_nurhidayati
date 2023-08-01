<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Katalog_model;

class KatalogController extends Controller
{
    public function index (){
       // return ("Testing Katalog");
       $mykatalog = new Katalog_model();
        $katalog = $mykatalog->tampil_katalog();
        
        $data = array('katalog' => $katalog);
        return view('katalog/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('katalog/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = DB::table('katalog')
         ->insert([
             'nama_katalog' => $request->nama_katalog,
             'penerbit'  =>  $request->penerbit,
             'pengarang'  =>  $request->pengarang,
         ]);
         return redirect('katalog');
     }

     public function delete ($id_katalog){
        $query = \DB::table('katalog')->where('id',$id_katalog)->delete();
        return redirect('katalog');
    }

    public function edit($id_katalog){
        $data['katalog'] = Katalog_model::where('id',$id_katalog)->first();
        return view('katalog/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Edit Proses');
        $query = Katalog_model::where('id',$request->id_katalog)
        ->update([
            'nama_katalog' => $request->nama_katalog,
             'penerbit'  =>  $request->penerbit,
             'pengarang'  =>  $request->pengarang,
        ]);
        return redirect('katalog');
    }

     
}
