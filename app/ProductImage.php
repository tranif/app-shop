<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    // obtener producto de una imagen
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
