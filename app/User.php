<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use SoftDeletes;
    protected $fillable = [
    'first_name', 'last_name', 'is_active', 'email', 'photo_id', 'password'
    ];

   /* protected $guarded = ['id'];*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**methods van user class**/
    /**ELOQUENT RELATIONS (ORM)**/
    public function roles(){
        return $this->belongsToMany('App\Role', 'user_role');
    }
    public function photo(){
        return $this->belongsTo('App\Photo');
    }
    public function posts(){
        return $this->hasMany('App\Post');
    }
    public function orders(){
        return $this->hasMany('App\Order');
    }
    public function address(){
        return $this->belongsTo(User::class);
    }

    /**added functions**/
    public function isAdmin(){
        foreach($this->roles as $role){
            if($role->name == 'administrator' && $this->deleted_at == null){
                return true;
            }
        }
    }

}
