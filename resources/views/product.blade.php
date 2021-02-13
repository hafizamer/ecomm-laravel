@extends('main')
@section('content')
<div class="container product">
<div class="featured-wrapper">
    <h3>Featured</h3>
    @foreach (array_slice($products->toArray(), 0,5) as $item)
    <div class="featured-item">
        <a href="detail/{{$item['id']}}" />
        <img class="featured-image" src="{{$item['gallery']}}">
    </div>
    @endforeach
</div>
</div>
@endsection
