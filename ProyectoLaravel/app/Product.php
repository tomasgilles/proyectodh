<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;
    public $guarded = [];

    public function user(){
      return $this->belongsTo('App\User', 'user_id');
    }

    public function images(){
      return $this->hasMany('App\ImagesProduct', 'product_id');
    }
}
