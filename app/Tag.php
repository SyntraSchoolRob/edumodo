<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function posts(){
        $this->belongsToMany('App\Post', 'post_tag');
    }
}
