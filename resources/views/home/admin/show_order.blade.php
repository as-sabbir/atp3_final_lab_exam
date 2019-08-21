@extends('home.admin.layout')

@section('show_users')
<div class="container center_div">

	<table width="700" border="1">
		<tr>
		<th>Id</th>
		<th>book_title</th>
		<th>book_name</th>
		<th>book_author</th>
		<th>price</th>
		</tr>

<tbody id="success">
				@foreach($order as $value)
				<tr>
					<td>{{$value->order_id}}</td>
					<td>{{$value->book_title}}</td>
					<td>{{$value->book_name}}</td>
					<td>{{$value->book_author}}</td>
					<td>{{$value->price}}</td>

					<td>
						<a href="/admin/users/delete/{{$value->order_id}}">Delete</a> 
					</td>
				</tr>
				@endforeach
</tbody>
	</table>


</div>
@endsection	