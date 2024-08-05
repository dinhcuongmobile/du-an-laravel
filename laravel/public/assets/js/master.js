
// thong bao loi error
document.addEventListener('DOMContentLoaded', (event) => {
    const errorAlert = document.getElementById('error-alert');
    if (errorAlert) {
        setTimeout(() => {
            errorAlert.style.transition = 'opacity 0.5s ease-out';
            errorAlert.style.opacity = '0';
            setTimeout(() => {
                errorAlert.style.display = 'none';
            }, 500); // Thời gian cho quá trình mờ dần
        }, 10000); // 10 giây
    }
});
// end thong bao loi error

//them gio hang
function themGioHang(san_pham_id,gia_khuyen_mai){
    var token= document.querySelector("input[name='_token']").value;

    $.ajax({
        type: 'POST',
        url: '/gio-hang/them-gio-hang',
        data: {
            _token: token,
            san_pham_id: san_pham_id,
            gia_khuyen_mai: gia_khuyen_mai
        },
        success: function(response){
            $("#thongbaothemgiohang").fadeIn();
            setTimeout(function() {
                $("#thongbaothemgiohang").fadeOut();
            }, 1500);

        },
        error: function(error) {
            window.location.href= '/tai-khoan/dang-nhap';
        }
    });
}
//end them gio hang

//them gio hang chi tiet
function themGioHangChiTiet(san_pham_id,gia_khuyen_mai){
    var token= document.querySelector("input[name='_token']").value;
    var so_luong=document.getElementById('soLuongChiTiet').value;

    $.ajax({
        type: 'POST',
        url: '/gio-hang/them-gio-hang-chi-tiet',
        data: {
            _token: token,
            san_pham_id: san_pham_id,
            so_luong: so_luong,
            gia_khuyen_mai: gia_khuyen_mai
        },
        success: function(response){
            $("#thongbaothemgiohang").fadeIn();
            setTimeout(function() {
                $("#thongbaothemgiohang").fadeOut();
            }, 1500);

        },
        error: function(error) {
            window.location.href= '/tai-khoan/dang-nhap';
        }
    });
}
//end them gio hang chi tiet

//da nhan hang
function daNhanHang(don_hang_id){
    var token= document.querySelector("input[name='_token']").value;
    $.ajax({
        type: 'PUT',
        url: '/gio-hang/da-nhan-hang/'+don_hang_id,
        data: {
            _token: token,
            id: don_hang_id
        },
        success: function(response){
            $("#thongbaothemgiohang").fadeIn();
            $('#cart-message').text('Cảm ơn bạn đã mua hàng <3.');
            setTimeout(function() {
                $("#thongbaothemgiohang").fadeOut();
            }, 1500);

            $('.btnDaNhan[data-id="' + don_hang_id + '"]').hide();
        },
        error: function(error) {
            console.log(error);

        }
    });
}
//end da nhan hang

//gio hang
$(".qtybutton").on("click", function() {
    var $button = $(this);
    var $input = $button.parent().find("input[name='qtybutton']");
    var oldValue = parseInt($input.val());
    var so_luong_sp = parseInt($button.parent().find("input[name='so_luong_sp']").val());
    var oldGiaKhuyenMai = $button.parent().find("input[name='gia_khuyen_mai']").val();
    var oldThanhTien = $button.parent().find("input[name='thanh_tien']");
    var thanhTienText=$button.parent().parent().parent().find(".thanhTien span");
    if ($button.text() === "+") {
        if (oldValue < so_luong_sp) {
            var newVal = oldValue + 1;
        } else {
            alert('Bạn đã vượt quá số lượng sản phẩm trong kho!');
            var newVal = oldValue;
        }
    } else {
        if (oldValue > 1) {
            var newVal = oldValue - 1;
        } else {
            newVal = 1;
        }
    }
    oldThanhTien.val(parseInt(oldGiaKhuyenMai)*parseFloat(newVal));
    thanhTienText.text((parseInt(oldGiaKhuyenMai)*parseFloat(newVal)).toLocaleString('vi-VN', { style: 'currency', currency: 'VND' }));
    $input.val(newVal);
    tongthanhtoan();
    var id = $button.parent().find("input[name='id']").val();
    var so_luong=$button.parent().find("input[name='qtybutton']").val();
    var thanh_tien=$button.parent().find("input[name='thanh_tien']").val();
    var token=$button.parent().find("input[name='_token']").val();
    $.ajax({
        type: "PUT",
        url: "/gio-hang/cap-nhat-gio-hang/"+id,
        data: {
            _token: token,
            id: id,
            so_luong: so_luong,
            thanh_tien: thanh_tien
        },
        success: function(response) {

          },
          error: function(error) {
            console.error('Lỗi: ', error);
            alert('Có lỗi xảy ra');
          }
    });
});
function tongthanhtoan(){
    var tong=0;
    var arrTr=document.querySelectorAll(".trgiohang");
    arrTr.forEach(function(element){
        var thanh_tien=element.querySelector("input[name='thanh_tien']").value;
        tong+=parseInt(thanh_tien);
    })
    var tongThanhToanText=document.querySelector("#tongThanhToan");
    tongThanhToanText.innerHTML=tong.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
}
//end gio hang

