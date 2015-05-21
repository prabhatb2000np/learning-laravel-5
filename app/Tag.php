<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {
//Fillable field for tags.
    protected $fillable=['name'];
	//Get the articles associated with the given tag.
public function articles(){
    return $this->belongsToMany('App\Article',"tags_pivot","article_identifier");
}
}
