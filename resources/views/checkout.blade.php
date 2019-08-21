@extends('layout')


@section('checkout')
<div class="container center_div">
<div>
<h4 align="center"><?php //display_message();?></h4>
    <h1>Checkout</h1>
</div>

<!--Cart Item.........................................-->	
<form action="payment.php" method="post"><!--if we click Buy Now go to the payment.php page-->
<div>
    <table class="table" width="800">
    <hr>
    <tr>
        <th>Name</th>
        <th>Title</th>
        <th>author</th>
        <th>price</th>
        <th>Sub-total</th>
    </tr>
<?php //cart();?>
		<td>{{$book->book_name}}</td>
		<td>{{$book->book_title}}</td>
		<td>{{$book->book_author}}</td>
		<td>{{$book->book_price}}</td>
		<td>{{$book->book_price}}</td>

    </table>
</div>  
</form>
<!--CART TOTAL-->
<div style="float:right;">
<h1>Cart Totals</h1>
<table width="300" border="1px">
<tr>
<th>Items</th>
<td><?php
//echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity']="0";
   ?></td>
</tr>

<tr>
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr>
<th>Order Total</th>
<td><?php
//echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total']="0";
   ?></td>
</tr>
</table>
</div>
<!--CART TOTAL-->


     
<!--Cart Item.........................................-->

<!--Buy button***********************************-->
<div style="margin-top:50px;">
    <a href="payment.php"><input type="submit" name="upload" value="Buy Now"></a>
</div>	

</div>
@endsection	