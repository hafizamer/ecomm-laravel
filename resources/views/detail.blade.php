@extends('main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src={{$product['gallery']}} alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h1>{{$product['name']}}</h1>
            <h2>${{$product['price']}}</h2>
            <h3>{{$product['description']}}</h3>
            <br><br>
            <button class="btn btn-primary">Add to Cart</button>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>
@endsection
