@extends('layouts.app')

@section('title', __('shop.home.title'))

@section('script')
    <script>
        function renderProducts(data) {
            let html = '<div class="row">';
            data.forEach(function (product) {
                html += '<div class="card">';
                html += '<div class="card-header">';
                html += '<img src="<?= config('app.image_dir') . '/' ?>' + product.id + '<?= config('app.image_extension') ?>" class="card-img-top">';
                html += '</div>';
                html += '<div class="card-body">';
                html += '<h5 class="card-title">' + product.title + '</h5>';
                html += '<p class="card-text">' + product.description + '</p>';
                html += '<h2 class="card-text text-center">' + product.price + '$</h2>';
                html += '</div>';
                html += '<div class="card-footer text-center">';
                html += '<button class="btn btn-primary" data="' + product.id + '"><?= __("shop.add") ?></button>';
                html += '</div>';
                html += '</div>';
            });
            html += '</div>';
            $(html).appendTo(".container.home");
        }

        function getProducts() {
            $.get("/products", function () {
                console.log("success");
            })
                .done(function (req) {
                    if (!req.data.length) {
                        $("<h2 class=\"text-center\">{{ __('shop.empty.db') }}</h2>").appendTo("#errors");
                    }

                    $(".container.home").empty();

                    renderProducts(req.data);

                    $(".btn.btn-primary").click(function () {
                        $.ajax({
                            url: '/cart/' + $(this).attr('data'),
                            type: 'PUT',
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function () {
                                getProducts();
                            }
                        });
                    });
                })
                .fail(function () {
                    $("<h4>Error</h4>").appendTo("#errors");
                });
        }

        getProducts();
    </script>
@endsection

@section('content')
    <div id="errors"></div>
    <div class="container home"></div>
@endsection
