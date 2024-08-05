@extends('layout.main')
@section('container')
    <main class="main">
        <form>
            <div class="container">
                <div class="map mb-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.868088396546!2d105.74435187508114!3d21.0379634806137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455305afd834b%3A0x17268e09af37081e!2sT%C3%B2a%20nh%C3%A0%20FPT%20Polytechnic.!5e0!3m2!1svi!2s!4v1701953681942!5m2!1svi!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="guilienhe">
                    <div class="bentrai">
                        <h2>Liên hệ với chúng tôi</h2><br>
                        <div class="thongtinlienhe">
                            <h3>Đình Cường Mobile - TP. Hà Nội</h3>
                            <p><span>Địa chỉ:</span> Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô,
                                <br> Xuân Phương, Nam Từ Liêm, Hà Nội, Việt Nam</p>
                            <p><span>Hotline:</span> +84 964 426 518</p>
                            <p><span>Email:</span> nguyendinhcuong27072004@gmail.com</p>
                        </div>
                    </div>
                    <div class="benphai">
                        <div class="mb-3">
                            <label for="hovatenlh" class="form-label">Họ và Tên</label>
                            <input type="text" id="hovatenlh" class="form-control" placeholder="Nhập họ và tên...">
                            <p id="hovatenlhErr"></p>
                        </div>
                        <div class="mb-3">
                            <label for="emaillh" class="form-label">Email: </label>
                            <input type="text" id="emaillh" class="form-control" placeholder="Nhập email...">
                            <p id="emaillhErr"></p>
                        </div>
                        <div class="mb-3">
                            <label for="sodienthoailh" class="form-label">Số điện thoại</label>
                            <input type="text" id="sodienthoailh" class="form-control" placeholder="Nhập số điện thoại...">
                            <p id="sodienthoailhErr"></p>
                        </div>
                        <div class="mb-3">
                            <label for="noidunglh" class="form-label">Mô tả</label>
                            <textarea class="form-control" rows="5" id="noidunglh" placeholder="Nhập nội dung liên hệ..."></textarea>
                            <p id="noidunglhErr"></p>
                        </div>
                        <input type="hidden" id="tokenLienHe" name="_token" value="{{csrf_token()}}">
                        <button type="button" class="btn btn-success mb-5" onclick="guilienhe()">Gửi liên hệ</button>
                    </div>
                </div>
            </div>
        </form>
    </main><!-- End .main -->
@endsection
