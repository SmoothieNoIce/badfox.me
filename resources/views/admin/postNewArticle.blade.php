@extends('layouts.badFoxStyle', ['category' => '4'])

@section('content')
<div class="fh5co-narrow-content-2">
	<ul class="nav nav-pills">
	  <li class="nav-item">
		<a class="nav-link" href="{{url('/admin/home')}}">後臺首頁</a>
	  </li>
	  <li class="nav-item">
	  <a class="nav-link active" href="{{url('/admin/articleList')}}">文章</a>
	  </li>
	  <li class="nav-item">
		  <a class="nav-link" href="{{url('/admin/tagList')}}">標籤</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="{{url('/admin/imgList')}}">圖片列表</a>
		  </li>
	  <li class="nav-item">
		<a class="nav-link" href="{{url('/admin/contentSetting')}}">內容設定</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="{{url('/admin/fullSetting')}}">主設定</a>
	  </li>
	  <li class="nav-item">
		  <a class="nav-link" href="{{url('/admin/logout')}}">登出</a>
	  </li>
	</ul>
</div>

<div class="fh5co-narrow-content-2">
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link active" href="#">略縮圖上傳</a>
			</li>
		</ul>
</div>

<div class="fh5co-narrow-content animated fadeInLeft" >

	<h2 class="fh5co-heading">新增文章</h2>

{{-- 	<form  action="{{url('admin/article/post')}}" method="POST">
		{{ csrf_field() }}
			<div class="form-group">
			  	<label class="fh5co-heading-2" >標題</label>
			  	<input class="form-control article-form" type="text" placeholder="TITLE" name="title">
			</div>
			<div class="form-group">
				<label class="fh5co-heading-2" >日期</label>
				<input class="form-control article-form" type="date" placeholder="Date" name="date">
			</div>
			<div class="form-group">
				<label class="fh5co-heading-2" >作者</label>
				<input class="form-control article-form" type="text" placeholder="AUTHOR" name="author">
			</div>
			<div class="form-group">
				<label class="fh5co-heading-2" >略縮圖</label>
				<input class="form-control article-form" type="text" placeholder="THUMBNAIL" name="thumbnail">
			</div>
			<div class="form-group">
				<label class="fh5co-heading-2" >文章內容</label>
				<textarea style="height:600px" class="form-control article-form" placeholder="CONTENT" name="content"></textarea>
			</div>
			<div class="form-group" id="app" >
				<label class="fh5co-heading-2" >標籤</label>
			<tag-input></tag-input>			
			</div>
			<button type="submit" class="btn btn-secondary" name="preview" value="preview">Preview</button>
			<button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
		</form> --}}
		<tag-input
		v-bind:mode="'newPost'"></tag-input>			

</div>
<script type="text/javascript" src="{{ url('js/app.js') }}"></script>
@endsection