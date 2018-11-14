<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    protected $table ="loaisp";
    public $timestamps = false;
	protected $primaryKey = 'idLoai';
	
    public function chungloai()
    {
    	return $this->belongsTo('App\chungloai','idCL','idCL');
    }

    public function dienthoai()
    {
    	return $this -> hasMany ('App\dienthoai','idDT','idDT');
    }
}
