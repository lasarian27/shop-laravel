@extends('layouts.app')

@section('title', __('shop.home.title'))

@section('script')
    <script>
        $(document).on('click', '.btn.btn-primary', function () {
            $.ajax({
                url: '/cart/' + $(this).attr('data'),
                type: 'PUT',
                data: { '_token': '{{ csrf_token() }}' }
            })
            .done(function (req) {
                getProducts(req.data);
            });
        });

        function renderProducts(data) {
            let html = '<div class="row">';

            data.forEach(function (product) {
                html += '<div class="card">';
                html +=     '<div class="card-header">';
                html +=         '<img src="{{ config('app.image_dir') . '/' }}' + validate(product.id) + '{{ config('app.image_extension') }}" class="card-img-top">';
                html +=     '</div>';
                html +=     '<div class="card-body">';
                html +=         '<h5 class="card-title">' + validate(product.title) + '</h5>';
                html +=         '<p class="card-text">' + validate(product.description) + '</p>';
                html +=         '<h2 class="card-text text-center">' + validate(product.price) + '$</h2>';
                html +=     '</div>';
                html +=     '<div class="card-footer text-center">';
                html +=         '<button class="btn btn-primary" data="' + validate(product.id) + '"><?= __("shop.add") ?></button>';
                html +=     '</div>';
                html += '</div>';
            });

            html += '</div>';

            $('.container.home').html(html);
        }

        function getProducts() {
            $.ajax({
                url: '/products',
                data: { page: 'home' },
                dataType: 'json'
            })
            .done(function (req) {
                if (!req.data.length) {
                    $('<h2 class="text-center">{{ __('shop.empty.db') }}</h2>').appendTo('#errors');
                }

                renderProducts(req.data);
            })
            .fail(function () {
                $('<h4>{{ __('shop.error') }}</h4>').appendTo('#errors');
            });
        }

        getProducts();
    </script>
@endsection

@section('content')
    <div id="errors"></div>
    <div class="container home"></div>
@endsection
