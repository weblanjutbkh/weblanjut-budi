<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table='keranjang';
    protected $primarykey='id_alat';
    protected $fillable=['nama_alat','jumlah','harga_sewa'];
    //
}
