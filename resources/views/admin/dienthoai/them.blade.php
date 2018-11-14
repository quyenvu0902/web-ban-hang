@extends('admin.layouts.index')

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Thêm Loại Sản Phẩm
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
                @if(count($errors) >0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                              {{$err}}
                    <br>
                        @endforeach
                    </br>
                </div>
                @endif

                          @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <form action="admin/dienthoai/them" class="form-horizontal" method="POST">
                    <input name="_token" type="hidden" value="{{csrf_token()}}"/>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="TenLoai">
                                Tên Loại
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" name="TenLoai" placeholder="nhập tên loại sản phẩm" type="text">
                                    </input>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>
                                Ẩn hiện
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input id="AnHien_1" name="AnHien" type="radio" value="1">
                                        <label for="AnHien_1">
                                            Hiện
                                        </label>
                                        <input id="AnHien_0" name="AnHien" type="radio" value="0">
                                            <label for="AnHien_0">
                                                Ẩn
                                            </label>
                                        </input>
                                    </input>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="Tenloai">
                                Chọn Loại SP
                            </label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            {{--
                            <div class="form-group">
                                --}}
                                <div class="form-line">
                                    <select class="form-cotrol" name="loaisp">
                                        @foreach($loaisp as $loai)
                                        <option value="{{$loai->idLoai}}">
                                            {{$loai->TenLoai}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                <button class="btn btn-primary m-t-15 waves-effect" type="submit">
                                    Thêm Loại Sản Phẩm
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
