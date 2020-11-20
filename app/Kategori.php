<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produk;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $guarded = [];

    public function produk()
    {
        return $this->belongsTo('App\Produk');
    }
}
