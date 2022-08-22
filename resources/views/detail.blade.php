@extends('master')
@section('content')
<div class = "container" >
<div class = "row">
<div class = "col-sm-6" >
    <img class= "detail-img" src="{{$product['gallary']}}" alt="">

</div>
<div class = "col-sm-6" >
    <a href="/">Go Back</a>
    <h2>{{$product['name']}}</h2>
    <h3>price : {{$product['price']}}</h3>
    <h3>detail : {{$product['detail']}}</h3>
    <h4>Catagory : {{$product['Catagory']}}</h4>
    <br></br>
    <form action = "/add_to_cart" method = "post">
        @csrf
        <input type= "hidden" name="product_id" value="{{$product['id']}}">
    <button class = "btn btn-primary">Add to Cart</button>
    </form>
    <br></br>
    <button class = "btn btn-success">Buy Now</button>
</div>
</div>
</div>


@endsection