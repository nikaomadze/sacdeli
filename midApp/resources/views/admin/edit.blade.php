
@extends("layouts.app")

@section("content")

	
<div class="container">

	<form method="post">
		<div class="form-group"> 
			<label>ავტორი</label>
			<input type="text" name="author_name" class="form-control" value="{{ $book->author_name }}">
		</div>
		<div class="form-group">
			<label>აღწერა</label>
			<input type="text" name="description" class="form-control" value="{{ $book->description }}">
		</div>
		<div class="form-group">
			<label>სათაური</label>
			<input type="text" name="title" class="form-control" value="{{ $book->title }}">
		</div>
		<div class="form-group">
			<label>ჟანრი</label>
			<input type="text" name="genre_id" class="form-control" value="{{ $book->genre_id }}">
		</div>
		<div class="form-group">
			@csrf
			<button name="submit" class="btn btn-success">დამატება</button>
		</div>
	</form>
</div>

@endsection