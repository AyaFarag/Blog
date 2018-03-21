<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $primaryKey = 'id_comments';

    protected $fillable = [
        'content','owner_id','article_id','parent_id'
    ];

    public function comments()
    {
        return $this->hasMany('App\comments');
    }

    public function articles()
    {
        return $this->belongsTo('App\articles');
    }

    public function user()
    {
        return $this->belongsTo('App\user');
    }
}
