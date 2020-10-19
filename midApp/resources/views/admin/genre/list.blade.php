@extends("layouts.app")

@section("content")

<div class="container">


	<a href="/admin/genre/create">ჟანრის დამატება</a>

	<table class="table table-striped mt-3">
		<tr>
			<td>id</td>
			<td>სახელი</td>
			<td></td>
		</tr>

		@foreach($genres as $genre)

		<tr>
			<td>{{ $genre->id }}</td>
			<td>{{ $genre->genre_name }}</td>
			<td>
				<a href="/admin/genre/delete/{{ $genre->id }}">წაშლა</a>
				<a href="/admin/genre/edit/{{ $genre->id }}">რედაქტირება</a>
			</td>
		</tr>

		@endforeach

	</table>
</div>

@endsection