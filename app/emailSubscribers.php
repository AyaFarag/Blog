<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emailSubscribers extends Model
{
    protected $primaryKey = 'id_emailSubscriber';

    protected $fillable = [
        'email','owner_id',
    ];

    public function subscribe()
    {
        return $this->hasOne('App\emailSubscribers');
    }

    public function user()
    {
        return $this->hasOne('App\user');
    }
}
