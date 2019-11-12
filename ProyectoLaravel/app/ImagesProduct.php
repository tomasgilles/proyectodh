<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagesProduct extends Model
{
    public $guarded = [];
    public $timestamps = false;

    public function product(){
      return $this->belongsTo('App\Product', 'product_id');
    }
}
