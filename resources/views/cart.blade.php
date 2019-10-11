@extends('layouts.app')

@section('title', __('shop.cart.title'))

@section('content')
    <div class="container cart">
        @if(count($products))
            <div class="row">
                <table class="table">
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><img
                                    src="{{ url(config('app.image_dir') . '/' . $product['id'] . config('app.image_extension')) }}"
                                    class="card-img-top"></td>
                            <td><h5 class="card-title">{{ $product['title'] }}</h5></td>
                            <td><p class="card-text">{{ $product['description'] }}</p></td>
                            <td><p class="card-text">{{ $product['price'] }}$</p></td>
                            <td>
                                <form action="{{ route('cart.destroy', $product['id']) }}" method="POST">
                                    @method('DELETE')
                                    {{ csrf_field() }}
                                    <button class="btn btn-danger">{{ __('shop.delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <form method="POST" action="{{ route('cart.store') }}">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">{{ __('shop.name') }}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                               name="name" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">{{ __('shop.email') }}</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                               name="email" value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="comments">{{ __('shop.comments') }}</label>
                        <textarea class="form-control @error('comments') is-invalid @enderror" id="comments" rows="3"
                                  name="comments" value="{{ old('comments') }}"></textarea>
                        @error('comments')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">{{ __('shop.checkout') }}</button>
                    </div>

                </form>
            </div>
        @else
            <h2>{{ __('shop.empty.cart') }}</h2>
        @endif

    </div>
@endsection
