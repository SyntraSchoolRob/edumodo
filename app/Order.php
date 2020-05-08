<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    //
    use Notifiable;
    use SoftDeletes;

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
