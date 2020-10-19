@extends("layouts.app")

@section("content")

	
<div class="container">

	<div class="mt-4">
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	</div>


	<form method="post">
		<div class="form-group">
			<label>სათაური</label>
			<input type="text" name="title" class="form-control">
		</div>
		<div class="form-group">
			@csrf
			<button name="submit" class="btn btn-success">დამატება</button>
		</div>
	</form>
</div>

@endsection