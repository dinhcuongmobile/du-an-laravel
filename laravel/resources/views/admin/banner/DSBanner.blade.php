@extends('admin.layout.main')
@section('containerAdmin')
<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Quản lý banner</h1>
    <form action="?act=qlbanner" method="post">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button type="button" class="btn btn-secondary btn-sm" onclick="chontatca()">Chọn tất cả</button>
                <button type="button" class="btn btn-secondary btn-sm" onclick="bochontatca()">Bỏ chọn tất cả</button>
                <button type="submit" name="xoacacmucchon" class="btn btn-secondary btn-sm">Xóa các mục đã chọn</button>
                <a href="{{route('banner.viewAdd')}}"><button type="button" class="btn btn-secondary btn-sm">Nhập thêm</button></a>
                <div class="float-right">
                    <div class="input-group">
                        <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm...">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="search">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th></th>
                                <th>STT</th>
                                <th>Mã sản phẩm</th>
                                <th>Image</th>
                                <th>Ngày đăng</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($DSBanner as $item)
                            <tr>
                                <td class="text-center"><input type="checkbox" name="select[]" value=""></td>
                                <td>{{$item->id}}</td>
                                <td class="col-2">DCM-{{$item->san_pham_id}}</td>
                                <td class="col-2"><img src="{{$item->hinh_anh}}" alt="err" height=60px></td>
                                <td class="col-2">{{$item->created_at}}</td>
                                <td class="col-3"><a href="{{route('banner.viewUpdate')}}"><button type="button" class="btn btn-secondary btn-sm">Cập nhật</button></a> | 
                                    <a href=""><button type="button" class="btn btn-secondary btn-sm">Xóa</button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="phantrang">
                        <ul>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->
@endsection