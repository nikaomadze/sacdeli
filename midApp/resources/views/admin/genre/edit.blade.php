@extends("layouts.app")

@section("content")

	
<div class="container">

	<form method="post">
		<div class="form-group">
			<label>სათაური</label>
			<input type="text" name="title" class="form-control" value="{{ $genre->genre_name }}">
		</div>
		<div class="form-group">
			@csrf
			<button name="submit" class="btn btn-success">დამატება</button>
		</div>
	</form>
</div>

@endsection