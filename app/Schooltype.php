<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Schooltype extends Model
{
    use Notifiable;
    use SoftDeletes;
    protected $fillable = [
        'type',
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
