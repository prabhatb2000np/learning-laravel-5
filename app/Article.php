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
    protected $dates=['published_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //user_id is temporary
    protected $fillable = ['title', 'body', 'published_at','user_id'];

    //Mutators
    public function setPublishedAtAtrribute($date) {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }
/*
 * Get published at.
 */
    public function getPublishedAtAttribute($date){
        return new Carbon($date);
    }
//Scope 
    public function scopePublished($query) {
        $query->where('published_at', '>=', '2015-01-01 00:00:00');
    }
//An article is owned by a user
    public function user(){
       return $this->belongsTo('App\User');
    }
    //Get the tags associated with the given article.
    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
    //Get a list of tag ids associated with the current article.
    //@return array.
    public function getTagListAttribute(){
        return $this->tags->lists('id');
    }
    /*
     * 
     */
}
