<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'user_id', 'product', 'items', 'totalprice',
    ];

    public function products(){
        return $this->belongsToMany('App\Product', 'order_details');
    }
    public function user(){
        return $this->belongsTo('App\User')->withTrashed();
    }


}
