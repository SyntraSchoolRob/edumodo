<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id', 'schooltype_id', 'photo_id', 'title', 'price', 'description', 'slug',
    ];

    public function photo() {
        return $this->belongsTo(Photo::class);
    }
    public function orders(){
        return $this->belongsToMany('App\Order', 'order_details');
    }
    public function schooltype() {
        return $this->belongsTo(Schooltype::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}

