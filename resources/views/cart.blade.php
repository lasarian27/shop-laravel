@extends('layouts.app')

@section('content')
    <div class="container cart">
        @if(count($products))
            <div class="row">
                <table class="table">
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><img src="/images/{{ $product['image'] }}" class="card-img-top"></td>
                            <td><h5 class="card-title">{{ $product['title'] }}</h5></td>
                            <td><p class="card-text">{{ $product['description'] }}.</p></td>
                            <td><a href="{{ route('cart.delete', [$product['id']]) }}"
                                   class="btn btn-danger">DELETE</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <form method="POST" action="{{ route('cart.checkout') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="comments">Comments</label>
                        <textarea class="form-control" id="comments" rows="3" name="comments"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Checkout</button>
                    </div>
                    @include('layouts.errors')
                </form>
            </div>
        @else
            <h2>No products found in cart</h2>
        @endif

    </div>
@endsection
