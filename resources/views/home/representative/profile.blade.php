@extends('home.representative.layout')


@section('profile')
<div class="container center_div">
@php
    $firstName = session('firstName');
    $id = session('id');
@endphp
	<form method="post">
	 @csrf
		</br>
		<label>First Name : {{$user->firstName}}</label>
		<br/>
		<br/>
		<label>Last Name : {{$user->lastName}}</label>
		<br/>
		<br/>
		<label>Phone : {{$user->phone}}</label>
		<br/>
		<br/>
		<label>Email : {{$user->email}}</label>
		<br/>
		<br/>
		<label>Username : {{$user->userName}}</label>
		<br/>
		<br/>
		<label>Gender : {{$user->gender}}</label>
		<br/>
		<br/>
		<label>Date Of Birth : {{$user->dateOfBirth}}</label>
		<br/>
		<br/>
		<a class="btn btn-primary" href="/representative/profile/edit/{{$id}}" role="button">Edit</a>
	</form>
</div>
@endsection	
