<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'user_id', 'category_id', 'photo_id', 'title','slug', 'body'
    ];

    public function user(){
        return $this->belongsTo('App\User')->withTrashed();
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function comments(){
        return $this->hasMany('App\PostComment');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag', 'post_tag');
    }
    public function getRouteKeyName()
    {
       return 'slug'; //Post::where('slug',$post)->first();
    }
}
