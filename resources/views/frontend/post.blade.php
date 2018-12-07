@extends('layouts.author_basic')
@section('title')
{{$post->seo_title}}
@endsection
@section('meta_description')
{{$post->meta_description}}
@endsection
@section('meta_keywords')
{{$post->meta_keywords}}
@endsection
@section('content')
<div class="main-content">
	@if($post->title)
	<article>
		<div class="post-img">
			<a href=""><img class="img-responsive" src="{{ asset('/storage/'.$post->image)}}" alt="Post"/></a>
		</div>
		{{--@forelse ($post->tags as $key=>$tag)
		<a href="" class="btn btn-default btn-sm btn-category" type="submit">{{$tag->name}}</a>
		@empty
		@endforelse--}}
		<a href="" ><h2 class="post-title">{{$post->title}}</h2></a>
		<div class="post-meta">
			<!-- <span><a href="#"><i class="fa fa-share-alt post-meta-icon"></i> 400 Shares </a></span>
			<span><a href="#"><i class="fa fa-comments post-meta-icon"></i> 20 Comments </a></span> -->
			<span><a href="#"><i class="fa fa-calendar-check-o post-meta-icon"></i> {{$post->created_at->diffForHumans()}}</a></span>
		</div>
		<div class="post-content">
			{!!$post->body!!}
		</div>
	</article>
	@else
	<article>
		<div class="post-img">
			<a href=""><img class="img-responsive" src="{{ asset('author-basic/images/sorry.jpg')}}"/></a>
		</div>
		<a ><h2 class="post-title">Article Tidak Ditemukan</h2></a>
		<div class="post-meta">
			<!-- <span><a href="#"><i class="fa fa-share-alt post-meta-icon"></i> 400 Shares </a></span>
			<span><a href="#"><i class="fa fa-comments post-meta-icon"></i> 20 Comments </a></span> -->
			<span><a href="#"><i class="fa fa-calendar-check-o post-meta-icon"></i> November, 25 2018 </a></span>
		</div>
		<div class="post-content">
			<p>Dengan segala keterbatasan waktu yang ada, saya tetap berusaha untuk sesering mungkin melakukan update. Anda juga dapat melakukan requet article melalui kontak  email saya. Terimakasih</p>
		</div>
	</article>
	@endif
	
</div><!-- main-content -->
@endsection