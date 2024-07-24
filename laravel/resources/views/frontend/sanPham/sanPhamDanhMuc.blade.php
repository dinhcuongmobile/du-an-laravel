@extends('layout.main')
@section('container')
<main class="main">

            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('trang-chu.home')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-lg-9 main-content">
                        <!-- <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                            <div class="toolbox-left">
                                <a href="#" class="sidebar-toggle">
                                    <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
										<line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
										<line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
										<line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
										<line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
										<line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
										<line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
										<path
											d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
											class="cls-2"></path>
										<path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
										<path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
										<path
											d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
											class="cls-2"></path>
									</svg>
                                    <span>Filter</span>
                                </a>
                            </div>
                        </nav> -->

                        <div class="row">
                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/product-1.jpg')}} " width="280" height="280" alt="product" />
                                            <img src="{{asset('assets/images/products/product-1-2.jpg')}} " width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                            <div class="product-label label-sale">-20%</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">Danh mục sản phẩm</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Ultimate 3D Bluetooth
												Speaker</a> </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="product.html" class="btn-icon btn-add-cart"><i
													class="fa fa-arrow-right"></i><span>SELECT
													OPTIONS</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/product-2.jpg')}} " width="280" height="280" alt="product" />
                                            <img src="{{asset('assets/images/products/product-2-2.jpg')}} " width="280" height="280" alt="product" />
                                        </a>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Brown Women Casual HandBag</a>
                                        </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="product-price">$33.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="product.html" class="btn-icon btn-add-cart"><i
													class="fa fa-arrow-right"></i><span>SELECT
													OPTIONS</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/product-3.jpg')}} " width="280" height="280" alt="product" />
                                            <img src="{{asset('assets/images/products/product-3-2.jpg')}} " width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-sale">-20%</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Circled Ultimate 3D
												Speaker</a> </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>

                                        </div>
                                        <!-- End .price-box -->
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
													class="icon-shopping-cart"></i>ADD TO CART</a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/product-4.jpg')}} " width="280" height="280" alt="product" />
                                            <img src="{{asset('assets/images/products/product-4-2.jpg')}} " width="280" height="280" alt="product">
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-sale">-30%</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Blue Backpack for the Young -
												S</a> </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="product.html" class="btn-icon btn-add-cart"><i
													class="fa fa-arrow-right"></i><span>SELECT
													OPTIONS</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/product-5.jpg')}} " width="280" height="280" alt="product" />
                                            <img src="{{asset('assets/images/products/product-5-2.jpg')}} " width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Casual Spring Blue Shoes</a>
                                        </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
													class="icon-shopping-cart"></i>ADD TO CART</a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('assets/images/products/product-6.jpg')}} " width="280" height="280" alt="product">
                                            <img src="{{asset('assets/images/products/product-6-2.jpg')}} " width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-sale">-8%</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Men Black Gentle Belt</a>
                                        </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
													class="icon-shopping-cart"></i>ADD TO CART</a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->
                        </div>
                        <!-- End .row -->

                        <nav class="toolbox toolbox-pagination float-right">

                            <ul class="pagination toolbox-item">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><span class="page-link">...</span></li>
                                <li class="page-item">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                        <div class="sidebar-wrapper">
                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Danh mục sản phẩm</a>
                                </h3>

                                <div class="collapse show" id="widget-body-2">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <li><a href="#">Oppo<span class="products-count">(2)</span></a></li>
                                            <li><a href="#">Xiaomi<span class="products-count">(2)</span></a></li>
                                            <li><a href="#">Samsung<span class="products-count">(2)</span></a></li>
                                            <li><a href="#">Iphone<span class="products-count">(2)</span></a></li>
                                        </ul>
                                    </div>
                                    <!-- End .widget-body -->
                                </div>
                                <!-- End .collapse -->
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .sidebar-wrapper -->
                    </aside>
                    <!-- End .col-lg-3 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->

            <div class="mb-4"></div>
            <!-- margin -->
        </main>
@endsection