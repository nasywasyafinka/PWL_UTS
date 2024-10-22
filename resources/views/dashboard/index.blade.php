<!-- resources/views/catalog/index.blade.php -->
@extends('ralphlayouts.template')

@section('content')
<div class="catalog-container">
    <h1>Glamaraous Collection</h1>
    <div class="catalog-grid">
        @foreach ($collections as $item)
        <div class="card">
            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
            <div class="card-body">
                <h5>{{ $item['name'] }}</h5>
                <p>{{ $item['description'] }}</p>
                <span class="price">${{ $item['price'] }}</span>
                <a href="#" class="btn">View Details</a>
            </div>
        </div>
        @endforeach 
    </div>
</div>
@endsection
