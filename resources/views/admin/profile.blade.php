@extends('layouts.app')

@section('title', __('shop.profile'))

@section('content')
    <div class="profile container">
        @if(isset($user))
            <h4>{{ __('shop.account.details') }}</h4>
            <br>
            <p>{{ __('shop.name') }}: {{ $user->name }}</p>
            <p>{{ __('shop.email') }}: {{ $user->email }}</p>
            <h3 class="{{ $user->admin ? "alert-success text-center" : "alert-danger text-center" }}">{{  $user->roles[0]->name }}</h3>
            <form action="{{ route('profile.update', [$user['id']]) }}" method="POST">
                @method('PUT')
                {{ csrf_field() }}
                <label for="address">{{ __('shop.user.address') }}</label>
                <div class="form-group">
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                           value="{{ old('address', $user->address->country ?? '') }}" name="address">
                    @error('address')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">{{ __('shop.submit') }}</button>
                </div>
            </form>
        @endif

        @if(count($products_by_address))
            <h4>{{ __('shop.products.by.address') }}</h4>
            <div class="row">
                <table class="table">
                    <tbody>
                    @foreach($products_by_address as $product)
                        <tr>
                            <td><img
                                    src="{{ url(config('app.image_dir') . '/' . $product['id'] . config('app.image_extension')) }}"
                                    class="card-img-top"></td>
                            <td><h5 class="card-title">{{ $product['title'] }}</h5></td>
                            <td><p class="card-text">{{ $product['description'] }}</p></td>
                            <td><p class="card-text">{{ $product['price'] }}$</p></td>
                            <td>
                                <form action="{{ route('products.destroy', [$product['id']]) }}" method="POST"
                                      class="col">
                                    @method('DELETE')
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">{{ __('shop.delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
        <br>

        @if(count($products))
            <h3>{{ __('shop.products.from.user') }}</h3>
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
                                <form action="{{ route('products.destroy', [$product['id']]) }}" method="POST"
                                      class="col">
                                    @method('DELETE')
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">{{ __('shop.delete') }}</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

@endsection
