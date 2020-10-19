@extends("layouts.user")

@section("content")

	
	<table class="table">
		<tr>
			<td>სახელი</td>
			<td>ავტორის სახელი</td>
			<td>აღწერა</td>
			<td>ჟანრი</td>
			<td></td>
		</tr>
		@foreach($books as $book)
			<tr>
				<td>{{ $book->title }}</td>
				<td>{{ $book->author_name }}</td>
				<td>{{ $book->description }}</td>
				<td>{{ $book->genre }}</td>
				<td>
					<a href="/detailed/book/{{ $book->id }}">მეტი</a>
				</td>
			</tr>
		@endforeach
	</table>




@endsection