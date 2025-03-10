<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;
    protected $table = 'peminjam';
    public function transaksi(){
        return $this->hasMany('App\Models\Transaksi','id_peminjam');
    }
}
