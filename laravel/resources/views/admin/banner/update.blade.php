@extends('admin.layout.main')
@section('containerAdmin')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cập nhật banner</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{route('banner.update',$banner->id)}}" method="post" enctype="multipart/form-data" class="form">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="image" class="form-label">Ảnh :</label>
                <input type="file" name="hinh_anh" id="image" class="form-control-file border">
                @error('hinh_anh')
                    <p class="Err mt-1">{{$message}}</p>
                @enderror
                <img class="mt-1" src="{{Storage::url($banner->hinh_anh)}}" alt="" height="100px">
            </div>
            <div class="mb-3">
                <label for="sel1">Sản phẩm</label>
                <select class="form-control" id="sel1" name="san_pham_id">
                    @foreach ($san_phams as $item)
                        <option {{old('san_pham_id',$banner->san_pham_id)==$item->id?'selected':''}} value="{{$item->id}}">{{$item->id}} - {{$item->ten_san_pham}}</option>
                    @endforeach

                </select>
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-success">Xác nhận</button>
                <a href="{{route('banner.danh-sach')}}"><button type="button" class="btn btn-success">Quay lại</button></a>
            </div>
        </form>
    </div>
</div>


</div>
<!-- /.container-fluid -->
@endsection
