@extends('layout')
@section('index')

  
@php

    $title1 = $cat[0]->cat_title;
    $title2 = $cat[1]->cat_title;
    $title3 = $cat[2]->cat_title;
@endphp
        <div class="row">

            <div class="col-md-3">
                <p class="lead">Categories</p>
                <div class="list-group">
             <div>
			 <table  width="200" border=1>
				<tr>
					
				</tr>
				
					<tr><td align="center"><a href="#">{{$title1}}</a></td></tr>
					<tr><td align="center"><a href="#">{{$title2}}</a></td></tr>
					<tr><td align="center"><a href="#">{{$title3}}</a></td></tr>
				
				</tr>
			 </table>
			 
			 </div>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                   <form method="post">
{{csrf_field()}}
</br>
<div class="form-group">







<input type="search" class="form-control" id="search" placeholder="Search*" onkeyup="info1()"/>

</div>
	<table width="800" border="1">
		<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Name</th>
		<th>Author</th>
		<th>Price</th>
		<th>quantity</th>
		<th>description</th>
		</tr>

<tbody id="success">
				@foreach($user as $value)
				<tr>
					<td>{{$value->book_id}}</td>
					<td>{{$value->book_title}}</td>
					<td>{{$value->book_name}}</td>
					<td>{{$value->book_author}}</td>
					<td>{{$value->book_price}}</td>
					<td>{{$value->book_quantity}}</td>
					<td>{{$value->book_description}}</td>

					<td>
						<a href="/home/buy/{{$value->book_id}}">BUY</a> 
					</td>
				</tr>
				@endforeach
</tbody>
	</table>
</form>
<script type="text/javascript" charset="utf-8">
function info1()
{ 
	var search = $('#search').val();
	console.log(search);
		$.ajax({
			type:"get",
	        url:'{{URL::to("home/search")}}',
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
                    </div>

                </div>

                <div class="row">

                      <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Oue Policies</a></h4>
                        <p>
						It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
						</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                      <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Here To Help</a></h4>
                        <p>
						It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
						</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                 
        <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Contact Us</a></h4>
                        <p>
						It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
						</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>

            </div>

        </div>
@endsection	
   