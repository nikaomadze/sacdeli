@extends("layouts.app")

@section("content")

<div class="container">

	<a href="/admin/books/create">წიგნის დამატება</a>

	<table class="table table-striped mt-3">
		<tr>
			<td>id</td>
			<td>სახელი</td>
			<td>ავტორის სახელი</td>
			<td>აღწერა</td>
			<td></td>
		</tr>

		@foreach($books as $book)

		<tr>
			<td>{{ $book->id }}</td>
			<td>{{ $book->title }}</td>
			<td>{{ $book->author_name }}</td>
			<td>{{ $book->description }}</td>
			<td>
				<a href="/admin/books/delete/{{ $book->id }}">წაშლა</a>
				<a href="/admin/books/edit/{{ $book->id }}">რედაქტირება</a>
			</td>
		</tr>

		@endforeach

	</table>
</div>

@endsection