@extends('home.representative.layout')

@section('add_ad')
<div class="container center_div">

<form method="post" enctype="multipart/form-data">
 @csrf
</br>
<label>Sponsor &nbsp;: </label>
<input type="text" name="sponsor"/>
		<label>
			@if ($errors->has('sponsor'))
			<font color="red">{{ $errors->first('sponsor') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Image &nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="file" name="image"/>
		<label>
			@if ($errors->has('image'))
			<font color="red">{{ $errors->first('image') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Tag &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" name="tag"/>
		<label>
			@if ($errors->has('tag'))
			<font color="red">{{ $errors->first('tag') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="date" name="date"/>
		<label>
			@if ($errors->has('date'))
			<font color="red">{{ $errors->first('date') }}</font>
			@endif
		</label>
<br/>
<br/>
<input type="submit" name="submit"/>&nbsp;&nbsp
</form>

</div>
@endsection	