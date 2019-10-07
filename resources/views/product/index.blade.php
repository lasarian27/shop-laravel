@extends('layouts.app')

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
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" value="{{ old('title', $title ?? '') }}" name="title">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" value="{{ old('description', $description ?? '') }}" name="description">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="any" name="price" class="form-control" value="{{ old('price', $price ?? '') }}">
            </div>

            <div class="form-group">
                <input type="file" class="form-control-file" id="file" name="image">
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            @include('layouts.errors')
        </form>
    </div>
@endsection
