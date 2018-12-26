<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // consultar categoria de un producto - product -> category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // // obtener imagenes para un producto - product -> images
    public function images(){ 
        return $this->hasMany(ProductImage::class);
    }
}
