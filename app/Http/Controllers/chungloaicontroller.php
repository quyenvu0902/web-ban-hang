<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\chungloai;
class chungloaicontroller extends Controller
{
	public function getdanhsach()
	{
		$chungloai =chungloai::orderBy('idCL','DESC')->get();
		
		return view('admin.chungloai.danhsach',['chungloai'=>$chungloai]);

	}
	public function getthem()
	{
		return view('admin.chungloai.them');
	}
	public function postthem(Request $request)
	{
		$this -> validate ($request,
			[
				'TenCL' => 'required|min:3|max:100|unique :chungloai,TenCL'
			],
			[
				'TenCL.required' => 'bạn chưa nhập tên Chủng loại',
				'TenCL.unique' => 'tên này đã tồn tại',
				'TenCL.min'=>'tên phải có ít nhất 3 đến 100 ký tự',
				'TenCL.max'=>'tên phải có ít nhất 3 đến 100 ký tự',
			]);
		$chungloai= new chungloai;
		$chungloai ->TenCL = $request ->TenCL;
		$chungloai->save();

		return redirect('admin/chungloai/them')->with('thongbao','thêm thành công');
	}
	public function getsua($idCL)
	{

		$chungloai = chungloai::find($idCL);
		return view('admin.chungloai.sua',['chungloai'=>$chungloai]);
	}

	public function postsua(Request $request,$idCL)
	{
		$chungloai= chungloai::find($idCL);

		$this->validate($request,
			[
				'TenCL' => 'required|unique:chungloai,TenCL|min:3|max:100'
			],
			[
				'TenCl.required' => 'bạn chưa nhập tên chủng loại',
				'TenCL.unique' => 'tên này đã tồn tại',
				'TenCL.min'=>'tên phải có ít nhất 3 đến 100 ký tự',
				'TenCL.max'=>'tên phải có ít nhất 3 đến 100 ký tự',
			]
		);
		
		$chungloai ->TenCL = $request ->TenCL;
		$chungloai ->AnHien = $request ->AnHien;
		
		$chungloai -> save();
		return redirect('admin/chungloai/sua/'.$idCL) -> with('thongbao','sửa thành công');
	}
    public function getxoa($idCL)
    {
    	$chungloai = chungloai::find($idCL);
    	$chungloai->delete();
    	return redirect('admin/chungloai/danhsach') -> with('thongbao','đã xóa');
    }
}
