@extends('layout')


@section('login')

{{--
	@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
	@endforeach
--}}

@if(session()->has('msg'))
	<div class="alert alert-danger">{{session('msg')}}</div>
@endif


<div class="container center_div">
<form method="post">
 @csrf
</br>
<label>Username : </label>
<input type="text" name="username"/>
<label>
	@if ($errors->has('username'))
		<font color="red">{{ $errors->first('username') }}</font>
	@endif
</label>
<br/>
<br/>
<label>Password : </label>
<input type="text" name="password"/>
<label>
	@if ($errors->has('password'))
		<font color="red">{{ $errors->first('password') }}</font>
	@endif
</label>
<br/>
<br/>
<input type="submit" name="submit"/>&nbsp;&nbsp
</form>
</div>
@endsection	
