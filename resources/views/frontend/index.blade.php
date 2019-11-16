@extends('layouts.author_basic')
@section('title')
{{'Web & Android App'}}
@endsection
@section('meta_description')
{{'Tutorial Laravel dan Android Studio'}}
@endsection
@section('meta_keywords')
{{'laravel, vue, android studio, bahasa indonesia'}}
@endsection
@section('content')
<div class="main-content">
	@forelse ($post as $key=>$val)
	<article>
		<div class="post-img">
			<img class="img-responsive" src="{{asset('/storage/'.$val->image)}}" alt="Post"/>
		</div>
		{{--@forelse ($val->tags as $key=>$tag)
		<button class="btn btn-default btn-sm btn-category">{{$tag->name}}</button>
		@empty
		@endforelse--}}
		<a href='{{ url("/post/{$val->slug}") }}'><h2 class="post-title">{{$val->title}}</h2></a>
		<div class="post-meta">
			<!-- <span><a href="#"><i class="fa fa-share-alt post-meta-icon"></i> 400 Shares </a></span>
			<span><a href="#"><i class="fa fa-comments post-meta-icon"></i> 20 Comments </a></span> -->
			<span><i class="fa fa-calendar-check-o post-meta-icon"></i> {{$val->created_at->diffForHumans()}}</span>
		</div>
		<div class="post-content">
			<p>{!!str_limit($val->body,500)!!}</p>
			<a href='{{ url("/post/{$val->slug}") }}'  class="btn btn-sm btn-category">See more</a>
		</div>
	</article>
	@empty
	<article>
		<div class="post-img">
			<img class="img-responsive" src="{{ asset('author-basic/images/sorry.jpg')}}"/>
		</div>
		<h2 class="post-title">Article Tidak Ditemukan</h2>
		<div class="post-meta">
			<!-- <span><a href="#"><i class="fa fa-share-alt post-meta-icon"></i> 400 Shares </a></span>
			<span><a href="#"><i class="fa fa-comments post-meta-icon"></i> 20 Comments </a></span> -->
			<span><i class="fa fa-calendar-check-o post-meta-icon"></i> November, 25 2018 </span>
		</div>
		<div class="post-content">
			<p>Dengan segala keterbatasan waktu yang ada, saya tetap berusaha untuk sesering mungkin melakukan update. Anda juga dapat melakukan requet article melalui kontak  email saya. Terimakasih</p>
		</div>
	</article>
	@endforelse
	
</div><!-- main-content -->
<div class="pagination">
	<nav>
		<!-- <div align="center" > -->
			{{$post->appends(['search' => request()->get('search')])->links()}}
		<!-- </div> -->
	</nav>
</div>
@endsection
