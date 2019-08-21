@extends('layout')


@section('payment')
<div class="container center_div">

</br>
</br>
</br>
<!--Transaction...............................-->
<div align="center">
    <table border="1" width="340px" height="400px">


        <tr>
            <td align="center" valign="top">
            
            <h2 align="">Payment Details</h2><hr>
            <label>Card Number</label><br>
            <input size="30px" type="text"><br><br>
            <label>Amount</label><br>
            <input size="30px" type="text" placeholder="TAKA" name="amt"><br><br>
            <label>Currency</label><br>
            <input size="30px" type="text" value="BAN" name="cc"><br><br>
            <label>Transaction</label><br>
            <input size="30px" type="text" value="4123" name="tx"><br><br><hr><br>
            <a href="/home/payment/thank_you"><input type="submit" name="payment" value="Process Payment"></a>
            
            
            
            </td>
        </tr>

    </table>
</div>
<!--Transaction...............................-->



	
</div>
@endsection	