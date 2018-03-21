<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    protected $primaryKey = 'id_media';

    protected $fillable = [
        'path', 'type','owner_id',
    ];

    public function media()
    {
        return $this->belongsTo('App\media');
    }

    public function articlesMedia()
    {
        return $this->hasMany('App\articlesMedia');
    }

    public function user()
    {
        return $this->belongsTo('App\user');
    }
}
