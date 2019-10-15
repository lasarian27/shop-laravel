@extends('layouts.app')

@section('title', __('shop.create.title'))

@section('script')
    <script>
        function renderForm() {
            let html = '';
            html += '<h2 class="text-center">{{ $product->getKey() ? __('shop.edit.product') : __('shop.create.product') }}</h2>';
            html += '<br>';
            html += '<form method="POST"  enctype="multipart/form-data" id="product-form">';
            html += '    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token() }}\">';
            html += '    <div class="form-group">';
            html += '        <label for="title">{{ __('shop.title') }}</label>';
            html += '        <input type="text" class="form-control" id="title" value="{{ old('title',  $product->title ?? '') }}" name="title">';
            html += '        <span class="invalid-feedback title" role="alert"></strong></span>';
            html += '    </div>';
            html += '    <div class="form-group">';
            html += '        <label for="description">{{ __('shop.description') }}</label>';
            html += '        <input type="text" class="form-control" id="description" value="{{ old('description', $product->description ?? '') }}" name="description">';
            html += '        <span class="invalid-feedback description" role="alert"></span>';
            html += '    </div>';
            html += '    <div class="form-group">';
            html += '        <label for="price">{{ __('shop.price') }}</label>';
            html += '        <input type="number" class="form-control" step="any" id="price" value="{{ old('price', $product->price ?? '') }}" name="price">';
            html += '        <span class="invalid-feedback price" role="alert"></span>';
            html += '    </div>';
            html += '    <div class="form-group">';
            html += '        <input type="file" class="form-control-file " name="image" id="file">';
            html += '        <span class="invalid-feedback image" role="alert"></span>';
            html += '    </div>';
            html += '    <div class="form-group text-center">';
            html += '        <button type="submit" class="btn btn-primary">{{ __('shop.submit') }}</button>';
            html += '    </div>';
            html += '</form>';
            $(html).appendTo('.container.product');
        }

        $(document).ready(function () {
            renderForm();
        });

        $(document).on('submit', 'form', function (e) {
            e.preventDefault();

            $('.invalid-feedback').empty();

            let form = new FormData();
            form.append('_method', '{{ $product->getKey() ?? '' ? 'PUT' : 'POST' }}');
            form.append('title', $('input[name="title"]').val());
            form.append('description', $('input[name="description"]').val());
            form.append('price', $('input[name="price"]').val());
            form.append('image', $('input[type=file]')[0].files[0]);

            $.ajax({
                url: '{{
                        $product->getKey() ?
                            route("products.update",[ $product->getKey() ])
                        :
                            route("products.store")
                        }}',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: 'json',
                processData: false,
                contentType: false,
                data: form

            }).done(function (res) {
                $('<div class=\"alert alert-success\">' + validate(res.status) + '</div>').appendTo('#messages');

                if (window.location.href.includes('create')) {
                    $('input').val('');
                }

                $('.form-checkout').empty();
            }).fail(function (err) {

                Object.keys(err.responseJSON.errors).map(function (key) {
                    $('.invalid-feedback.' + key).css('display', 'block');
                    $('<strong>' + err.responseJSON.errors[key][0] + '</strong>').appendTo('.invalid-feedback.' + key);
                });

            });
        });
    </script>
@endsection

@section('content')
    <div id="messages" class="text-center"></div>
    <div class="container product"></div>
@endsection
