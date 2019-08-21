@extends('home.admin.layout')

@section('show_users')
<div class="container center_div">

<form method="post">
{{csrf_field()}}
</br>
<div class="form-group">







<input type="search" class="form-control" id="search" placeholder="Search*" onkeyup="info1()"/>

</div>
	<table border="1">
		<tr>
		<th>Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Username</th>
		<th>Gender</th>
		<th>Date Of Birth</th>
		<th>User Role</th>
		</tr>

<tbody id="success">
				@foreach($user as $value)
				<tr>
					<td>{{$value->id}}</td>
					<td>{{$value->firstName}}</td>
					<td>{{$value->lastName}}</td>
					<td>{{$value->phone}}</td>
					<td>{{$value->email}}</td>
					<td>{{$value->userName}}</td>
					<td>{{$value->gender}}</td>
					<td>{{$value->dateOfBirth}}</td>
					<td>{{$value->user_role}}</td>
					<td>
						<a href="/admin/users/delete/{{$value->id}}">Delete</a> 
					</td>
				</tr>
				@endforeach
</tbody>
	</table>
</form>

</div>


<script type="text/javascript" charset="utf-8">
function info1()
{ 
	var search = $('#search').val();
	console.log(search);
		$.ajax({
			type:"get",
	        url:'{{URL::to("admin/users/search")}}',
				{{--url:'{{route('admin.search')}}',--}}
			data:{
				search:search,
				_token:$('#signup-token').val()
				},
			datatype:'html',
			
			success:function(response){
				console.log(response);
				$("#success").html(response);
			}
		});


}
</script>
@endsection	