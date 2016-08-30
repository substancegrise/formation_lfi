<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    public $table = 'articles';
    protected $fillable = [
        'titre','description', 'content','adresse','date_event','media_id', 'article_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
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
