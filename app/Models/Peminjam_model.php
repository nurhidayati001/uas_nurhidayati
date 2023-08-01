<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam_model extends Model
{
    use HasFactory;
    protected $table ="peminjam";
    protected $primaryKey ="id_peminjam";

    public function tampil_peminjam(){
        $query = \DB::table('peminjam')->get();
        return $query;
    }
}
