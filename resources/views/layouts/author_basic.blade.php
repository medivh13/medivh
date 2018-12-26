<!DOCTYPE html>
<html lang="en">
  <head>
  	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131112518-1"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'UA-131112518-1');
	</script>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-9901461487803247",
			enable_page_level_ads: true
		});
	</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <title>Tutorial Bahasa Indonesia - @yield('title')</title>

    <!-- Bootstrap -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href="{{ asset('author-basic/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('OwlCarousel2/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('OwlCarousel2/owl.theme.default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('OwlCarousel2/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('author-basic/css/font-awesome.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('author-basic/css/offcanvas.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('author-basic/css/style3.css')}}"/>
	<style type="text/css">
	@media only screen and (max-width: 600px) {
    	.carousel-caption{
    		display: none !important;
    	}
	}
	</style>
	@yield('css')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="wrapper">
		<header>
			<!--========================== Header-Top ================================-->
			<div class="header-top"><!--style="background-color: white !important;"-->
				<div class="container" >
					<div class="col-md-9 col-sm-7 xs-view">
						{{--<img class="logo" src="{{ asset('author-basic/logo.png')}}" alt="Logo" style="width:20% !important; height: 20% !important;" />--}}
					</div>
					<div class="col-md-3 col-sm-5 xs-view-right">
						<div class="search-section center-block pull-right">
							<form method="get" action="{{url('/')}}">
								<input type="text" class="form-control" id="exampleInputName2" name="search" placeholder="Search">
								<button type="submit" class="btn btn-default btn-xs"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div><!-- header-top -->
			
			<!--========================== Header-Nav ================================-->
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<div class="container">
						<p class="pull-left visible-xs">
							<button type="button" class="navbar-toggle" data-toggle="offcanvas">
								<i class="fa fa-long-arrow-right"></i>
								<i class="fa fa-long-arrow-left"></i>
							</button>
						</p>
						<div class="social-nav center-block visible-xs">
							<!-- <li><a href="https://github.com/medivh13" target="_blank"><i class="fa fa-github github"></i></a></li>
							<li><a href="https://www.linkedin.com/in/jody-almaida-putra-667772ab/" target="_blank"><i class="fa fa-linkedin linkedin"></i></a></li>
							<li><a href="https://www.instagram.com/almaidajody/" target="_blank"><i class="fa fa-instagram instagram"></i></a></li> -->
						</div>
						<!--toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">
								<li><a href="{{URL('/')}}">Home</a></li>
								<li><a href="https://jodyalmaida.com" target="_blank">About Me</a></li>
							</ul>
							<br>
							<img class="logo pull-right" src="{{ asset('author-basic/logo.png')}}" alt="Logo" style="width:20% !important; height: 20% !important;" />
							<!-- <ul class="nav navbar-nav navbar-right hidden-xs">
								<li><a href="https://github.com/medivh13" target="_blank"><i class="fa fa-github github"></i></a></li>
								<li><a href="https://www.linkedin.com/in/jody-almaida-putra-667772ab/" target="_blank"><i class="fa fa-linkedin linkedin"></i></a></li>
								<li><a href="https://www.instagram.com/almaidajody/" target="_blank"><i class="fa fa-instagram instagram"></i></a></li>
							</ul> -->
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-->
				</nav>
			</div><!-- Header-Nav -->
		</header>
		<!--========================== Contant-Area================================-->
		<div class="contant-area">
			<div class="container">
				<div class="row row-offcanvas row-offcanvas-left">
					<div class="col-md-12 col-sm-8 col-xs-12">
						<div id="myCarousel" class="owl-carousel owl-theme" data-ride="carousel">
							<div class="item">
								<img src="{{asset('author-basic/images/code.jpg')}}"  style="width:100%;">
								<div class="carousel-caption">
									<h3>Develop Website Menggunakan Framework Laravel</h3>
								</div>
							</div>

							<div class="item">
								<img src="{{asset('author-basic/images/desk.jpg')}}" style="width:100%;">
								<div class="carousel-caption">
									<h3>Develop Android App Menggunakan React Native</h3>
								</div>
							</div>

							<div class="item">
								<img src="{{asset('author-basic/images/serem.jpg')}}"  style="width:100%;">
								<div class="carousel-caption">
									<h3>Hidup Tidak Selamanya Coding, Hilangkan Kejenuhan Disini</h3>
								</div>
							</div>

							{{-- <div class="item">
								<img src="{{asset('author-basic/images/ori.png')}}"  style="width:100%;">
								<div class="carousel-caption">
									<h3>Tutorial Web dan Mobile App Dev Bahasa Indonesia</h3>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
				<br>
				<div class="row row-offcanvas row-offcanvas-left">
					<div class="col-md-3 col-sm-4 col-xs-6 sidebar-offcanvas" id="sidebar">
						<!--========================== left-sidebar ================================-->
						<div class="left-sidebar">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Categories
												<i class="fa fa-angle-right"></i>
												<i class="fa fa-angle-down"></i>
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											<?php $category = App\Models\Category::all(); ?>
											<ul>
												@foreach($category as $key=>$val)
												<li><a href="{{URL('/category/'.$val->name)}}">{{$val->name}}</a></li>
												@endforeach

											</ul>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- left-sidebar-->
					</div>
					<!--========================== main-content ================================-->
					<div class="col-md-6 col-sm-8 col-xs-12">
						@yield('content')
					</div>
					<!--========================== Right-Sidebar ================================-->
					<div class="col-md-3 col-sm-12 col-xs-12">
						<div class="right-sidebar">
							<div class="righ-sidebar-body">
								<?php $post = App\Models\Post::latest()->published()->take(3)->get(); ?>
								<?php $laravel = App\Models\Post::where('category_id',1)->latest()->published()->take(2)->get(); ?>
								<?php $android = App\Models\Post::where('category_id',2)->latest()->published()->take(2)->get(); ?>
								<?php $others = App\Models\Post::where('category_id',3)->latest()->published()->take(2)->get(); ?>
								<div class="item">
									<a href=""><h4 class="post-title slide-title">Latest Post</h4></a>
									@forelse ($post as $key=>$val)
									<div class="col-md-12 col-sm-6">
										<a href='{{ url("/post/{$val->slug}") }}'><img src="{{asset('/storage/'.$val->image)}}" alt="Post"/></a>
										<div class="carousel-caption">
											<a href='{{ url("/post/{$val->slug}") }}'"><h5 class="post-title">{{$val->title}}</h5></a>
											<div class="post-meta">
												<span><i class="fa fa-calendar-check-o post-meta-icon"></i> {{$val->created_at->diffForHumans()}}</span>
											<!-- <span><a href="#"><i class="fa fa-comments post-meta-icon"></i> 50 </a></span> -->
											</div>
											<div class="post-content no-border">
												{!!str_limit($val->body,500)!!}
											</div>
										</div>
									</div><br>
									@empty
									<div class="col-md-12 col-sm-6">
										<a href="#"><img src="{{ asset('author-basic/images/sorry.jpg')}}" alt="Post"/></a>
										<div class="carousel-caption">
											<a href="#"><h5 class="post-title">Article Tidak Ditemukan</h5></a>
											<div class="post-meta">
											
											</div>
											<div class="post-content no-border">
												<p>Dengan segala keterbatasan waktu yang ada, saya tetap berusaha untuk sesering mungkin melakukan update. Anda juga dapat melakukan request article melalui kontak  email saya. Terimakasih</p>
											</div>
										</div>
									</div><br>
									@endforelse
								</div>
								<div class="item">
									@forelse ($android as $key=>$val)
									<a href=""><h4 class="post-title slide-title">Android Studio</h4></a>
									<div class="col-md-12 col-sm-6">
										<a href='{{ url("/post/{$val->slug}") }}'><img src="{{asset('/storage/'.$val->image)}}" alt="Post"/></a>
										<div class="carousel-caption">
											<a href='{{ url("/post/{$val->slug}") }}'><h5 class="post-title">{{$val->title}}</h5></a>
											<div class="post-meta">
												<span><i class="fa fa-calendar-check-o post-meta-icon"></i> {{$val->created_at->diffForHumans()}}</span>
												<!-- <span><a href="#"><i class="fa fa-comments post-meta-icon"></i> 50 </a></span> -->
											</div>
											<div class="post-content no-border">
												{!!str_limit($val->body,500)!!}
											</div>
										</div>
									</div><br>
									@empty
									<div class="col-md-12 col-sm-6">
										<a href="#"><img src="{{asset('/storage/'.$val->image)}}" alt="Post"/></a>
										<div class="carousel-caption">
											<a href="#"><h5 class="post-title">Article Tidak Ditemukan</h5></a>
											<div class="post-meta">
											<!-- <span><a href="#"><i class="fa fa-calendar-check-o post-meta-icon"></i> april 13, 2015 </a></span>
												<span><a href="#"><i class="fa fa-comments post-meta-icon"></i> 50 </a></span> -->
											</div>
											<div class="post-content no-border">
												<p>Dengan segala keterbatasan waktu yang ada, saya tetap berusaha untuk sesering mungkin melakukan update. Anda juga dapat melakukan request article melalui kontak  email saya. Terimakasih</p>
											</div>
										</div>
									</div><br>
									@endforelse
								</div><!--item lg-->
								<div class="item">
									<a href=""><h4 class="post-title slide-title">Laravel</h4></a>
									@forelse ($laravel as $key=>$val)
									<div class="col-md-12 col-sm-6">
										<a href='{{ url("/post/{$val->slug}") }}'><img src="{{asset('/storage/'.$val->image)}}" alt="Post"/></a>
										<div class="carousel-caption">
											<a href='{{ url("/post/{$val->slug}") }}'><h5 class="post-title">{{$val->title}}</h5></a>
											<div class="post-meta">
												<span><i class="fa fa-calendar-check-o post-meta-icon"></i> {{$val->created_at->diffForHumans()}}</span>
												<!-- <span><a href="#"><i class="fa fa-comments post-meta-icon"></i> 50 </a></span> -->
											</div>
											<div class="post-content no-border">
												{!!str_limit($val->body,500)!!}
											</div>
										</div>
									</div><br>
									@empty
									<div class="col-md-12 col-sm-6">
										<a href="#"><img src="{{ asset('author-basic/images/sorry.jpg')}}" alt="Post"/></a>
										<div class="carousel-caption">
											<a href="#"><h5 class="post-title">Article Tidak Ditemukan</h5></a>
											<div class="post-meta">
											<!-- <span><a href="#"><i class="fa fa-calendar-check-o post-meta-icon"></i> april 13, 2015 </a></span>
												<span><a href="#"><i class="fa fa-comments post-meta-icon"></i> 50 </a></span> -->
											</div>
											<div class="post-content no-border">
												<p>Dengan segala keterbatasan waktu yang ada, saya tetap berusaha untuk sesering mungkin melakukan update. Anda juga dapat melakukan request article melalui kontak  email saya. Terimakasih</p>
											</div>
										</div>
									</div><br>
									@endforelse
								</div><!--item lg-->
								<div class="item">
									@forelse ($others as $key=>$val)
									<a href=""><h4 class="post-title slide-title">Others</h4></a>
									<div class="col-md-12 col-sm-6">
										<a href='{{ url("/post/{$val->slug}") }}'><img src="{{asset('/storage/'.$val->image)}}" alt="Post"/></a>
										<div class="carousel-caption">
											<a href='{{ url("/post/{$val->slug}") }}'><h5 class="post-title">{{$val->title}}</h5></a>
											<div class="post-meta">
												<span><i class="fa fa-calendar-check-o post-meta-icon"></i> {{$val->created_at->diffForHumans()}}</span>
												<!-- <span><a href="#"><i class="fa fa-comments post-meta-icon"></i> 50 </a></span> -->
											</div>
											<div class="post-content no-border">
												{!!str_limit($val->body,500)!!}
											</div>
										</div>
									</div><br>
									@empty
									<div class="col-md-12 col-sm-6">
										<a href=""><h4 class="post-title slide-title">Others</h4></a>
										<a href="#"><img src="{{ asset('author-basic/images/sorry.jpg')}}" alt="Post"/></a>
										<div class="carousel-caption">
											<a href="#"><h5 class="post-title">Article Tidak Ditemukan</h5></a>
											<div class="post-meta">
											<!-- <span><a href="#"><i class="fa fa-calendar-check-o post-meta-icon"></i> april 13, 2015 </a></span>
												<span><a href="#"><i class="fa fa-comments post-meta-icon"></i> 50 </a></span> -->
											</div>
											<div class="post-content no-border">
												<p>Dengan segala keterbatasan waktu yang ada, saya tetap berusaha untuk sesering mungkin melakukan update. Anda juga dapat melakukan request article melalui kontak  email saya. Terimakasih</p>
											</div>
										</div>
									</div><br>
									@endforelse
								</div>
							</div><!-- Righ-sidebar-body -->
						</div><!-- Right-Sidebar -->
					</div>
				</div>
			</div><!--Container -->
		</div><!-- Content-area -->
		<footer>
			<div class="footer-menu">
				<!-- <div class="container">
					<div class="col-md-4 col-sm-4 center-block">
						<h3 class="footer-head">this author blog from crea tivemine</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<div class="social">
							<li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus google-plus"></i></a></li>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 mobile-footer center-block">
						<h4 class="footer-head">recent posts</h3>
						<ul class="ul-left">
							<li><a href="#">Ut enim ad minim veniam</a></li>
							<li><a href="#">Quis nostrud exercitation laboris</a></li>
							<li><a href="#">Duis aute irure dolor reprehenderit</a></li>
							<li><a href="#">Excepteur sint occaecat non</a></li>
							<li><a href="#">Proident,sunt in culpa qui officia</a></li>
							<li><a href="#">Accusantium doloremque</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-4 mobile-footer center-block">
						<h4 class="footer-head">article categories</h3>
						<ul class="ul-left">
							<li><a href="#">Academy</a></li>
							<li><a href="#">Blogging</a></li>
							<li><a href="#">Conversion</a></li>
							<li><a href="#">Design</a></li>
							<li><a href="#">E-Commerce</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Infographics</a></li>
							<li><a href="#">Launch</a></li>
							
						</ul>
						<ul class="ul-right">
							<li><a href="#">Strategies</a></li>
							<li><a href="#">Marketing</a></li>
							<li><a href="#">SEO</a></li>
							<li><a href="#">Social</a></li>
							<li><a href="#">Media</a></li>
							<li><a href="#">Testing</a></li>
							<li><a href="#">Twitter</a></li>
						</ul>
					</div>
				</div> -->
			</div><!-- Footer-menu -->
			<div class="footer-nav">
				<div class="container">
					<div class="col-md-6 col-sm-5">
						<p>&copy; 2018 sharehubid.com</p>
						{{-- <p>Design and Template by Author Basic Template</p> --}}
					</div>
					<div class="col-md-6 col-sm-7">
						<ul>
							<li><a href="{{URL('/')}}">Home</a></li>
							<li><a href="https://jodyalmaida.com}" target="_blank">About Me</a></li>
						</ul>
					</div>
				</div>
				<!-- Go TO TOP -->
				<div id="toTop" class="btn btn-info" style="display: block;">
					<span class="fa fa-angle-up"></span>
				</div><!-- /Go-to-top -->
			</div>
		</footer>
	</div><!-- /Wrapper -->
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('author-basic/js/bootstrap.min.js')}}"></script>
    <script src ="{{ asset('author-basic/js/custom.js')}}"></script>
    <script src="{{ asset('OwlCarousel2/owl.carousel.js')}}"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
    		// alert('cek');
    		$(".owl-carousel").owlCarousel({
    			loop:true,
    			center:true,
    			margin:10,
    			nav:true,
    			autoWidth:true,
    			autoHeight:true,
    			responsiveClass:true,
    			autoplay:true,
    			autoplayTimeout:5000,
    			autoplayHoverPause:true,
    			responsive:{
    				0:{
    					items:1,
    					nav:true
    				},
    				600:{
    					items:3,
    					nav:true
    				},
    				1000:{
    					items:5,
    					nav:true
    				}
    			}
    		});
    	});
    </script>
	@yield('js')
  </body>
</html>