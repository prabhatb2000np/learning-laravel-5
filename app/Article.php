<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body', 'published_at'];

    //Mutators
    public function setPublishedAtAtrribute($date) {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

//Scope 
    public function scopePublished($query) {
        $query->where('published_at', '>=', '2015-01-01 00:00:00');
    }

}
