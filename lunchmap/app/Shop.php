<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{   
    // shopモデルとcategoryモデルを関連付け
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
