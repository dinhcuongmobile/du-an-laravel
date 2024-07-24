@extends('admin.layout.main')
@section('containerAdmin')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thêm banner mới</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data" class="form">
            <div class="mb-3">
                <label for="image" class="form-label">Ảnh :</label>
                <input type="file" name="" id="image" class="form-control-file border">
                <p class="Err mt-1">errr</p>
            </div>
            <div class="mb-3">
                <label for="sel1">Sản phẩm</label>
                <select class="form-control" id="sel1" name="">
                    <option value="">'.$id.' - '.$tensp.'</option>
                </select>
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-success">Xác nhận</button>
                <a href=""><button type="button" class="btn btn-success">Quay lại</button></a>
            </div>
        </form>
    </div>
</div>


</div>
<!-- /.container-fluid -->
@endsection