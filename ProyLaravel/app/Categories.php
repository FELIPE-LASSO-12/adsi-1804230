<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillabel = [
    	'name',
    	'image',
    	'description',
    ];

    public function article(){
        return $this->hasOne('App\Article');
    }
}
