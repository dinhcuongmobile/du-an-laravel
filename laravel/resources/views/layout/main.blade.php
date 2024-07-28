<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Đình Cường Mobile</title>
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/icons/favicon.png')}} ">


    <!-- <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '{{asset('')}} assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script> -->

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/demo4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}">
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler text-primary mr-2" type="button">
							<i class="fas fa-bars"></i>
						</button>
                        <a href="{{route('trang-chu.home')}}" class="logo">
                            <img src="{{asset('assets/images/icons/logo.png')}}" height="44">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right w-lg-max">
                        <div class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search...">
                                    <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <div class="user-menu">
                            <a href="#" class="header-icon clickable" title="login"><i class="icon-user-2"></i></a>
                            <div class="user-menu-content">
                                <a href="{{ route('tai-khoan.dang-nhap') }}">Đăng nhập</a>
                                <a href="{{ route('tai-khoan.dang-ky') }}">Đăng ký</a>
                            </div>
                        </div>

                        <div class="dropdown cart-dropdown">
                            <a href="{{route('gio-hang.show')}}" title="Cart" class="dropdown-toggle cart-toggle">
                                <i class="minicart-icon"></i>
                                <span class="cart-count badge-circle">3</span>
                            </a>
                        </div>
                        <!-- End .dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->

            <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
                <div class="container">
                    <nav class="main-nav w-100 navbar">
                        <ul class="menu">
                            <li class="active">
                                <a href="{{route('trang-chu.home')}}">Trang chủ</a>
                            </li>
                            <li><a href="blog.html">Giới thiệu</a></li>
                            <li>
                                <a href="{{route('san-pham.san-pham-danh-muc')}}">Sản phẩm</a>
                                <ul>
                                    @foreach ($danh_mucs as $item)
                                        <li><a href="">{{$item->ten_danh_muc}}</a></li>
                                    @endforeach
                                </ul>
                                <!-- End .megamenu -->
                            </li>
                            <li><a href="{{route('tin-tuc.show')}}">Tin tức</a></li>
                            <li><a href="contact.html">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->

<!-- container -->
@yield('container')
<!-- end container -->

<footer class="footer footerCss">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <a href="{{route('trang-chu.home')}}"> <img src="{{asset('assets/images/icons/logo.png')}}" alt="" width="250px"></a>
                                <p class="footerSlogan">Đã bán là không lom dom</p>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title" style="color:#323232">Thông tin</h4>

                                <ul>
                                    <li><a href="#">Tin tức</a></li>
                                    <li><a href="#">Giới thiệu</a></li>
                                    <li><a href="#">Bảo hành</a></li>
                                    <li><a href="#">Đánh giá chất lượng</a></li>
                                    <li><a href="#">Phương thức thanh toán</a></li>
                                </ul>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title" style="color:#323232">Chính sách</h4>

                                <ul>
                                    <li><a href="#">Thu cũ đổi mới</a></li>
                                    <li><a href="#">Giao hàng</a></li>
                                    <li><a href="#">Đổi trả</a></li>
                                    <li><a href="#">Bảo hành</a></li>
                                    <li><a href="#">Bảo mật thông tin</a></li>
                                </ul>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title" style="color:#323232">Địa chỉ liên hệ</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label" style="color:#323232">Địa chỉ:</span>Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội, Việt Nam
                                    </li>
                                    <li>
                                        <span class="contact-info-label" style="color:#323232">Liên hệ:</span><a href="tel:">+84 964 426 518</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label" style="color:#323232">Email:</span>nguyendinhcuong27072004@gmail.com</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label" style="color:#323232">Working Days/Hours:</span> Mon - Sun / 9:00 AM - 8:00 PM
                                    </li>
                                </ul>
                                <!-- End .social-icons -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .footer-middle -->
        </footer>
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets/js/jquery.min.js')}} "></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}} "></script>
    <script src="{{asset('assets/js/optional/isotope.pkgd.min.js')}} "></script>
    <script src="{{asset('assets/js/plugins.min.js')}} "></script>
    <script src="{{asset('assets/js/jquery.appear.min.js')}} "></script>

    <!-- Main JS File -->
    <script src="{{asset('assets/js/main.min.js')}} "></script>
</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jul 2024 03:38:55 GMT -->
</html>
