<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    protected $primaryKey = 'id';

    protected $table = "tags";

    protected $fillable = [
        'name'
    ];

    public function articles()
    {
        return $this->belongsToMany('App\articles','article_tag','id','id_articles');
    }

}
