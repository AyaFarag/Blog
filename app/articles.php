<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    protected $primaryKey = 'id_articles';

    protected $fillable = [
        'title', 'content','owner_id',
    ];
}
