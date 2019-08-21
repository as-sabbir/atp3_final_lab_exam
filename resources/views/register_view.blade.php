@extends('layout')

@section('register_view')
<div class="container center_div">

<form method="post">
 @csrf
</br>
<label>First Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" name="firstName"/>
		<label>
			@if ($errors->has('firstName'))
			<font color="red">{{ $errors->first('firstName') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Last Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" name="lastName"/>
		<label>
			@if ($errors->has('lastName'))
			<font color="red">{{ $errors->first('lastName') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" name="phone"/>
		<label>
			@if ($errors->has('phone'))
			<font color="red">{{ $errors->first('phone') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="email" name="email"/>
		<label>
			@if ($errors->has('email'))
			<font color="red">{{ $errors->first('email') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" name="userName"/>
		<label>
			@if ($errors->has('userName'))
			<font color="red">{{ $errors->first('userName') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" name="password"/>
		<label>
			@if ($errors->has('password'))
			<font color="red">{{ $errors->first('password') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Gender  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" name="gender"/>
		<label>
			@if ($errors->has('gender'))
			<font color="red">{{ $errors->first('gender') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Date Of Birth : </label>
<input type="date" name="dateOfBirth"/>
		<label>
			@if ($errors->has('dateOfBirth'))
			<font color="red">{{ $errors->first('dateOfBirth') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>User Role : </label>
<input type="text" name="user_role"/>
		<label>
			@if ($errors->has('user_role'))
			<font color="red">{{ $errors->first('user_role') }}</font>
			@endif
		</label>
<br/>
<br/>
<input type="submit" name="submit"/>&nbsp;&nbsp
</form>

</div>
@endsection	