@extends('home.representative.layout')

@section('edit_ad')
<div class="container center_div">

<form method="post" enctype="multipart/form-data">
 @csrf

</br>

<label>Sponsor &nbsp;: </label>
<input type="text" value="{{$slider->sponsor}}" name="sponsor"/>

		<label>
			@if ($errors->has('sponsor'))
			<font color="red">{{ $errors->first('sponsor') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Image &nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="file" value="{{$slider->image}}"  name="image"/> {{$slider->image}}

		<label>
			@if ($errors->has('image'))
			<font color="red">{{ $errors->first('image') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Tag &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" value="{{$slider->tag}}" name="tag"/>

		<label>
			@if ($errors->has('tag'))
			<font color="red">{{ $errors->first('tag') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="date" value="{{$slider->date}}" name="date"/>
		<label>
			@if ($errors->has('date'))
			<font color="red">{{ $errors->first('date') }}</font>
			@endif
		</label>
<br/>
<br/>
<input type="submit" value="update" name="submit"/>&nbsp;&nbsp;
</form>

</div>
@endsection	
