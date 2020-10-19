@extends("layouts.user")

@section("content")

<div class="container">

	<h1>{{ $book->title }}</h1>
	<span>{{ $book->author_name }}</span>
	<p>{{ $book->description }}</p>

	<img src="{{ $book->image_src }}">
		
</div>

@endsection