//so luong chi tiet san pham
$(".soLuong").on("click", function() {
    var $button = $(this);
    var $input = $button.parent().find("input[name='soLuong']");
    var oldValue = parseInt($input.val());
    var so_luong_sp = parseInt($button.parent().find("input[name='so_luong_sp']").val());

    if ($button.text() === "+") {
        if (oldValue < so_luong_sp) {
            var newVal = oldValue + 1;
        } else {
            alert('Bạn đã vượt quá số lượng sản phẩm trong kho!');
            var newVal = oldValue;
        }
    } else {
        if (oldValue > 1) {
            var newVal = oldValue - 1;
        } else {
            newVal = 1;
        }
    }

    $input.val(newVal);
});
//end so luong chi tiet

// ajax binh luan
function binhLuan(id) {
    var noidung = $("#noidung").val();
    var token = $("#binhLuanToken").val();
    var countBinhLuan1 = parseInt($("#countBinhLuan1").text());
    var countBinhLuan2 = parseInt($("#countBinhLuan2").text());
    var ho_va_ten = $("#hoTenBinhLuan").val();
    var imageUrl = "/assets/images/blog/avt_danh_gia.png";
    var ngaybinhluan = $("#ngaybinhluan").val();

    // Chuyển đổi định dạng ngày tháng
    var date = new Date(ngaybinhluan);
    var options = { year: 'numeric', month: 'short', day: '2-digit' };
    var formattedDate = date.toLocaleDateString('en-US', options);

    if (noidung == "") {
        $("#binhluanErr").text("Vui lòng nhập nội dung trước khi gửi!");
    } else {
        $.ajax({
            type: 'POST',
            url: '/san-pham/binh-luan/' + id,
            data: {
                _token: token,
                noidung: noidung
            },
            success: function(response) {
                $("#countBinhLuan1").text(countBinhLuan1 + 1);
                $("#countBinhLuan2").text(countBinhLuan2 + 1);
                $('#loadBinhLuan').prepend(
                    '<div class="comment-list">' +
                        '<div class="comments">' +
                            '<figure class="img-thumbnail">' +
                                '<img src="'+ imageUrl +'" alt="author" width="80" height="80">' +
                            '</figure>' +
                            '<div class="comment-block">' +
                                '<div class="comment-header">' +
                                    '<div class="comment-arrow"></div>' +
                                    '<span class="comment-by">' +
                                        '<strong>' + ho_va_ten + '</strong> – ' + formattedDate +
                                    '</span>' +
                                '</div>' +
                                '<div class="comment-content">' +
                                    '<p>' + noidung + '</p>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>'
                );
                $('#noidung').val('');
                $("#binhluanErr").text("");
            },
            error: function(error) {
                console.error('Lỗi: ', error);
                alert('Có lỗi xảy ra khi gửi bình luận');
            }
        });
    }
}
//end ajax binh luan

//don mua

$(document).ready(function(){
    $(".an").hide();
    $("#tap1").fadeIn();
    $(".nav-tab li").click(function(){
        //active nav tabs
        $(".nav-tab li").removeClass("active");
        $(this).addClass("active");

        //Show tap
        let idtap= $(this).children('a').attr('href');
        $(".an").hide();
        $(idtap).fadeIn();
        return false;
    });
});

//end don mua

// loc theo gia
$(document).ready(function() {
    var slider = document.getElementById('priceSlider');
    if(slider){
        noUiSlider.create(slider, {
            start: [0, 100000000],
            connect: true,
            range: {
                'min': 0,
                'max': 100000000
            },
            format: {
                to: function(value) {
                    return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(value);
                },
                from: function(value) {
                    return Number(value.replace(/[₫,]/g, ''));
                }
            }
        });

        slider.noUiSlider.on('update', function(values, handle) {
            document.getElementById('filterPriceRange').innerHTML = values.join(' - ');
            document.getElementById('minPrice').value = values[0].replace(/[₫\s.,]/g, '');
            document.getElementById('maxPrice').value = values[1].replace(/[₫\s.,]/g, '');
        });
    }
});
//end loc gia

//Lien he
//ajax lien he
function guilienhe(){
    var hovaten=$("#hovatenlh").val();
    var email=$("#emaillh").val();
    var sodienthoai=$("#sodienthoailh").val();
    var noidung=$("#noidunglh").val();
    var check=true;
    if(hovaten==""){
        $("#hovatenlhErr").text("Vui lòng không bỏ trống !");
        check=false;
    }else $("#hovatenlhErr").text("");
    if(email==""){
        $("#emaillhErr").text("Vui lòng không bỏ trống !");
        check=false;
    }else{
        var regemail=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        if (!regemail.test(email)) {
            $("#emaillhErr").text("Email không hợp lệ !");
            check= false;
        }
        else{
            $("#emaillhErr").text("");
        }
    }
    if(sodienthoai==""){
        $("#sodienthoailhErr").text("Vui lòng không bỏ trống !");
        check=false;
    }else $("#sodienthoailhErr").text("");
    if(noidung==""){
        $("#noidunglhErr").text("Vui lòng không bỏ trống !");
        check=false;
    }else $("#noidunglhErr").text("");
    if(check){
        var token = $("#tokenLienHe").val();
        $.ajax({
            type: "post",
            url: "/lien-he/gui-lien-he",
            data: {
                _token: token,
                ho_va_ten: hovaten,
                email: email,
                so_dien_thoai: sodienthoai,
                noi_dung: noidung
            },
            success: function(response){
                alert("Bạn đã gửi liên hệ thành công. Đợi chúng tôi phản hồi!") ;
                $("#hovatenlh").val("");
                $("#emaillh").val("");
                $("#sodienthoailh").val("");
                $("#noidunglh").val("");
            },
            error: function(error){
                console.log(error);
                alert("có lỗi khi gửi liên hệ. Vui lòng thử lại sau!");
            }
        });
    }
}
//end ajax lien he
//end lien he
