@extends('layout.main')
@section('container')
    <main class="main">
        <div class="container mt-3">
            <div class="card " style="border-radius: 10px;">
                <div class="card-header text-center chitiethuydon2">
                    <div style="float: left;">
                        <span class="dahuytext">Đã hủy đơn hàng</span>
                        <p>{{$itemDonHang->ngay_dat_hang}}</p>
                    </div>
                </div>
                <div id="tap1" class="card-body bg-light an">
                        <form action="{{route('gio-hang.mua-lai')}}" method="POST">
                            @csrf
                            <div class="card shadow-0 border mb-4" style="border-radius: 10px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="cart-table-container tableDonMua">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach ($chi_tiet_don_hangs as $item)
                                                        <tr class="product-row">
                                                            <td class="col-2">
                                                                <a href=""><img src="{{Storage::url($item->hinh_anh)}}" alt="product" width="110px"></a>
                                                            </td>
                                                            <td class="col-5"><a href="{{route('san-pham.chi-tiet-san-pham',$item->san_pham_id)}}">{{$item->ten_san_pham}}</a></td>
                                                            <td class="col-2"><span>Số lượng:</span> {{$item->so_luong}}</td>
                                                            <td class="col-3"><span>Tổng tiền:</span> {{number_format($item->thanh_tien, 0, ',', '.')}}đ</td>
                                                        </tr>
                                                        <input type="hidden" name="ids[]" value="{{$item->san_pham_id}}">
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="5" style="">
                                                                <p>Đã hủy bởi: <span style="color:#000;">{{$itemDonHang->ho_ten_nhan}}</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" style="">
                                                                <p>Địa chỉ nhận hàng: <span style="color:#000; ">{{$itemDonHang->dia_chi_nhan}}</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" style="">
                                                                <p>Số điện thoại nhận: <span style="color:#000; ">{{$itemDonHang->so_dt_nhan}}</span></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" style="">
                                                                <p>Phương thức thanh toán: <span style="color:#2ecc71; ">
                                                                @if ($itemDonHang->thanh_toan==0)
                                                                    Chưa thanh toán
                                                                @endif
                                                                @if ($itemDonHang->thanh_toan==1)
                                                                    Đã thanh toán
                                                                @endif
                                                                </span></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5" style="">
                                                                <p>Mã hóa đơn: <span style="color: red; ">DCM-{{$itemDonHang->id}}</span></p>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div class="btnDonMua">
                                                    <a href="{{route('gio-hang.don-mua')}}" style="text-decoration: none" class="btn">Quay lại</a>
                                                </div>
                                            </div><!-- End .cart-table-container -->
                                        </div><!-- End .col-lg-8 -->
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </main>
@endsection
