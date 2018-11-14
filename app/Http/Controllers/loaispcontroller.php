<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaisp;
use App\chungloai;


use Illuminate\Support\Facades\DB;

class loaispcontroller extends Controller
{
	public function getdanhsach()
	{
		$loaisp =loaisp::orderBy('idLoai','DESC')->get();
		
		
		return view('admin.loaisp.danhsach',['loaisp'=>$loaisp]);
	}
	public function getthem()
	{
		$chungloai = chungloai::all();
		return view('admin.loaisp.them',['chungloai'=>$chungloai]);
	}
	public function postthem(Request $request)
	{
		$this -> validate ($request,
			[
				'TenLoai' => 'required | unique:loaisp,TenLoai|min:2|max:100',
				
			],
			[
				'TenLoai.required' =>'bạn chưa nhập tên loại',
				'TenLoai.unique'=>'Tên Loại đã tồn tại',
				'TenLoai.min'=>'độ dài ngắn nhất là 2 ký tự',
				'TenLoai.max'=>'độ dài lớn nhất là 100 ký tự',
				
			]);
		

		$loaisp = new loaisp();

			$loaisp ->TenLoai = $request->TenLoai;
			$loaisp ->AnHien = $request->AnHien;
			$loaisp->idCL = $request->chungloai;
			$loaisp ->save();
		 	
		
		// $bien1 = $request->TenLoai;
		// $bien2 = $request->chungloai;
		// DB::table('loaisp')->insert([
		// 	'TenLoai'=>$bien1,
		// 	'idCL'=>$bien2,
		// ]);
		return redirect('admin/loaisp/danhsach')->with('thongbao','đã thêm thành công');
	}
	public function getsua($idLoai)
	{
		$chungloai = chungloai::all();
		$loaisp= loaisp::find($idLoai);
		return view ('admin.loaisp.sua',['loaisp'=>$loaisp,'chungloai'=>$chungloai]);
		
	}

	public function postsua(Request $request,$idLoai)
	{
		
		

		$this -> validate ($request,
			[
				'unique:loaisp,TenLoai|min:2|max:100',
				
			],
			[
				
				
				'TenLoai.min'=>'độ dài ngắn nhất là 2 ký tự',
				'TenLoai.max'=>'độ dài lớn nhất là 100 ký tự',
				
			]);
		$loaisp= loaisp::find($idLoai);
		$loaisp ->TenLoai = $request->TenLoai;
			$loaisp ->AnHien = $request->AnHien;
			$loaisp->idCL = $request->chungloai;
			$loaisp ->save();
			return redirect('admin/loaisp/sua/'.$idLoai) -> with('thongbao','sửa thành công');
	}
    public function getxoa($idLoai)
    {
    	$loaisp = loaisp::find($idLoai);
    	$loaisp->delete();
    	return redirect('admin/loaisp/danhsach') -> with('thongbao','đã xóa');
    	
    }
}

