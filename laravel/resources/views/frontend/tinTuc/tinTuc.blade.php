@extends('layout.main')
@section('container')
<main class="main">
			<nav aria-label="breadcrumb" class="breadcrumb-nav">
				<div class="container">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('trang-chu.home')}}"><i class="icon-home"></i></a></li>
						<li class="breadcrumb-item active" aria-current="page">Tin tức</li>
					</ol>
				</div><!-- End .container -->
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="blog-section row">
                            @foreach ($tin_tucs as $item)
                            <div class="col-md-6 col-lg-4">
								<article class="post">
									<div class="post-media">
										<a href="{{route('tin-tuc.chi-tiet',$item->id)}}">
											<img src="{{Storage::url($item->hinh_anh)}} " alt="Post" width="225"
												height="280">
										</a>
										<div class="post-date">
                                            <span class="day">{{ \Carbon\Carbon::parse($item->created_at)->format('d') }}</span>
                                            <span class="month">{{ \Carbon\Carbon::parse($item->created_at)->format('M') }}</span>
                                        </div>
									</div><!-- End .post-media -->

									<div class="post-body">
										<h2 class="post-title">
											<a href="{{route('tin-tuc.chi-tiet',$item->id)}}">{{$item->tieu_de}}</a>
										</h2>
										<div class="post-content">
											<p>{!! Str::limit(strip_tags($item->noi_dung), 150, '...') !!}</p>
										</div><!-- End .post-content -->
									</div><!-- End .post-body -->
								</article><!-- End .post -->
							</div>
                            @endforeach

						</div>
					</div><!-- End .col-lg-9 -->

					<div class="sidebar-toggle custom-sidebar-toggle">
						<i class="fas fa-sliders-h"></i>
					</div>
					<div class="sidebar-overlay"></div>
					<aside class="sidebar mobile-sidebar col-lg-3">
						<div class="sidebar-wrapper" data-sticky-sidebar-options='{"offsetTop": 72}'>
							<div class="widget widget-post">
								<h4 class="widget-title">Bài đăng gần đây</h4>

								<ul class="simple-post-list">
                                    @foreach ($tin_tuc_gan_day as $item)
                                    <li>
										<div class="post-media">
											<a href="{{route('tin-tuc.chi-tiet',$item->id)}}">
												<img src="{{Storage::url($item->hinh_anh)}}" alt="Post">
											</a>
										</div><!-- End .post-media -->
										<div class="post-info">
											<a href="{{route('tin-tuc.chi-tiet',$item->id)}}">{!! Str::limit(strip_tags($item->tieu_de), 20, '...') !!}</a>
											<div class="post-meta">{{ \Carbon\Carbon::parse($item->created_at)->format('M') }} {{ \Carbon\Carbon::parse($item->created_at)->format('d') }}, {{ \Carbon\Carbon::parse($item->created_at)->format('Y') }}</div>
											<!-- End .post-meta -->
										</div><!-- End .post-info -->
									</li>
                                    @endforeach
								</ul>
							</div><!-- End .widget -->

							<div class="widget">
								<h4 class="widget-title">Tags</h4>

								<div class="tagcloud">
									<a href="#">Iphone</a>
									<a href="#">Samsung</a>
								</div><!-- End .tagcloud -->
							</div><!-- End .widget -->
						</div><!-- End .sidebar-wrapper -->
					</aside><!-- End .col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</main><!-- End .main -->
@endsection
