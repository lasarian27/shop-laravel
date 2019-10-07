@extends('layouts.app')

@section('content')
    <div class="container home">
        @if(count($products))
            <div class="row">
                @foreach($products as $product)
                    <div class="card">
                        <div class="card-header">
                            <img src="/images/{{ $product['image'] }}" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['title'] }}</h5>
                            <p class="card-text">{{ $product['description'] }}.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('cart.add', $product['id']) }}" class="btn btn-primary">ADD</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>No products found in db</h2>
        @endif

    </div>
@endsection
