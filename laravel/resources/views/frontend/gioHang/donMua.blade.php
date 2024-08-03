@extends('layout.main')
@section('container')
<main class="main">
    <div class="container mt-3">
        <div class="card " style="border-radius: 10px;">
            <div class="card-header text-center donmua">
                <nav>
                    <ul class="nav-tab">
                        <li class="active"><a href="#tap1">Tất cả</a></li>
                        <li><a href="#tap2">Chờ xác nhận</a></li>
                        <li><a href="#tap3">Chờ giao hàng</a></li>
                        <li><a href="#tap4">Đang giao</a></li>
                        <li><a href="#tap5">Hoàn thành</a></li>
                        <li><a href="#tap6">Đã hủy</a></li>
                    </ul>
                </nav>
            </div>
            {{-- tap 1 --}}
            <div id="tap1" class="card-body bg-light an">
                <form action="" method="post">
                    <div class="card shadow-0 border mb-4" style="border-radius: 10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-table-container tableDonMua">
                                        <table class="table">
                                            <tbody>
                                                <tr class="product-row">
                                                    <td><input type="hidden" name="select[]" value=""></td>
                                                    <td class="col-2">
                                                        <a href=""><img src="{{asset('assets/images/products/product-1.jpg')}}" alt="product" width="110px"></a>
                                                    </td>
                                                    <td class="col-5"><a href="">iPhone 14 Pro 128GB | Chính hãng VN/A</a></td>
                                                    <td class="col-2"><span>Số lượng:</span> 1</td>
                                                    <td class="col-3"><span>Tổng tiền:</span> 1000000000đ</td>
                                                </tr>
                                                <tr class="product-row">
                                                    <td><input type="hidden" name="select[]" value=""></td>
                                                    <td class="col-2">
                                                        <a href=""><img src="{{asset('assets/images/products/product-1.jpg')}}" alt="product" width="110px"></a>
                                                    </td>
                                                    <td class="col-5"><a href="">iPhone 14 Pro 128GB | Chính hãng VN/A</a></td>
                                                    <td class="col-2"><span>Số lượng:</span> 1</td>
                                                    <td class="col-3"><span>Tổng tiền:</span> 1000000000đ</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="trangThai">
                                                    <td colspan="5" style="border-bottom: none;">
                                                        <p>Trạng thái: <span style="color:#2ecc71;">Đã giao hàng</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Được đặt bởi: <span style="color:#000; margin-left: 60px;">nguyen dinh cuong</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Địa chỉ nhận hàng: <span style="color:#000; margin-left: 15px;">Phú Nghĩa, Chương Mỹ, Hà Nội</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Thanh toán: <span style="color:#2ecc71; margin-left: 72px;">Đã thanh toán</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Mã hóa đơn: <span style="color: red; margin-left: 68px;">DCM-110</span></p>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="btnDonMua">
                                            <button class="btn btnDaNhan" disabled>Đã nhận hàng</button>
                                            <button class="btn btnMuaLai">Mua lại</button>
                                        </div>
                                    </div><!-- End .cart-table-container -->
                                </div><!-- End .col-lg-8 -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            {{-- tap 2 --}}
            <div id="tap2" class="card-body bg-light an">
                <form action="" method="post">
                    <div class="card shadow-0 border mb-4" style="border-radius: 10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-table-container tableDonMua">
                                        <table class="table">
                                            <tbody>
                                                <tr class="product-row">
                                                    <td><input type="hidden" name="select[]" value=""></td>
                                                    <td class="col-2">
                                                        <a href=""><img src="{{asset('assets/images/products/product-1.jpg')}}" alt="product" width="110px"></a>
                                                    </td>
                                                    <td class="col-5"><a href="">iPhone 14 Pro 128GB | Chính hãng VN/A</a></td>
                                                    <td class="col-2"><span>Số lượng:</span> 1</td>
                                                    <td class="col-3"><span>Tổng tiền:</span> 1000000000đ</td>
                                                </tr>
                                                <tr class="product-row">
                                                    <td><input type="hidden" name="select[]" value=""></td>
                                                    <td class="col-2">
                                                        <a href=""><img src="{{asset('assets/images/products/product-1.jpg')}}" alt="product" width="110px"></a>
                                                    </td>
                                                    <td class="col-5"><a href="">iPhone 14 Pro 128GB | Chính hãng VN/A</a></td>
                                                    <td class="col-2"><span>Số lượng:</span> 1</td>
                                                    <td class="col-3"><span>Tổng tiền:</span> 1000000000đ</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="trangThai">
                                                    <td colspan="5" style="border-bottom: none;">
                                                        <p>Trạng thái: <span style="color:#2ecc71;">Đã giao hàng</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Được đặt bởi: <span style="color:#000; margin-left: 60px;">nguyen dinh cuong</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Địa chỉ nhận hàng: <span style="color:#000; margin-left: 15px;">Phú Nghĩa, Chương Mỹ, Hà Nội</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Thanh toán: <span style="color:#2ecc71; margin-left: 72px;">Đã thanh toán</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Mã hóa đơn: <span style="color: red; margin-left: 68px;">DCM-110</span></p>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="btnDonMua">
                                            <button class="btn btnDaNhan" disabled>Đã nhận hàng</button>
                                            <button class="btn btnMuaLai">Mua lại</button>
                                        </div>
                                    </div><!-- End .cart-table-container -->
                                </div><!-- End .col-lg-8 -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            {{-- tap 3 --}}
            <div id="tap3" class="card-body bg-light an">
                <form action="" method="post">
                    <div class="card shadow-0 border mb-4" style="border-radius: 10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-table-container tableDonMua">
                                        <table class="table">
                                            <tbody>
                                                <tr class="product-row">
                                                    <td><input type="hidden" name="select[]" value=""></td>
                                                    <td class="col-2">
                                                        <a href=""><img src="{{asset('assets/images/products/product-1.jpg')}}" alt="product" width="110px"></a>
                                                    </td>
                                                    <td class="col-5"><a href="">iPhone 14 Pro 128GB | Chính hãng VN/A</a></td>
                                                    <td class="col-2"><span>Số lượng:</span> 1</td>
                                                    <td class="col-3"><span>Tổng tiền:</span> 1000000000đ</td>
                                                </tr>
                                                <tr class="product-row">
                                                    <td><input type="hidden" name="select[]" value=""></td>
                                                    <td class="col-2">
                                                        <a href=""><img src="{{asset('assets/images/products/product-1.jpg')}}" alt="product" width="110px"></a>
                                                    </td>
                                                    <td class="col-5"><a href="">iPhone 14 Pro 128GB | Chính hãng VN/A</a></td>
                                                    <td class="col-2"><span>Số lượng:</span> 1</td>
                                                    <td class="col-3"><span>Tổng tiền:</span> 1000000000đ</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="trangThai">
                                                    <td colspan="5" style="border-bottom: none;">
                                                        <p>Trạng thái: <span style="color:#2ecc71;">Đã giao hàng</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Được đặt bởi: <span style="color:#000; margin-left: 60px;">nguyen dinh cuong</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Địa chỉ nhận hàng: <span style="color:#000; margin-left: 15px;">Phú Nghĩa, Chương Mỹ, Hà Nội</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Thanh toán: <span style="color:#2ecc71; margin-left: 72px;">Đã thanh toán</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Mã hóa đơn: <span style="color: red; margin-left: 68px;">DCM-110</span></p>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="btnDonMua">
                                            <button class="btn btnDaNhan" disabled>Đã nhận hàng</button>
                                            <button class="btn btnMuaLai">Mua lại</button>
                                        </div>
                                    </div><!-- End .cart-table-container -->
                                </div><!-- End .col-lg-8 -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            {{-- tap 4 --}}
            <div id="tap4" class="card-body bg-light an">
                <form action="" method="post">
                    <div class="card shadow-0 border mb-4" style="border-radius: 10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-table-container tableDonMua">
                                        <table class="table">
                                            <tbody>
                                                <tr class="product-row">
                                                    <td><input type="hidden" name="select[]" value=""></td>
                                                    <td class="col-2">
                                                        <a href=""><img src="{{asset('assets/images/products/product-1.jpg')}}" alt="product" width="110px"></a>
                                                    </td>
                                                    <td class="col-5"><a href="">iPhone 14 Pro 128GB | Chính hãng VN/A</a></td>
                                                    <td class="col-2"><span>Số lượng:</span> 1</td>
                                                    <td class="col-3"><span>Tổng tiền:</span> 1000000000đ</td>
                                                </tr>
                                                <tr class="product-row">
                                                    <td><input type="hidden" name="select[]" value=""></td>
                                                    <td class="col-2">
                                                        <a href=""><img src="{{asset('assets/images/products/product-1.jpg')}}" alt="product" width="110px"></a>
                                                    </td>
                                                    <td class="col-5"><a href="">iPhone 14 Pro 128GB | Chính hãng VN/A</a></td>
                                                    <td class="col-2"><span>Số lượng:</span> 1</td>
                                                    <td class="col-3"><span>Tổng tiền:</span> 1000000000đ</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="trangThai">
                                                    <td colspan="5" style="border-bottom: none;">
                                                        <p>Trạng thái: <span style="color:#2ecc71;">Đã giao hàng</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Được đặt bởi: <span style="color:#000; margin-left: 60px;">nguyen dinh cuong</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Địa chỉ nhận hàng: <span style="color:#000; margin-left: 15px;">Phú Nghĩa, Chương Mỹ, Hà Nội</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Thanh toán: <span style="color:#2ecc71; margin-left: 72px;">Đã thanh toán</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Mã hóa đơn: <span style="color: red; margin-left: 68px;">DCM-110</span></p>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="btnDonMua">
                                            <button class="btn btnDaNhan" disabled>Đã nhận hàng</button>
                                            <button class="btn btnMuaLai">Mua lại</button>
                                        </div>
                                    </div><!-- End .cart-table-container -->
                                </div><!-- End .col-lg-8 -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            {{-- tap 5 --}}
            <div id="tap5" class="card-body bg-light an">
                <form action="" method="post">
                    <div class="card shadow-0 border mb-4" style="border-radius: 10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-table-container tableDonMua">
                                        <table class="table">
                                            <tbody>
                                                <tr class="product-row">
                                                    <td><input type="hidden" name="select[]" value=""></td>
                                                    <td class="col-2">
                                                        <a href=""><img src="{{asset('assets/images/products/product-1.jpg')}}" alt="product" width="110px"></a>
                                                    </td>
                                                    <td class="col-5"><a href="">iPhone 14 Pro 128GB | Chính hãng VN/A</a></td>
                                                    <td class="col-2"><span>Số lượng:</span> 1</td>
                                                    <td class="col-3"><span>Tổng tiền:</span> 1000000000đ</td>
                                                </tr>
                                                <tr class="product-row">
                                                    <td><input type="hidden" name="select[]" value=""></td>
                                                    <td class="col-2">
                                                        <a href=""><img src="{{asset('assets/images/products/product-1.jpg')}}" alt="product" width="110px"></a>
                                                    </td>
                                                    <td class="col-5"><a href="">iPhone 14 Pro 128GB | Chính hãng VN/A</a></td>
                                                    <td class="col-2"><span>Số lượng:</span> 1</td>
                                                    <td class="col-3"><span>Tổng tiền:</span> 1000000000đ</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="trangThai">
                                                    <td colspan="5" style="border-bottom: none;">
                                                        <p>Trạng thái: <span style="color:#2ecc71;">Đã giao hàng</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Được đặt bởi: <span style="color:#000; margin-left: 60px;">nguyen dinh cuong</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Địa chỉ nhận hàng: <span style="color:#000; margin-left: 15px;">Phú Nghĩa, Chương Mỹ, Hà Nội</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Thanh toán: <span style="color:#2ecc71; margin-left: 72px;">Đã thanh toán</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Mã hóa đơn: <span style="color: red; margin-left: 68px;">DCM-110</span></p>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="btnDonMua">
                                            <button class="btn btnDaNhan" disabled>Đã nhận hàng</button>
                                            <button class="btn btnMuaLai">Mua lại</button>
                                        </div>
                                    </div><!-- End .cart-table-container -->
                                </div><!-- End .col-lg-8 -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            {{-- tap 6 --}}
            <div id="tap6" class="card-body bg-light an">
                <form action="" method="post">
                    <div class="card shadow-0 border mb-4" style="border-radius: 10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-table-container tableDonMua">
                                        <table class="table">
                                            <tbody>
                                                <tr class="product-row">
                                                    <td><input type="hidden" name="select[]" value=""></td>
                                                    <td class="col-2">
                                                        <a href=""><img src="{{asset('assets/images/products/product-1.jpg')}}" alt="product" width="110px"></a>
                                                    </td>
                                                    <td class="col-5"><a href="">iPhone 14 Pro 128GB | Chính hãng VN/A</a></td>
                                                    <td class="col-2"><span>Số lượng:</span> 1</td>
                                                    <td class="col-3"><span>Tổng tiền:</span> 1000000000đ</td>
                                                </tr>
                                                <tr class="product-row">
                                                    <td><input type="hidden" name="select[]" value=""></td>
                                                    <td class="col-2">
                                                        <a href=""><img src="{{asset('assets/images/products/product-1.jpg')}}" alt="product" width="110px"></a>
                                                    </td>
                                                    <td class="col-5"><a href="">iPhone 14 Pro 128GB | Chính hãng VN/A</a></td>
                                                    <td class="col-2"><span>Số lượng:</span> 1</td>
                                                    <td class="col-3"><span>Tổng tiền:</span> 1000000000đ</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr class="trangThai">
                                                    <td colspan="5" style="border-bottom: none;">
                                                        <p>Trạng thái: <span style="color:#2ecc71;">Đã giao hàng</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Được đặt bởi: <span style="color:#000; margin-left: 60px;">nguyen dinh cuong</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Địa chỉ nhận hàng: <span style="color:#000; margin-left: 15px;">Phú Nghĩa, Chương Mỹ, Hà Nội</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Thanh toán: <span style="color:#2ecc71; margin-left: 72px;">Đã thanh toán</span></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="">
                                                        <p>Mã hóa đơn: <span style="color: red; margin-left: 68px;">DCM-110</span></p>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="btnDonMua">
                                            <button class="btn btnDaNhan" disabled>Đã nhận hàng</button>
                                            <button class="btn btnMuaLai">Mua lại</button>
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
