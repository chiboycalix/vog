<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
   use \Illuminate\Auth\Authenticatable;
   use Notifiable;

    protected $fillable = [
    'name', 'email', 'password',
    ];
 
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function posts(){
        return $this->hasMany('App\Post');
    }


}
