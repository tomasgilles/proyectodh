<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $guarded = [];

    public function user(){
      return $this->belongsTo('App\User', 'user_id');
    }

    public function images(){
      return $this->hasMany('App\ImagesProduct', 'product_id');
    }
}
