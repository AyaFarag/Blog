<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    protected $primaryKey = 'id_members';

    protected $fillable = [
        'name','nickName','user_id'
    ];

    public function user()
{
    return $this->hasOne('App\user');
}

    public function members()
{
    return $this->hasOne('App\members');
}

}

