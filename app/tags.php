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
        // prameters are (model that you are calling it , intermadery table name , fk for current model,fk that join to)
        return $this->belongsToMany('App\articles','article_tag','fk_tag_id','fk_article_id');
    }

}
