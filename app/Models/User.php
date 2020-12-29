<?php

namespace App\Models;

use Storage;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Auth\Authenticatable;
// use App\Traits\Friendable;
// use Laravel\Scout\Searchable;
use Illuminate\Notifications\Notifiable;

class User extends Model implements AuthenticatableContract,CanResetPasswordContract
{   
    use Notifiable;
    // use Friendable;
    // use Searchable;
    use HasFactory;
    use Authenticatable, CanResetPassword;


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this->hasMany('App\Models\post', 'user_id', 'id');
    }

    public function like(){
        return $this->hasMany('App\Models\Like');
    }
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
    public function friends(){
        return $this->hasMany('App\Models\Friends','user_id_1');
    }
    public function friendss(){
        return $this->hasMany('App\Models\Friends','user_id_2');
    }
}
