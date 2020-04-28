<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // THIS ARE THE CATEGORIES OF POSTS + PRODUCTS = SAME CATEGORIES
    protected $fillable = [
        'name'
    ];

    public function posts(){
        return $this->hasMany('App\Post');
    }
    public function products() {
        return $this->hasMany(Product::class);
    }



}
