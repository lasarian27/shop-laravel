@extends('layouts.app')

@section('title', __('shop.products.title'))

@section('content')
    <div class="container products">

        @if(count($products))
            <div class="row">
                @foreach($products as $product)
                    <div class="card">
                        <div class="card-header">
                            <img
                                src="{{ url(config('app.image_dir') . '/' . $product['id'] . config('app.image_extension')) }}"
                                class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['title'] }}</h5>
                            <p class="card-text">{{ $product['description'] }}</p>
                            <h2 class="card-text text-center">{{ $product['price'] }}$</h2>
                        </div>
                        <div class="card-footer text-center">

                            <div class="row">
                               @if(Auth::user()->isModerator() && Auth::user()->getKey() === $product['id'])
                                    <a href="{{ route('products.edit', $product['id']) }}"
                                       class="btn btn-info col">{{ __('shop.edit') }}</a>
                                    <form action="{{ route('products.destroy', [$product['id']]) }}" method="POST"
                                          class="col">
                                        @method('DELETE')
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">{{ __('shop.delete') }}</button>
                                    </form>
                                @endif
                                <p class="text-center">{{ __('shop.created.by') . $product->user->name . " - " . $product->created_at->diffForHumans() }}</p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>{{ __('shop.empty.db') }}</h2>
        @endif

        <a href="{{ route('products.create') }}" class="btn btn-primary">{{ __('shop.create.product') }}</a>
    </div>
@endsection
