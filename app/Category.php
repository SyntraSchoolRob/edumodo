<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use Notifiable;
    use SoftDeletes;
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
