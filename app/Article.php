<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $table = 'articles';
    protected $fillable = ['media_id','description', 'content',];

}
