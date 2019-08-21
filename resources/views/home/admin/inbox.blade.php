@extends('home.admin.layout')


@section('inbox')
<div class="container center_div">

    @foreach($user as $value)
	<div>
		<label>Username:</label>
		{{$value->userName}}
		<br>
		<label>From:</label>
		{{$value->email_from}}
		<br>
		<label>Subject:</label>
		{{$value->subject}}
		<br>
		<label>Message:</label>
		{{$value->message}}
		<br>
		<a href="/admin/inbox/delete/{{$value->inbox_id}}">delete</a>
		
		<hr>
	</div>
	@endforeach
		
</div>
@endsection	
		