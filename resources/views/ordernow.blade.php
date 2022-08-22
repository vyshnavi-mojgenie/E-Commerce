@extends('master')
@section('content')
<div class= "custom-product">
<div class="col-sm-10">
<table class="table table-bordered">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>{{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>${{$total+10}}</td>
      </tr>
    </tbody>
  </table>
  <div>
  <form action ="/orderplace" method ="post">
    @csrf
  <div class="form-group">
    <textarea name ="address"  type="email" placeholder ="enter your address" class="form-control" id="email"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">payment method</label><br><br>
    <input type="radio"  value ="cash" name ="payment"><span>Online Payment</span><br><br>
    <input type="radio"  value ="cash" name ="payment"><span>EMI</span><br><br>
    <input type="radio"  value ="cash" name ="payment"><span>Cash On Delivery</span><br><br>

  </div>
 
  <button type="submit" class="btn btn-primary">Order Now</button><br><br>
</form>
  </div>
</div>

</div>
</div>
@endsection