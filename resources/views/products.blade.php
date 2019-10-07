@extends('layouts.app')

@section('content')
    <div class="container products">
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
                            <a href="{{ route('product.edit', $product['id']) }}" class="btn btn-info">EDIT</a>
                            <a href="{{ route('product.destroy', [$product['id']]) }}" class="btn btn-danger">DELETE</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>No products found in db</h2>
        @endif

        <a href="{{ route('product.create') }}" class="btn btn-primary">Create a product</a>

    </div>
@endsection
