<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    public function article (){
    	return $this->belongsTo('App\Article');
}
