<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>VNPAY RESPONSE</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="assets/jumbotron-narrow.css" rel="stylesheet">
        <script src="assets/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        @php
            $vnp_TmnCode = "ELVAQEWH"; //Mã định danh merchant kết nối (Terminal Id)
            $vnp_HashSecret = "UMNOHDQWWDIRGSNATSWASPXTXOFSMHZR"; //Secret key
            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = "http://127.0.0.1:8000/gio-hang/vnpay_return";
            $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
            $apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
            //Config input format
            //Expire
            $startTime = date("YmdHis");
            $expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));
            $vnp_SecureHash = $_GET['vnp_SecureHash'];
            $inputData = array();
            foreach ($_GET as $key => $value) {
                if (substr($key, 0, 4) == "vnp_") {
                    $inputData[$key] = $value;
                }
            }

            unset($inputData['vnp_SecureHash']);
            ksort($inputData);
            $i = 0;
            $hashData = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
            }

            $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        @endphp
        <!--Begin display -->
        <div class="container">
            <div class="header clearfix">
                <h3 class="text-muted">VNPAY RESPONSE</h3>
            </div>
            <div class="table-responsive">
                <div class="form-group">
                    <label >Mã đơn hàng:</label>

                    <label>{{ $_GET['vnp_TxnRef']}}</label>
                </div>
                <div class="form-group">

                    <label >Số tiền:</label>
                    <label> {{($_GET['vnp_Amount'] / 100)}}</label>
                </div>
                <div class="form-group">
                    <label >Nội dung thanh toán:</label>
                    <label> {{ $_GET['vnp_OrderInfo']}}</label>
                </div>
                <div class="form-group">
                    <label >Mã phản hồi (vnp_ResponseCode):</label>
                    <label> {{ $_GET['vnp_ResponseCode']}}</label>
                </div>
                <div class="form-group">
                    <label >Mã GD Tại VNPAY:</label>
                    <label> {{ $_GET['vnp_TransactionNo']}}</label>
                </div>
                <div class="form-group">
                    <label >Mã Ngân hàng:</label>
                    <label> {{ $_GET['vnp_BankCode']}}</label>
                </div>
                <div class="form-group">
                    <label>Thời gian thanh toán:</label>
                    <label> {{ $_GET['vnp_PayDate']}}</label>
                </div>
                <div class="form-group">
                    <label >Kết quả:</label>
                    <label>
                        @if ($secureHash == $vnp_SecureHash)
                            @if ($_GET['vnp_ResponseCode'] == '00')
                                <span style='color:blue'>GD Thành công</span>
                            @else
                                <span style='color:red'>GD Không thành công</span>
                            @endif
                        @else
                            <span style='color:red'>Chữ ký không hợp lệ</span>
                        @endif
                    </label>

                    @if ($secureHash == $vnp_SecureHash)
                        @if ($_GET['vnp_ResponseCode'] == '00')
                            <br><br><span style='color:blue'>Bạn đã thanh toán thành công. Vui lòng ấn tiếp tục để hoàn tất thanh toán!</span><br><br>
                            <form action="{{route('gio-hang.thanh-toan-online')}}" method="post">
                                @csrf
                                <button type="submit" name="tieptuc">Tiếp tục</button>
                            </form>
                        @else
                            <br><br><a href="{{route('gio-hang.chi-tiet-thanh-toan')}}"><button type='button'>Quay lại</button></a>
                        @endif
                    @else
                        <br><br><a href="{{route('gio-hang.chi-tiet-thanh-toan')}}"><button type='button'>Quay lại</button></a>
                    @endif
                </div>
            </div>
            <p>
                &nbsp;
            </p>
            <footer class="footer">
                   <p>&copy; VNPAY <?php echo date('Y');?></p>
            </footer>
        </div>
    </body>
</html>
