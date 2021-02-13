@extends('main')
@section('content')
<div class="container product">
<div class="featured-wrapper">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        @foreach ($products as $item)
        <div class="featured-item">
            <a href="detail/{{$item['id']}}" />
            <img class="featured-image" src="{{$item['gallery']}}">
            <div class="search-result">
                <h2>{{$item['name']}}</h2>
                <h5>{{$item['desription']}}</h5>
            </div>
        </div>
        @endforeach
    </div>


</div>
</div>
@endsection
