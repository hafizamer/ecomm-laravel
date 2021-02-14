@extends('main')
@section('content')
<div class="container">
<div class="col-sm-10">
    <div class="featured-wrapper">
        <h4>Cart</h4>
        @foreach($products as $item)
        <div class="row searched-item cart-divider">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}" >
                    <img class="featured-image" src="{{$item->gallery}}">
                    </a>
            </div>
            <div class="col-sm-4">
                <a href="detail/{{$item->id}}" >
                    <div class="search-result">
                        <h2>{{$item->name}}</h2>
                        <h5>{{$item->description}}</h5>
                    </div>
                    </a>
            </div>
            <div class="col-sm-3">
                <a href="/remove/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection
