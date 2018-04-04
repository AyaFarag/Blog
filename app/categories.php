<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class categories extends Model
{
    protected $primaryKey = 'id';

    protected $table = "categories";

    protected $fillable = [
        'name'
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
