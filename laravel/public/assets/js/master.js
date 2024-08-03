
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

//gio hang
$(".qtybutton").on("click", function() {
    var $button = $(this);
    var oldValue = $button.parent().find("input[name='qtybutton']").val();
    var oldGiaKhuyenMai = $button.parent().find("input[name='gia_khuyen_mai']").val();
    var oldThanhTien = $button.parent().find("input[name='thanh_tien']");
    var so_luong_sp=$button.parent().find("input[name='so_luong_sp']").val();
    var thanhTienText=$button.parent().parent().parent().find(".thanhTien span");
    if ($button.text() === "+") {
        if(oldValue<so_luong_sp){
            var newVal = parseFloat(oldValue) + 1;
        }else{
            alert('Bạn đã vượt quá số lượng sản phẩm trong kho !');
            var newVal = parseFloat(oldValue);
        }

        //code vao day
        //end code
    } else {
        if (oldValue > 1) {
            var newVal = parseFloat(oldValue) - 1;
            //code vao day
            //end code
        } else {
            newVal = 1;
        }
    }
    oldThanhTien.val(parseInt(oldGiaKhuyenMai)*parseFloat(newVal));
    thanhTienText.text((parseInt(oldGiaKhuyenMai)*parseFloat(newVal)).toLocaleString('vi-VN', { style: 'currency', currency: 'VND' }));
    $button.parent().find("input[name='qtybutton']").val(newVal);
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
var slider = document.getElementById('price-slider');

noUiSlider.create(slider, {
    start: [0, 10000000],
    connect: true,
    range: {
        'min': 0,
        'max': 10000000
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
    document.getElementById('filter-price-range').innerHTML = values.join(' - ');
    document.getElementById('min-price').value = values[0].replace(/[₫,]/g, '');
    document.getElementById('max-price').value = values[1].replace(/[₫,]/g, '');
});
//end loc gia
