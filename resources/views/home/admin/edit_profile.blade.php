@extends('home.admin.layout')

@section('edit_profile')
<div class="container center_div">

<form method="post">
 @csrf

</br>

<label>First Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" value="{{$user->firstName}}" name="firstName"/>
<br/>
<br/>
<label>Last Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" value="{{$user->lastName}}" name="lastName"/>
<br/>
<br/>
<label>Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" value="{{$user->phone}}" name="phone"/>
<br/>
<br/>
<label>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="email" value="{{$user->email}}" name="email"/>
<br/>
<br/>
<label>Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" value="{{$user->userName}}" name="userName"/>
<br/>
<br/>
<label>Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" value="{{$user->password}}" name="password"/>
<br/>
<br/>
<label>Gender  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" value="{{$user->gender}}" name="gender"/>
<br/>
<br/>
<label>Date Of Birth : </label>
<input type="date" value="{{$user->dateOfBirth}}" name="dateOfBirth"/>
<br/>
<br/>
<input type="submit" value="update" name="submit"/>&nbsp;&nbsp;
</form>

</div>
@endsection	
