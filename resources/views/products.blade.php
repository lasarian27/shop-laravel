@extends('layouts.app')

@section('title', __('shop.products.title'))

@section('content')
    <div class="container products">
        @if(count($products))
            <div class="row">
                @foreach($products as $product)
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ env('IMAGE_URL') }}/{{ $product['image'] }}" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['title'] }}</h5>
                            <p class="card-text">{{ $product['description'] }}</p>
                            <h2 class="card-text text-center">{{ $product['price'] }}$</h2>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('product.edit', $product['id']) }}" class="btn btn-info">{{ __('shop.edit') }}</a>
                            <a href="{{ route('product.destroy', [$product['id']]) }}" class="btn btn-danger">{{ __('shop.delete') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>{{ __('shop.empty.db') }}</h2>
        @endif

        <a href="{{ route('product.create') }}" class="btn btn-primary">{{ __('shop.create.product') }}</a>

    </div>
@endsection
