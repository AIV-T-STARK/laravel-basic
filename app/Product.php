<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    private $table = 'products';

    public function categories() {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
