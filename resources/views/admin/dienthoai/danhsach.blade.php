@extends('admin.layouts.index')

@section('content')
<div class="container-fluid">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        QUẢN TRỊ ĐIỆN THOẠI
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>
                                        idDT/ngày/số lần xem/sl tồn
                                    </th>
                                    <th>
                                        Tên điện thoại/giá
                                    </th>
                                    <th>
                                        Tên Chủng Loại/Tên Loại
                                    </th>
                                    <th>
                                        hình ảnh
                                    </th>
                                    <th>
                                        Mô tả
                                    </th>
                                    <th>
                                        Ẩn Hiện
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dienthoai as $dt)
                                <tr>
                                    <td>
                                        <p>
                                            id:{{$dt->idDT}}
                                        </p>
                                        <p>
                                            ngay:{{$dt->NgayCapNhat}}
                                        </p>
                                        <p>
                                            xem :{{$dt->SoLanXem}}
                                        </p>
                                        <p>
                                            sl tồn:{{$dt->SoLuongTonKho}}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            Tên:{{$dt->TenDT}}
                                        </p>
                                        <p>
                                            giá:{{$dt->Gia}}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            chủng loại:{{$dt->loaisp->chungloai->TenCL}}
                                        </p>
                                        <p>
                                            loại: {{$dt->loaisp->TenLoai}}
                                        </p>
                                    </td>
                                    <td>
                                        <img width="100px" src="img/upload/hinhchinh/{{$dt->urlHinh}}">
                                        
                                    </td>
                                    <td>
                                        <p>
                                            <?php
                                                if(strlen($dt->
                                            MoTa) > 50)
                                {
                                    $output = mb_substr($dt->MoTa, 0, 50, "UTF-8");
                                    while(substr($output, -1) !=" ")
                                    {
                                        $output = substr($output, 0, strlen($output)-1);
                                    }
                                    $output = $output." ...";
                                    echo $output;
                                }
                                else
                                    echo $dt->MoTa;
                                                ?>
                                        </p>
                                    </td>
                                    <td>
                                        {{$dt->AnHien}}
                                    </td>
                                    <td>
                                        <a class="btn bg-blue waves-effect" href="admin/dienthoai/sua/{{$dt->idDT}}">
                                            Sửa
                                        </a>
                                        <a class="btn bg-red waves-effect" href="admin/dienthoai/xoa/{{$dt->idDT}}" onclick="return confirm('Xóa hả')">
                                            Xóa
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Examples -->
<!-- Exportable Table -->
<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
        <!-- Jquery DataTable Plugin Js -->
        <script src="plugins/jquery-datatable/jquery.dataTables.js">
        </script>
        <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js">
        </script>
        <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js">
        </script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js">
        </script>
        <script src="plugins/jquery-datatable/extensions/export/jszip.min.js">
        </script>
        <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js">
        </script>
        <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js">
        </script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js">
        </script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js">
        </script>
        <!-- Custom Js -->
        <script src="js/pages/tables/jquery-datatable.js">
        </script>
        @endsection
    </link>
</link>