<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chungloai extends Model
{

    protected $table = "chungloai";
    protected $primaryKey = 'idCL';
	public $timestamps = false;
	
    public function loaisp()
    {
    	return $this->hasMany('App\loaisp','idCL','idCL');
    }

    public function dienthoai()
    {
    	return $this ->hasManyThrough('App\dienthoai','App\loaisp','idCL','idLoai','idCL');
    }
}
