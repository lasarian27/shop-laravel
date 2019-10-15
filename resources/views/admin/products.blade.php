@extends('layouts.app')

@section('title', __('shop.products.title'))

@section('script')
    <script>
        $(document).on('click', '.delete', function () {
            $.ajax({
                url: '/products/' + $(this).attr('data'),
                type: 'POST',
                data: {
                    '_method': 'DELETE',
                    '_token': '{{ csrf_token() }}'
                }
            })
            .done(function() {
                getProducts();
            });
        });

        function getProducts() {
            $.ajax({
                url: '/products',
                dataType: 'json'
            })
            .done(function (req) {
                renderProducts(req.data);
            })
            .fail(function () {
                $('<h4>{{ __('shop.error') }}</h4>').appendTo('#errors');
            });
        }

        function renderProducts(data) {
            let html = '<div class="row">';

            data.forEach(function (product) {
                html += '   <div class="card">';
                html += '       <div class="card-header">';
                html += '           <img src="{{ config('app.image_dir') . '/' }}' + validate(product.id) + '{{ config('app.image_extension') }}" class="card-img-top">';
                html += '       </div>';
                html += '       <div class="card-body">';
                html += '           <h5 class="card-title">' + validate(product.title) + '</h5>';
                html += '           <p class="card-text">' + validate(product.description) + '</p>';
                html += '           <h2 class="card-text text-center">' + validate(product.price) + '$</h2>';
                html += '       </div>';
                html += '       <div class="card-footer text-center">';
                html += '           <div class="row text-center">';

                @if(Auth::user())
                    @if(Auth::user()->isAdmin() || Auth::user()->isModerator())
                        html += '       <a href="/products/' + validate(product.id) + '/edit" class="btn btn-info edit"><?= __("shop.edit") ?></a>';
                        html += '       <button class="btn btn-danger delete" data="' + validate(product.id) + '"><?= __("shop.delete") ?></button>';
                    @endif
                @endif

                html += '<p class="text-center">{{ __('shop.created.by') }}' + product.user.name + " - " + (new Date(product.created_at)).toLocaleDateString() + '</p>'
                html += '       </div>';
                html += '   </div>';
                html += '</div>';
            });

            html += '</div>';
            html += '<a href="{{ route('products.create') }}" class="btn btn-primary">{{ __('shop.create.product') }}</a>';

            $(".form-checkout").css("display", "block");

            $(".products").empty();

            $(html).appendTo(".container.products");
        }

        $(document).ready(function () {
            getProducts();
        })
    </script>
@endsection

@section('content')
    <div class="container products"></div>
@endsection
