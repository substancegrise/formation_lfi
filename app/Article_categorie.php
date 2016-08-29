<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_categorie extends Model
{
    public $table = 'articles_categories';

    public function article()
    {
        return $this->hasMany('App\Article');
    }

}
