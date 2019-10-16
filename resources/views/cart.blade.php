@extends('layouts.app')

@section('title', __('shop.cart.title'))

@section('script')
    <script>
        $(document).on('click', '.delete', function () {
            if(!window.startRequest) {
                console.log(window.startRequest);
                window.startRequest = true;

                $.ajax({
                    url: '/cart/' + $(this).attr('data') + '/remove',
                    type: 'POST',
                    dataType: 'json',
                    data: {'_token': '{{ csrf_token() }}'},
                }).done(function () {
                    getProducts();
                    window.startRequest = false;
                })
                .fail(function() {
                    if (err.status === 401) {
                        document.location.href = '{{ config('app.url') }}' + '/login';
                    }

                    if (err.status === 403) {
                        $("#errors").html('<h4>' + err.responseJSON.message + '</h4>');
                    }
                });
            }
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

            $(".cart").html(html);
        }

        function getProducts() {
            $.ajax({
                url: '/products-data',
                data: { page: 'cart' },
                dataType: 'json'
            })
            .done(function (req) {
                if (!req.data.length) {
                    $("#errors").html('<h2 class=\"text-center\">{{ __('shop.empty.cart') }}</h2>');

                    $('.cart').empty();
                    $('.form-checkout').empty();
                } else {
                    showProducts(req.data);

                    if (!$('.form-checkout').children().length) {
                        renderForm();
                    }

                }
            })
            .fail(function (err) {
                if (err.status === 401) {
                    document.location.href = '{{ config('app.url') }}' + '/login';
                }

                if (err.status === 403) {
                    $("#errors").html('<h4>' + err.responseJSON.message + '</h4>');
                }
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

            $(".form-checkout").html(html);
        }

        $(document).on('submit', 'form', function (e) {
            e.preventDefault();

            $('.invalid-feedback').empty();
            if(!window.startRequest) {
                window.startRequest = true;

                $.ajax({
                    url: '/cart/checkout',
                    type: 'POST',
                    data: $('form').serialize(),
                    dataType: 'json'
                })
                .done(function (res) {
                    $("#messages").html('<div class=\"alert alert-success\">' + validate(res.status) + '</div>');

                    $('.cart').empty();

                    $('.form-checkout').empty();
                    window.startRequest = false;
                })
                .fail(function (err) {
                    if (err.status === 422) {
                        Object.keys(err.responseJSON.errors).map(function (key) {
                            $(".invalid-feedback." + key).html('<strong>' + validate(err.responseJSON.errors[key][0]) + '</strong>').css('display', 'block');
                        });
                    }

                    if (err.status === 403) {
                        $("#errors").html('<h4>' + err.responseJSON.message + '</h4>');
                    }

                    if (err.status === 401) {
                        document.location.href = '{{ config('app.url') }}' + '/login';
                    }

                    window.startRequest = false;
                });
            }
        });

        $(document).ready(function () {
            getProducts();
        })

    </script>
@endsection

@section('content')
    <div class="container">
        <div id="messages"></div>
        <div id="errors" class="invalid-feedback text-center" style="display: block"></div>
        <div class="cart"></div>
        <div class="form-checkout"></div>
    </div>
@endsection
