@extends('layouts.app')

@section('title', __('shop.create.title'))

@section('content')
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <h2 class="text-center">{{ $name_page }}</h2>
        <br>

        <form method="POST" action="{{ route($action,[ $id ?? null ]) }}" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">{{ __('shop.title') }}</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title', $title ?? '') }}" name="title">
                @error('title')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">{{ __('shop.description') }}</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" value="{{ old('description', $description ?? '') }}" name="description">
                @error('description')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">{{ __('shop.price') }}</label>
                <input type="number" step="any" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $price ?? '') }}">
                @error('price')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="file" name="image">
                @error('image')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">{{ __('shop.submit') }}</button>
            </div>

        </form>
    </div>
@endsection
