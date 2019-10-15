@extends('layouts.app')

@section('title', __('shop.cart.title'))

@section('script')
    <script>
        $(document).on('click', '.delete', function () {

            $.ajax({
                url: '/cart/' + $(this).attr('data'),
                type: 'DELETE',
                data: { '_token': '{{ csrf_token() }}' },
            }).done(function() {
                getProducts();
            });

        });

        function showProducts(data) {
            let html = '' +
                '<div class="row">';
            html += '<table class="table">';
            html += '<tbody>';

            data.forEach(function (product) {
                html += '<tr>';
                html += '   <td><img src="{{ config('app.image_dir') . '/' }}' + validate(product.id) + '{{ config('app.image_extension') }}" class="card-img-top"></td>';
                html += '   <td><h5 class="card-title">' + validate(product.title) + '</h5></td>';
                html += '   <td><p class="card-text">' + validate(product.description) + '</p></td>';
                html += '   <td><p class="card-text">' + validate(product.price) + '$</p></td>';
                html += '   <td><button class="btn btn-primary delete" data="' + validate(product.id) + '">{{ __("shop.delete") }}</button></td>';
                html += '</tr>';
            });

            html += '</tbody></table>';
            html += '</div>';

            $('.cart').empty();
            $(html).appendTo(".cart");
        }

        function getProducts() {
            $.ajax({
                url: '/products',
                data: { page: 'cart' },
                dataType: 'json'
            })
            .done(function (req) {

                if (!req.data.length) {
                    $('<h2 class=\"text-center\">{{ __('shop.empty.cart') }}</h2>').appendTo('#errors');

                    $('.form-checkout').css('display', 'none');

                    $('.cart').empty();

                } else {
                    $('.form-checkout').css('display', 'block');

                    showProducts(req.data);
                }

            })
            .fail(function () {
                $('<h4>{{ __('shop.error') }}</h4>').appendTo('#errors');
            });
        }

        function renderForm() {
            let html = '';
            html += '<form>';
            html += '   <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token() }}\">';
            html += '   <div class=\"form-group\">';
            html += '       <label for=\"name\">{{ __('shop.name') }}</label>';
            html += '       <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"{{ old('name') }}\">';
            html += '       <span class=\"invalid-feedback name\" role=\"alert\"></span>';
            html += '   </div>';
            html += '   <div class=\"form-group\">';
            html += '       <label for=\"email\">{{ __('shop.email') }}</label>';
            html += '       <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{ old('email') }}\">';
            html += '       <span class=\"invalid-feedback email\" role=\"alert\"></span>';
            html += '   <div class=\"form-group\">';
            html += '       <label for=\"comments\">{{ __('shop.comments') }}</label>';
            html += '       <textarea class=\"form-control\" id=\"comments\" rows=\"3\" name=\"comments\" value=\"{{ old('comments') }}\"></textarea>';
            html += '       <span class=\"invalid-feedback comments\" role=\"alert\"></span>';
            html += '   </div>';
            html += '   <div class=\"form-group\">';
            html += '       <button class=\"btn btn-primary checkout\">{{ __('shop.checkout') }}</button>';
            html += '   </div>';
            html += '</form>';

            $(html).appendTo('.form-checkout');
        }

        $(document).on('submit', 'form', function (e) {
            e.preventDefault();

            $('.invalid-feedback').empty();

            $.ajax({
                url: '/cart',
                type: 'POST',
                data: $('form').serialize(),
                dataType: 'json'
            })
            .done(function (res) {
                $('<div class=\"alert alert-success\">' + validate(res.status) + '</div>').appendTo('#messages');

                $('.cart').empty();

                $('.form-checkout').empty();
            })
            .fail(function (err) {
                Object.keys(err.responseJSON.errors).map(function (key) {
                    $('.invalid-feedback.' + key).css('display', 'block');
                    $('<strong>' + validate(err.responseJSON.errors[key][0]) + '</strong>').appendTo('.invalid-feedback.' + key);
                });
            });

        });

        $(document).ready(function () {
            getProducts();
            renderForm();
        })

    </script>
@endsection

@section('content')
    <div class="container">
        <div id="messages"></div>
        <div id="errors"></div>
        <div class="cart"></div>
        <div class="form-checkout"></div>
    </div>
@endsection
