@extends('layouts.badFoxStyle', ['category' => '4'])

@section('content')
<div class="fh5co-narrow-content-2">
	<ul class="nav nav-pills">
	  <li class="nav-item">
		<a class="nav-link" href="{{url('/admin/home')}}">後臺首頁</a>
	  </li>
	  <li class="nav-item">
	  <a class="nav-link" href="{{url('/admin/articleList')}}">文章</a>
	  </li>
	  <li class="nav-item">
		  <a class="nav-link" href="{{url('/admin/tagList')}}">標籤</a>
		  </li>
	  <li class="nav-item">
		<a class="nav-link" href="{{url('/admin/contentSetting')}}">內容設定</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link active" href="{{url('/admin/fullSetting')}}">主設定</a>
	  </li>
	  <li class="nav-item">
		  <a class="nav-link" href="{{url('/admin/logout')}}">登出</a>
	  </li>
	</ul>
</div>


<div class="fh5co-narrow-content-2 animated fadeInLeft" data-animate-effect="fadeInLeft">

    <h2 class="fh5co-heading">設定</h2>

</div>
 @endsection