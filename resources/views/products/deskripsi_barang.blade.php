@extends('layouts.app')

@section('content')
<div class="product-detail">
    <div class="product-img">
        <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
    </div>
    <div class="product-info">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <h4>Harga: Rp.{{ number_format($product->price, 0, ',', '.') }}</h4>
        @if($product->old_price)
        <h5>Harga Lama: <del>Rp.{{ number_format($product->old_price, 0, ',', '.') }}</del></h5>
        @endif
    </div>
</div>
@endsection
