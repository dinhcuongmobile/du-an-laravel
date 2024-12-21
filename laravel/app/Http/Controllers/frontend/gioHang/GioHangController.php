<?php

namespace App\Http\Controllers\frontend\gioHang;

use Carbon\Carbon;
use App\Models\DonHang;
use App\Models\GioHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use App\Models\ChiTietDonHang;
use App\Http\Controllers\Controller;
use App\Mail\SendHoaDon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class GioHangController extends Controller
{
    protected $views;
    protected $gio_hangs;
    protected $don_hangs;
    protected $chi_tiet_don_hangs;

    public function __construct() {
        $this->views=[];
        $this->gio_hangs=new GioHang();
        $this->don_hangs=new DonHang();
        $this->chi_tiet_don_hangs= new ChiTietDonHang();
    }

    public function showGioHang(){
        $this->views['gio_hangs']=$this->gio_hangs->loadAllGioHang();
        return view('frontend.gioHang.gioHang',$this->views);
    }

    public function showChiTietThanhToan(){
        if(empty(session()->get('gio_hangs', []))){
            return redirect()->route('gio-hang.show');
        }
        $this->views['gio_hang'] = session()->get('gio_hangs', []);
        return view('frontend.gioHang.chiTietThanhToan',$this->views);
    }

    public function chiTietHuyDon(int $id){
        $itemDonHang = $this->don_hangs->loadOneDonHang($id);
        $chi_tiet_don_hangs = $this->chi_tiet_don_hangs->loadAllCTDH($id);

        $this->views['itemDonHang']=$itemDonHang;
        $this->views['chi_tiet_don_hangs']=$chi_tiet_don_hangs;
        return view('frontend.gioHang.chiTietHuyDon',$this->views);
    }

    //thanh toan online


    public function xacNhanDatHang(Request $request){
        if($request->radio==0){
            if($request->has('dia_chi_khac')){
                $request->validate(
                    [
                        'ho_va_ten_nhan' => 'required|string|max:255',
                        'so_dt_nhan' => 'required|regex:/^0[1-9][0-9]{8}$/',
                        'dia_chi_nhan' => 'required|string|min:4|max:255',
                    ],
                    [
                        'ho_va_ten_nhan.required' => 'Vui lòng không bỏ trống họ và tên !',
                        'ho_va_ten_nhan.max' => 'Họ và tên quá dài !',
                        'so_dt_nhan.required' => 'Vui lòng không bỏ trống số điện thoại !',
                        'so_dt_nhan.regex' => 'Số điện thoại không hợp lệ!',
                        'dia_chi_nhan.required' => 'Vui lòng không bỏ trống địa chỉ !',
                        'dia_chi_nhan.min' => 'Địa chỉ quá ngắn!',
                        'dia_chi_nhan.max' => 'Địa chỉ quá dài!',
                    ]
                );
                $gio_hang = session()->get('gio_hangs', []);
                $dataDonHang=[
                    'tai_khoan_id' => Auth::user()->id,
                    'ho_ten_nhan' => $request->ho_va_ten_nhan,
                    'ngay_dat_hang' => now(),
                    'dia_chi_nhan' => $request->dia_chi_nhan,
                    'so_dt_nhan' => $request->so_dt_nhan,
                    'tong_thanh_toan' => $request->tong_thanh_toan,
                    'phuong_thuc_tt' => 0,
                ];
                $donHang = DonHang::create($dataDonHang);
                foreach ($gio_hang as $item) {
                    $dataChiTiet=[
                        'don_hang_id' => $donHang->id,
                        'san_pham_id' => $item->san_pham_id,
                        'so_luong' => $item->so_luong,
                        'don_gia' => $item->gia_khuyen_mai,
                        'thanh_tien' => $item->thanh_tien,
                        'created_at' => now()
                    ];
                    ChiTietDonHang::create($dataChiTiet);
                    SanPham::where('id',$item->san_pham_id)->update(['so_luong'=>$item->so_luong_sp-$item->so_luong]);
                    GioHang::where('tai_khoan_id', Auth::user()->id)->where('san_pham_id',$item->san_pham_id)->delete();
                }
                $don_hang=$this->don_hangs->loadOneDonHang($donHang->id);
                $chi_tiet_don_hangs = $this->chi_tiet_don_hangs->loadAllCTDH($donHang->id);
                Mail::to(Auth::user()->email)->send(new SendHoaDon($don_hang, $chi_tiet_don_hangs));
                return redirect()->route('gio-hang.don-mua');
            }else{
                $request->validate(
                    [
                        'ho_va_ten' => 'required|string|max:255',
                        'so_dien_thoai' => 'required|regex:/^0[1-9][0-9]{8}$/',
                        'dia_chi' => 'required|string|min:4|max:255',
                    ],
                    [
                        'ho_va_ten.required' => 'Vui lòng không bỏ trống họ và tên !',
                        'ho_va_ten.max' => 'Họ và tên quá dài !',
                        'so_dien_thoai.required' => 'Vui lòng không bỏ trống số điện thoại !',
                        'so_dien_thoai.regex' => 'Số điện thoại không hợp lệ!',
                        'dia_chi.required' => 'Vui lòng không bỏ trống địa chỉ !',
                        'dia_chi.min' => 'Địa chỉ quá ngắn!',
                        'dia_chi.max' => 'Địa chỉ quá dài!',
                    ]
                );
                $gio_hang = session()->get('gio_hangs', []);
                $dataDonHang=[
                    'tai_khoan_id' => Auth::user()->id,
                    'ho_ten_nhan' => $request->ho_va_ten,
                    'ngay_dat_hang' => now(),
                    'dia_chi_nhan' => $request->dia_chi,
                    'so_dt_nhan' => $request->so_dien_thoai,
                    'tong_thanh_toan' => $request->tong_thanh_toan,
                    'phuong_thuc_tt' => 0,
                ];
                $donHang = DonHang::create($dataDonHang);
                foreach ($gio_hang as $item) {
                    $dataChiTiet=[
                        'don_hang_id' => $donHang->id,
                        'san_pham_id' => $item->san_pham_id,
                        'so_luong' => $item->so_luong,
                        'don_gia' => $item->gia_khuyen_mai,
                        'thanh_tien' => $item->thanh_tien,
                        'created_at' => now()
                    ];
                    ChiTietDonHang::create($dataChiTiet);
                    SanPham::where('id',$item->san_pham_id)->update(['so_luong'=>$item->so_luong_sp-$item->so_luong]);
                    GioHang::where('tai_khoan_id', Auth::user()->id)->where('san_pham_id',$item->san_pham_id)->delete();
                }
                $don_hang=$this->don_hangs->loadOneDonHang($donHang->id);
                $chi_tiet_don_hangs = $this->chi_tiet_don_hangs->loadAllCTDH($donHang->id);
                Mail::to(Auth::user()->email)->send(new SendHoaDon($don_hang, $chi_tiet_don_hangs));
                return redirect()->route('gio-hang.don-mua');
            }
        }else{
            if($request->has('dia_chi_khac')){
                $request->validate(
                    [
                        'ho_va_ten_nhan' => 'required|string|max:255',
                        'so_dt_nhan' => 'required|regex:/^0[1-9][0-9]{8}$/',
                        'dia_chi_nhan' => 'required|string|min:4|max:255',
                    ],
                    [
                        'ho_va_ten_nhan.required' => 'Vui lòng không bỏ trống họ và tên !',
                        'ho_va_ten_nhan.max' => 'Họ và tên quá dài !',
                        'so_dt_nhan.required' => 'Vui lòng không bỏ trống số điện thoại !',
                        'so_dt_nhan.regex' => 'Số điện thoại không hợp lệ!',
                        'dia_chi_nhan.required' => 'Vui lòng không bỏ trống địa chỉ !',
                        'dia_chi_nhan.min' => 'Địa chỉ quá ngắn!',
                        'dia_chi_nhan.max' => 'Địa chỉ quá dài!',
                    ]
                );
                $dataDonHang=[
                    'tai_khoan_id' => Auth::user()->id,
                    'ho_ten_nhan' => $request->ho_va_ten,
                    'ngay_dat_hang' => now(),
                    'dia_chi_nhan' => $request->dia_chi,
                    'so_dt_nhan' => $request->so_dien_thoai,
                    'tong_thanh_toan' => $request->tong_thanh_toan,
                    'phuong_thuc_tt' => 1,
                    'trang_thai' => 1,
                    'thanh_toan' => 1,
                ];
                session()->put('thongtin_dathang', $dataDonHang);
                return redirect()->route('gio-hang.thanh-toan-vnp');
            }else{
                $request->validate(
                    [
                        'ho_va_ten' => 'required|string|max:255',
                        'so_dien_thoai' => 'required|regex:/^0[1-9][0-9]{8}$/',
                        'dia_chi' => 'required|string|min:4|max:255',
                    ],
                    [
                        'ho_va_ten.required' => 'Vui lòng không bỏ trống họ và tên !',
                        'ho_va_ten.max' => 'Họ và tên quá dài !',
                        'so_dien_thoai.required' => 'Vui lòng không bỏ trống số điện thoại !',
                        'so_dien_thoai.regex' => 'Số điện thoại không hợp lệ!',
                        'dia_chi.required' => 'Vui lòng không bỏ trống địa chỉ !',
                        'dia_chi.min' => 'Địa chỉ quá ngắn!',
                        'dia_chi.max' => 'Địa chỉ quá dài!',
                    ]
                );

                $dataDonHang=[
                    'tai_khoan_id' => Auth::user()->id,
                    'ho_ten_nhan' => $request->ho_va_ten,
                    'ngay_dat_hang' => now(),
                    'dia_chi_nhan' => $request->dia_chi,
                    'so_dt_nhan' => $request->so_dien_thoai,
                    'tong_thanh_toan' => $request->tong_thanh_toan,
                    'phuong_thuc_tt' => 1,
                    'trang_thai' => 1,
                    'thanh_toan' => 1,
                ];
                session()->put('thongtin_dathang', $dataDonHang);
                return redirect()->route('gio-hang.thanh-toan-vnp');
            }
        }
    }

    public function showThanhToanVNP(){
        if(empty(session()->get('gio_hangs', []))){
            return redirect()->route('gio-hang.show');
        }
        $gio_hang=session()->get('gio_hangs', []);
        $tongthanhtoan=0;
        foreach ($gio_hang as $item) {
            $tongthanhtoan+=$item->thanh_tien;
        }
        $this->views['tongthanhtoan']=$tongthanhtoan;
        return view('frontend.gioHang.vnpay_php.vnpay_pay',$this->views);
    }

    public function vnpay_create_payment(Request $request){
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

        $vnp_TmnCode = "16WV2BQQ"; // Mã định danh merchant kết nối (Terminal Id)
        $vnp_HashSecret = "9NMT725FGBXEI9FS4CI5HUGN0UJJB7FW"; // Secret key
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('gio-hang.vnpay_return'); // Sử dụng route name để tự động hóa URL

        // Cấu hình định dạng đầu vào
        $startTime = date("YmdHis");
        $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

        $vnp_TxnRef = rand(1, 10000); // Mã giao dịch thanh toán tham chiếu của merchant
        $vnp_Amount = $request->input('amount'); // Số tiền thanh toán
        $vnp_Locale = "VN"; // Ngôn ngữ chuyển hướng thanh toán
        $vnp_BankCode = "NCB"; // Mã phương thức thanh toán
        $vnp_IpAddr = $request->ip(); // IP Khách hàng thanh toán

        $inputData = [
           "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount* 100,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => "Thanh toan GD:" . $vnp_TxnRef,
            "vnp_OrderType" => "other",
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate"=>$expire
        ];

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";

        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        return redirect()->away($vnp_Url);
    }


    public function thanhToanOnline(Request $request){
        if(empty(session()->get('thongtin_dathang', []))){
            return redirect()->route('gio-hang.show');
        }
        if($request->has('tieptuc')){
            $gio_hang = session()->get('gio_hangs', []);
            $dataDonHang=session()->get('thongtin_dathang', []);
            $donHang = DonHang::create($dataDonHang);
            foreach ($gio_hang as $item) {
                $dataChiTiet=[
                    'don_hang_id' => $donHang->id,
                    'san_pham_id' => $item->san_pham_id,
                    'so_luong' => $item->so_luong,
                    'don_gia' => $item->gia_khuyen_mai,
                    'thanh_tien' => $item->thanh_tien,
                    'created_at' => now()
                ];
                ChiTietDonHang::create($dataChiTiet);
                SanPham::where('id',$item->san_pham_id)->update(['so_luong'=>$item->so_luong_sp-$item->so_luong]);
                GioHang::where('tai_khoan_id', Auth::user()->id)->where('san_pham_id',$item->san_pham_id)->delete();
                $don_hang=$this->don_hangs->loadOneDonHang($donHang->id);
                $chi_tiet_don_hangs = $this->chi_tiet_don_hangs->loadAllCTDH($donHang->id);
                Mail::to(Auth::user()->email)->send(new SendHoaDon($don_hang, $chi_tiet_don_hangs));
            }
            session()->forget('gio_hangs');
            session()->forget('thongtin_dathang');
            return redirect()->route('gio-hang.don-mua');
        }else{
            return redirect()->route('gio-hang.show');
        }
    }

    public function vnpay_return(){
        return view('frontend.gioHang.vnpay_php.vnpay_return');
    }
    //end thanh toan onlien

    public function donMua(){
        $don_hangs = [
            'trang_thai_all' => $this->don_hangs->loadAllDonHang(),
            'trang_thai_0' => DonHang::where('tai_khoan_id', Auth::user()->id)->where('trang_thai', 0)->get(),
            'trang_thai_1_2' => DonHang::where('tai_khoan_id', Auth::user()->id)->whereIn('trang_thai', [1, 2])->get(),
            'trang_thai_3' => DonHang::where('tai_khoan_id', Auth::user()->id)->where('trang_thai', 3)->get(),
            'trang_thai_4' => DonHang::where('tai_khoan_id', Auth::user()->id)->where('trang_thai', 4)->get(),
            'trang_thai_5' => DonHang::where('tai_khoan_id', Auth::user()->id)->where('trang_thai', 5)->get(),
        ];

        $chi_tiet_don_hangs = [];

        foreach ($don_hangs as $key => $items) {
            foreach ($items as $item) {
                $chi_tiet_don_hangs[$item->id] = $this->chi_tiet_don_hangs->loadAllCTDH($item->id);
            }
        }

        $this->views['don_hangs'] = $don_hangs;
        $this->views['chi_tiet_don_hangs'] = $chi_tiet_don_hangs;

        return view('frontend.gioHang.donMua',$this->views);
    }

    public function addGioHang(Request $request){
        $tai_khoan_id=Auth::user()->id;
        $gia_khuyen_mai=$request->input('gia_khuyen_mai');
        $san_pham_id=$request->input('san_pham_id');
        $gio_hang = GioHang::where('tai_khoan_id', $tai_khoan_id)->where('san_pham_id', $san_pham_id)->first();
        if(!$gio_hang){
            $data = [
                'tai_khoan_id'=> $tai_khoan_id,
                'san_pham_id' => $san_pham_id,
                'so_luong' => 1,
                'thanh_tien' => $gia_khuyen_mai,
                'created_at' => now(),
            ];
            $this->gio_hangs->addGioHang($tai_khoan_id, $data);
        }else{
            $so_luong=$gio_hang->so_luong+1;
            $thanh_tien=$gio_hang->thanh_tien*$so_luong;
            $data = [
                'so_luong' => $so_luong,
                'thanh_tien' => $thanh_tien,
            ];
            $gio_hang->update($data);
        }

    }

    public function muaLaiSanPham(Request $request){
        $tai_khoan_id = Auth::user()->id;
        $san_pham_ids = $request->ids;
        foreach ($san_pham_ids as $id) {
            $san_pham = SanPham::find($id);
            if (!$san_pham) {
                return redirect()->back()->with('error', 'Lỗi khi gửi dữ liệu! Vui lòng thử lại sau ít phút.');
            }
            if ($san_pham->so_luong <= 0) {
                return redirect()->back()->with('error', 'Sản phẩm không còn trong kho !');
            }
            $gio_hang = GioHang::where('tai_khoan_id', $tai_khoan_id)
                            ->where('san_pham_id', $san_pham->id)
                            ->first();
            if ($gio_hang) {
                $so_luong = $gio_hang->so_luong + 1;
                $thanh_tien = $san_pham->gia_khuyen_mai * $so_luong;
                $gio_hang->update(['so_luong' => $so_luong, 'thanh_tien' => $thanh_tien]);
            } else {
                $data = [
                    'tai_khoan_id' => $tai_khoan_id,
                    'san_pham_id' => $san_pham->id,
                    'so_luong' => 1,
                    'thanh_tien' => $san_pham->gia_khuyen_mai,
                ];
                GioHang::create($data);
            }
        }

        return redirect()->route('gio-hang.show')->with('success', 'Thêm thành công sản phẩm vào giỏ hàng!');
    }

    public function daNhanHang(Request $request){
        $tai_khoan_id = Auth::user()->id;
        $id=$request->input('id');
        DonHang::where('tai_khoan_id', $tai_khoan_id)
                ->where('id',$id)->update(['trang_thai'=>4]);

    }

    public function themGioHangChiTiet(Request $request){
        $tai_khoan_id=Auth::user()->id;
        $gia_khuyen_mai=$request->input('gia_khuyen_mai');
        $san_pham_id=$request->input('san_pham_id');
        $gio_hang = GioHang::where('tai_khoan_id', $tai_khoan_id)->where('san_pham_id', $san_pham_id)->first();
        if(!$gio_hang){
            $so_luong=$request->input('so_luong');
            $thanh_tien=$gia_khuyen_mai*$so_luong;
            $data = [
                'tai_khoan_id'=> $tai_khoan_id,
                'san_pham_id' => $san_pham_id,
                'so_luong' => $so_luong,
                'thanh_tien' => $thanh_tien,
                'created_at' => now(),
            ];
            $this->gio_hangs->addGioHang($tai_khoan_id, $data);
        }else{
            $so_luong_input=$request->input('so_luong');
            $so_luong=$gio_hang->so_luong+$so_luong_input;
            $thanh_tien=$gia_khuyen_mai*$so_luong;
            $data = [
                'so_luong' => $so_luong,
                'thanh_tien' => $thanh_tien,
            ];
            $gio_hang->update($data);
        }

    }

    public function capNhatGioHang(Request $request, $id){
        $gio_hang= $this->gio_hangs->find($id);
        if($gio_hang){
            $data = [
                'so_luong' => $request->input('so_luong'),
                'thanh_tien' => $request->input('thanh_tien')
            ];

            $this->gio_hangs->updateGioHang(Auth::user()->id, $id, $data);
        }
    }

    public function tiepTucDatHang(Request $request){

        //xoa gio hang
        if($request->has('xoa_gio_hang')){

            if($request->select){
                foreach($request->select as $id){
                    $gio_hang=$this->gio_hangs->find($id);
                    if($gio_hang){
                        $result=$this->gio_hangs->deleteSelect(Auth::user()->id,$id);
                    }else{
                        return redirect()->back()->with('error', 'Lỗi khi gửi dữ liệu ! Vui lòng thử lại sau ít phút.');
                    }
                }
                return redirect()->back()->with('success', 'Xóa thành công giỏ hàng !');
            }else{
                $result=$this->gio_hangs->deleteGioHang(Auth::user()->id);
                if(!$result){
                    return redirect()->back()->with('success', 'Xóa thành công giỏ hàng !');
                }else{
                    return redirect()->back()->with('error', 'Lỗi khi gửi dữ liệu ! Vui lòng thử lại sau ít phút.');
                }
            }
        }

        //tiep tuc dat hang
        if($request->has('tiep_tuc_dat_hang')){
            $gio_hang_ids = $request->input('select', []);

            if (empty($gio_hang_ids)) {
                return redirect()->back()->with('error', 'Bạn chưa chọn sản phẩm nào.');
            }

            // Lấy thông tin chi tiết của các sản phẩm được chọn từ cơ sở dữ liệu
            $gio_hang = $this->gio_hangs->loadChiTietThanhToan(Auth::user()->id, $gio_hang_ids);

            // Lưu thông tin vào session (hoặc bạn có thể truyền trực tiếp đến view)
            session()->put('gio_hangs', $gio_hang);
            return redirect()->route('gio-hang.chi-tiet-thanh-toan');
        }

    }

    public function xoaSanPhamGioHang($id){
        $result=$this->gio_hangs->deleteSelect(Auth::user()->id,$id);
        if(!$result){
            return redirect()->back()->with('success', 'Xóa thành công sản phẩm trong giỏ hàng !');
        }else{
            return redirect()->back()->with('error', 'Lỗi khi gửi dữ liệu ! Vui lòng thử lại sau ít phút.');
        }
    }

    public function huyDonHang(int $id){
        $don_hang=DonHang::where('id',$id)->first();
        if($don_hang){
            DonHang::where('id',$id)->update(['trang_thai'=>5]);
            return redirect()->route('gio-hang.don-mua')->with('success', 'Hủy đơn thành công !');
        }else{
            return redirect()->route('gio-hang.don-mua')->with('error', 'Lỗi khi gửi dữ liệu ! Vui lòng thử lại sau ít phút.');
        }
    }


}
