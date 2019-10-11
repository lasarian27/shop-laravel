@extends('layouts.app')

@section('title', __('shop.home.title'))

@section('content')
    <div class="container home">

        @if(count($products))
            <div class="row">
                @foreach($products as $product)
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ url(config('app.image_dir') . '/' . $product['id'] . config('app.image_extension')) }}" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['title'] }}</h5>
                            <p class="card-text">{{ $product['description'] }}.</p>
                            <h2 class="card-text text-center">{{ $product['price'] }}$</h2>
                        </div>
                        <div class="card-footer text-center">
                            <form action="{{ route('cart.update', $product['id']) }}" method="POST">
                                @method('PUT')
                                {{ csrf_field() }}
                                <button class="btn btn-primary">{{ __('shop.add') }}</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>{{ __('shop.empty.db') }}</h2>
        @endif

    </div>
@endsection
