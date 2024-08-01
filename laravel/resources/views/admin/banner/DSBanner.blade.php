@extends('admin.layout.main')
@section('containerAdmin')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 mb-5">Quản lý banner</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class=" float-right">
                    <form action="{{ route('banner.danh-sach') }}" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <form action="{{ route('banner.xoa-nhieu') }}" method="post">
                    @csrf
                    <div class="float-left">
                        <button type="button" class="btn btn-secondary btn-sm" onclick="chontatca()">Chọn tất cả</button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="bochontatca()">Bỏ chọn tất
                            cả</button>
                        <button type="submit" class="btn btn-secondary btn-sm">Xóa các mục đã chọn</button>
                        <a href="{{ route('banner.them-banner') }}"><button type="button"
                                class="btn btn-secondary btn-sm">Nhập thêm</button></a>
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
                            @foreach ($DSBanner as $index => $item)
                                <tr>
                                    <td class="text-center align-middle"><input type="checkbox" name="select[]"
                                            value="{{ $item->id }}"></td>
                                    <td class="align-middle text-center">{{ $index + 1 }}</td>
                                    <td class="col-2 align-middle">DCM-{{ $item->san_pham_id }}</td>
                                    <td class="col-2 align-middle"><img src="{{ Storage::url($item->hinh_anh) }}"
                                            alt="err" height=60px></td>
                                    <td class="col-2 align-middle">{{ $item->created_at }}</td>
                                    <td class="col-3 align-middle"><a href="{{ route('banner.sua-banner', $item->id) }}"
                                            class="btn btn-secondary btn-sm">Cập nhật</a> |
                                        <a
                                            href="{{ route('banner.delete', $item->id) }}"class="btn btn-secondary btn-sm">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="phantrang">
                        {{ $DSBanner->links() }}
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- /.container-fluid -->
@endsection
