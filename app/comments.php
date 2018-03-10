<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $primaryKey = 'id_comments';

    protected $fillable = [
        'content','owner_id','article_id','parent_id'
    ];
}
