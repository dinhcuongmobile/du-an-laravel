@extends('admin.layout.main')
@section('containerAdmin')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 mb-5">Danh sách đơn hàng</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="float-right">
                    <form action="{{ route('don-hang.danh-sach-don-hang') }}" method="GET">
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
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Khách hàng</th>
                                <th>Số lượng</th>
                                <th>Giá trị đơn hàng</th>
                                <th>Tình trạng đơn hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Thanh toán</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-1 align-middle">DCM-'.$iddh.'</td>
                                <td class="col-3 align-middle">
                                    '.$hovatennhan.' <br>
                                    '.$sodienthoainhan.' <br>
                                    '.$email.' <br>
                                    '.$diachinhan.'
                                </td>
                                <td class="text-center align-middle">'.$soluongct.'</td>
                                <td  class="col-1 align-middle">11111111₫</td>
                                <td  class="col-2 align-middle">'.$trangthai.'</td>
                                <td class="col-2 align-middle">'.$ngaydathang.'</td>
                                <td  class="col-2 align-middle '.$class.'">'.$thanhtoan.'</td>
                                <td class="col-2 align-middle"><a href=""><button type="button" class="btn btn-secondary btn-sm">Update</button></a> <br><br>
                                    <a href=""><button type="button" class="btn btn-secondary btn-sm">Hủy</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <div class="phantrang">
                        <ul>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
