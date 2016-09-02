<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    public $table = 'articles';
    protected $fillable = [
        'titre','description', 'content','adresse','date_event','media_id', 'article_id','uri'
    ];

    public function categorie()
    {
        return $this->belongsTo('App\Article_categorie');
    }

    public function media()
    {
        return $this->belongsTo('App\Media');
    }

    public function getDateEventAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y-h:i');
    }

    public function getTitreAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPublishedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function scopesearch($query, $word)
    {
        return $query->where('titre', 'like', '%' . $word . '%')
            ->orWhere('content', 'like', '%' . $word . '%');

    }

    public function scopetime($query)
    {
        $now = Carbon::now();

        return $query->where('date_event', '>', $now);
    }



}
