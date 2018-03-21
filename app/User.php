<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id_users';

    protected $fillable = [
        'username', 'email', 'phone','password','gender',
        'adress','birthdate','profileImage','coverImage'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function user()
    {
        return $this->hasOne('App\user');        
    }

    public function admin()
    {
        return $this->hasOne('App\admin');
    }
    
    public function members()
    {
        return $this->hasOne('App\members');
    }
    
    public function articles()
    {
        return $this->hasMany('App\articles');
    }

    public function emailSubscribe()
    {
        return $this->hasOne('App\emailSubscribers');
    }
   
    public function comments()
    {
        return $this->hasMany('App\comments');
    }

    public function reviews()
    {
        return $this->hasOne('App\reviews');
    }

    public function media()
    {
        return $this->hasMany('App\media');
    }

}
