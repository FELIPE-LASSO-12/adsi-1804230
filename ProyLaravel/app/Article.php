<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

	protected $fillabel = [
    	'name',
    	'image',
    	'content',
    	'user_id',
    	'category_id',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function category(){
        return $this->belongsTo('App\Categories');
    }
}