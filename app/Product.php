<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'category_id', 'schooltype_id', 'photo_id', 'title', 'price', 'description', 'slug',
    ];


    public function categories(){
        return $this->hasMany('App\Category');
    }
    public function schooltypes(){
        return $this->hasMany('App\Schooltype');
    }
}

