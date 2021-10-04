<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $fillable=['nombre','marca','descrpcion','costo'];

    public function marca(){
    	return $this->belongsTo('App\Marca');
    }
}
