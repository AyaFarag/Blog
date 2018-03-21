<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articlesMedia extends Model
{
    public $table = 'articles_media';
    
    protected $fillable = [
        'article_id', 'media_id'
    ];

    public function articlesMedia()
    {
        return $this->belongsTo('App\articlesMedia');
    }
    
    public function articles()
    {
        return $this->belongsTo('App\articles');
    }
    public function media()
    {
        return $this->belongsTo('App\media');
    }
}
