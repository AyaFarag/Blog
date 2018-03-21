<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    protected $primaryKey = 'id_reviews';

    protected $fillable = [
        'stars','owner_id','article_id'
    ];

    public function reviews()
    {
        return $this->belongsTo('App\reviews');
    }
    
    public function articles()
    {
        return $this->hasOne('App\articles');
    }

    public function user()
    {
        return $this->hasOne('App\comments');
    }
}
