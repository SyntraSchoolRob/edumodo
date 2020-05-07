<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Address extends Model
{
    //
    use Notifiable;
    use SoftDeletes;
    protected $fillable = [
        'street', 'city', 'state', 'zip', 'country_id',
    ];


    public function user(){
        return $this->belongsTo(Category::class);
    }
}
