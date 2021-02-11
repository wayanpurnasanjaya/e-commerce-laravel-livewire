<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
	protected $fillable = [
        'jumlah_pesanan',
            'total_harga',
            'namaset',
            'nama',
            'nomor',
            'produk_id',
            'pesanan_id',
    ];

    public function pesanan()
    {
    	return $this->belongsTo(Pesanan::class,'pesanan_id','id');
    }
     public function produk()
    {
    	return $this->belongsTo(Produk::class,'produk_id','id');
    }
}
