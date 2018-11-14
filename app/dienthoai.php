<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dienthoai extends Model
{
    protected $table = "dienthoai";
    public $timestamps = false;
	protected $primaryKey = 'idDT';

    public function loaisp()
    {
    	return $this -> belongsTo ('App\loaisp','idLoai','idLoai');
    }

    public function comment()
    {
    	return $this->hasMany ('App\dienthoai','id_comment','id_comment');
    }
}
