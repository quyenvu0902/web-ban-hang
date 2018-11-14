<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\chungloai;
use App\loaisp;
use App\dienthoai;
Route::get('/', function () {
    return view('welcome');
});
route::get('myview','mycontroller@myview');

route::get('trangchu',function(){
	return view('layouts.trangchu');
});
route::group(['prefix'=>'admin'],function(){
	
	route::group(['prefix'=>'chungloai'],function(){

		route::get('danhsach','chungloaicontroller@getdanhsach');

		route::get('sua/{idCL}','chungloaicontroller@getsua');
		route::post('sua/{idCL}','chungloaicontroller@postsua');
			
		route::get('them','chungloaicontroller@getthem');
		route::post('them','chungloaicontroller@postthem');

		route::get('xoa/{idCL}','chungloaicontroller@getxoa');
		
	});
	
	route::group(['prefix'=>'loaisp'],function(){

		route::get('danhsach','loaispcontroller@getdanhsach');

		route::get('sua/{idLoai}','loaispcontroller@getsua');
		route::post('sua/{idLoai}','loaispcontroller@postsua');
			
		route::get('them','loaispcontroller@getthem');
		route::post('them','loaispcontroller@postthem');

		route::get('xoa/{idLoai}','loaispcontroller@getxoa');
		
	});
	route::group(['prefix'=>'dienthoai'],function(){

		route::get('danhsach','dienthoaicontroller@getdanhsach');

		route::get('sua/{idDT}','dienthoaicontroller@getsua');
		route::post('sua/{idDT}','dienthoaicontroller@postsua');
			
		route::get('them','dienthoaicontroller@getthem');
		route::post('them','dienthoaicontroller@postthem');

		route::get('xoa/{idDT}','dienthoaicontroller@getxoa');
	});

});

Route::get('thu', function () {
    return view('gieodienadmin.catchuoi');
});

	
	


	
	
