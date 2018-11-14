<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    protected $table = "comment";

    public function dienthoai ()
    {
    	return $this->belongsTo('App\dienthoai','idDT','id_comment');
    }

    
}

