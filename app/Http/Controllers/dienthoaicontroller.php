<?php

namespace App\Http\Controllers;

use App\chungloai;
use App\dienthoai;
use App\loaisp;
use Illuminate\Http\Request;

class dienthoaicontroller extends Controller
{
    public function getdanhsach()
    {
        $dienthoai = dienthoai::all();

        return view('admin.dienthoai.danhsach', ['dienthoai' => $dienthoai]);
    }
    public function getthem()
    {
        $dienthoai = dienthoai::all();
        return view('admin.dienthoai.them', ['dienthoai' => $dienthoai]);
    }
    // public function postthem(Request $request)
    // {
    //     $this->validate($request,
    //         [
    //             'TenDT' => 'required | unique:dienthoai,TenDT|min:2|max:100',

    //         ],
    //         [
    //             'TenDT.required' => 'bạn chưa nhập tên ',
    //             'TenDT.unique'   => 'Tên Loại đã tồn tại',
    //             'TenDT.min'      => 'độ dài ngắn nhất là 2 ký tự',
    //             'TenDT.max'      => 'độ dài lớn nhất là 100 ký tự',

    //         ]);

    //     $dienthoai = new dienthoai();

    //     $dienthoai->TenDT  = $request->TenDT;
    //     $dienthoai->AnHien = $request->AnHien;
    //     $dienthoai->idLoai = $request->loaisp;
    //     $dienthoai->idCL   = $request->chungloai;
    //     $dienthoai->save();

    // }
    public function getsua($idDT)
    {

    }

    public function postsua(Request $request, $idDT)
    {

    }
    public function getxoa($idDT)
    {
        $dienthoai = dienthoai::find($idDT);
        $dienthoai->delete();
        return redirect('admin/dienthoai/danhsach')->with('thongbao', 'đã xóa');

    }
}
