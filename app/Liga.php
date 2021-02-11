<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
    public function produks()
    {
    	return $this->hasMany(Produk::class,'liga_id','id');
    }
}
