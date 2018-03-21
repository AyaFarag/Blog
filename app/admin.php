<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    
    protected $primaryKey = 'id_admins';

    protected $fillable = [
        'name','user_id'
    ];

    public function admin()
    {
        return $this->hasOne('App\admin');
    }
    public function user()
    {
        return $this->hasOne('App\user');
    }


}
