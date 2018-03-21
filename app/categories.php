<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $primaryKey = 'id_category';

    protected $fillable = [
        'name', 'describtion','parent_id','article_id'
    ];

    public function categories()
    {
        return $this->hasMany('App\categories');
    }
    
    public function articles()
    {
        return $this->hasMany('App\articles');
    }
}
