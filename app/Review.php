<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Review extends Model
{

  protected $fillable=[
    'customer','review','star'
  ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
