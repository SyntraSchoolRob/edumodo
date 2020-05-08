<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Photo extends Model
{
    //
    use Notifiable;
    use SoftDeletes;

    protected $uploads = '/images/';
    protected $fillable = [
        'file'
    ];
    public function getFileAttribute($photo){
        return $this->uploads . $photo;
    }


}
