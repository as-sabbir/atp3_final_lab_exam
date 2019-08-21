@extends('home.admin.layout')

@section('add_representative')
<div class="container center_div">

<form method="post">
 @csrf
</br>
<label>Book Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" name="book_title"/>
		<label>
			@if ($errors->has('book_title'))
			<font color="red">{{ $errors->first('book_title') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Book Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" name="book_name"/>
		<label>
			@if ($errors->has('book_name'))
			<font color="red">{{ $errors->first('book_name') }}</font>
			@endif
		</label>
		
<br/>
<br/>
<label>Book Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" name="book_author"/>
		<label>
			@if ($errors->has('book_author'))
			<font color="red">{{ $errors->first('book_author') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" name="price"/>
		<label>
			@if ($errors->has('price'))
			<font color="red">{{ $errors->first('price') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Quantity &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" name="quantity"/>
		<label>
			@if ($errors->has('quantity'))
			<font color="red">{{ $errors->first('quantity') }}</font>
			@endif
		</label>
<br/>
<br/>
<label>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
<input type="text" name="description"/>
		<label>
			@if ($errors->has('description'))
			<font color="red">{{ $errors->first('description') }}</font>
			@endif
		</label>

<br/>
<br/>
<input type="submit" name="submit"/>&nbsp;&nbsp
</form>

</div>
@endsection	