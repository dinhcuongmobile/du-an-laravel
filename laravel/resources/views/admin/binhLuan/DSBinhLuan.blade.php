@extends('admin.layout.main')
@section('containerAdmin')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách bình luận</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class=" float-right">
                    <form action="{{ route('binh-luan.danh-sach') }}" method="GET">
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
                <form action="{{ route('binh-luan.xoa-nhieu') }}" method="post">
                    @csrf
                    <div class="float-left">
                        <button type="button" class="btn btn-secondary btn-sm" onclick="chontatca()">Chọn tất cả</button>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="bochontatca()">Bỏ chọn tất
                            cả</button>
                        <button type="submit" class="btn btn-secondary btn-sm">Xóa các mục đã chọn</button>
                    </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th></th>
                                <th>Họ và Tên</th>
                                <th>Tài khoản</th>
                                <th>Sản phẩm</th>
                                <th>Nội dung</th>
                                <th>Ngày bình luận</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($DSBinhLuan as $item)
                                <tr>
                                    <td class="text-center align-middle"><input type="checkbox" name="select[]"
                                            value="{{ $item->id }}"></td>
                                    <td class="col-2 align-middle">{{ $item->ho_va_ten }}</td>
                                    <td class="col-1 align-middle">{{ $item->email }}</td>
                                    <td class="col-3 align-middle">{{ $item->ten_san_pham }}</td>
                                    <td class="col-3 align-middle">{{ $item->noi_dung }}</td>
                                    <td class="col-2 align-middle">{{ $item->created_at }}</td>
                                    <td class="col-1 align-middle"><a href="{{ route('binh-luan.delete', $item->id) }}"
                                            class="btn btn-secondary btn-sm">Xóa</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="phantrang">
                        {{ $DSBinhLuan->links() }}
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- /.container-fluid -->
@endsection
