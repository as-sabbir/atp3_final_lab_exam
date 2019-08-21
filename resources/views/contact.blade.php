@extends('layout')


@section('contact')
<div class="container center_div">

				<!--right container start.......................................-->
	<form action="" method="post">
	 @csrf
		<div>
		<div style="float: left;">

		<div>
		<input name="name" placeholder="Name *" type="text" size="70">
		<label>
			@if ($errors->has('name'))
			<font color="red">{{ $errors->first('name') }}</font>
			@endif
		</label>
		</div>

		<div style="margin-top:10px;">
		<input name="email" placeholder="Enter Your Email *" type="text" size="70">
		<label>
			@if ($errors->has('email'))
			<font color="red">{{ $errors->first('email') }}</font>
			@endif
		</label>
		</div>

		<div style="margin-top:10px;">
		<input name="subject" placeholder="Subject *" type="text" size="70">
		<label>
			@if ($errors->has('subject'))
			<font color="red">{{ $errors->first('subject') }}</font>
			@endif
		</label>
		</div>

		<div style="margin-top:10px;">
		<textarea name="message" placeholder="Message *" rows="5" cols="14" style="width: 430px; height: 48px;"></textarea>
		<label>
			@if ($errors->has('message'))
			<font color="red">{{ $errors->first('message') }}</font>
			@endif
		</label>
		</div>
		<br><input type="submit" name="send" value="Send">
		</div>

		</div>
	</form>
	
</div>
@endsection	