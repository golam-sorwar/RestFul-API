<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Review;

class Product extends Model
{

    protected $fillable=[
      'name','details','price','stock','discount'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
