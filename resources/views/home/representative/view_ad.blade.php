@extends('home.representative.layout')


@section('view_ad')
<div class="container center_div">

<form method="post">
{{csrf_field()}}
</br>
<div class="table-responsive">
 
	<table width="600" border="1">
		<tr>
		<th>Id</th>
		<th>Sponsor</th>
		<th>Image</th>
		<th>Tag</th>
		<th>Date</th>
		</tr>


				@foreach($user as $value)
				<tr>
					<td>{{$value->id}}</td>
					<td>{{$value->sponsor}}</td>
					<td>{{$value->image}}</td>
					<td>{{$value->tag}}</td>
					<td>{{$value->date}}</td>
					<td><a href="/representative/ad/edit/{{$value->id}}">Edit</a></td>
					<td><a href="/representative/ad/delete/{{$value->id}}">Delete</a></td>
				</tr>
				@endforeach

	</table>
	</div>
</form>

</div>
@endsection	