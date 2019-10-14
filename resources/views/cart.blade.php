@extends('layouts.app')

@section('title', __('shop.cart.title'))

@section('script')
    <script>
        function showProducts(data) {
            let html = '<div class="row">';
            html += '<table class="table">';
            html += '<tbody>';
            data.forEach(function (product) {
                html += '<tr>';
                html += '<td><img src="<?= config('app.image_dir') . '/' ?>' + product.id + '<?= config('app.image_extension') ?>" class="card-img-top"></td>';
                html += '<td><h5 class="card-title">' + product.title + '</h5></td>';
                html += '<td><p class="card-text">' + product.description + '</p></td>';
                html += '<td><p class="card-text">' + product.price + '$</p></td>';
                html += '<td><button class="btn btn-primary delete" data="' + product.id + '"><?= __("shop.delete") ?></button></td>';
                html += '</tr>';
            });
            html += '</tbody></table>';
            html += '</div>';
            $(html).appendTo(".cart");
        }

        function getProducts() {
            $.get("/cart/all")
                .done(function (req) {
                    $(".cart").empty();

                    if (!req.data.length) {
                        $("<h2 class=\"text-center\">{{ __('shop.empty.cart') }}</h2>").appendTo("#errors");
                        $(".form-checkout").css("display", "none");
                    } else {
                        $(".form-checkout").css("display", "block");

                        showProducts(req.data);

                        $(".delete").click(function () {
                            $.ajax({
                                url: '/cart/' + $(this).attr('data'),
                                type: 'DELETE',
                                data: {
                                    "_token": "{{ csrf_token() }}"
                                },
                                success: function () {
                                    getProducts();
                                }
                            });
                        });
                    }
                })
                .fail(function () {
                    $("<h4>Error</h4>").appendTo("#errors");
                });
        }

        function renderForm() {
            let html = "<form>";
            html += "<div class=\"form-group\">";
            html += "<label for=\"name\">{{ __('shop.name') }}</label>";
            html += "<input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"{{ old('name') }}\">";
            html += "<span class=\"invalid-feedback name\" role=\"alert\"></span>";
            html += "</div>";
            html += "<div class=\"form-group\">";
            html += "<label for=\"email\">{{ __('shop.email') }}</label>";
            html += "<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{ old('email') }}\">";
            html += "<span class=\"invalid-feedback email\" role=\"alert\"></span>";
            html += "<div class=\"form-group\">";
            html += "<label for=\"comments\">{{ __('shop.comments') }}</label>";
            html += "<textarea class=\"form-control\" id=\"comments\" rows=\"3\" name=\"comments\" value=\"{{ old('comments') }}\"></textarea>";
            html += "<span class=\"invalid-feedback comments\" role=\"alert\"></span>";
            html += "</div>";
            html += "<div class=\"form-group\">";
            html += "<button class=\"btn btn-primary checkout\">{{ __('shop.checkout') }}</button>";
            html += "</div>";
            html += "</form>";

            $(html).appendTo(".form-checkout");
        }

        $(document).on("submit", "form", function (e) {
            e.preventDefault();
            $(".invalid-feedback").empty();

            $.post("cart", $('form').serialize())
                .done(function (res) {
                    $("<div class=\"alert alert-success\">" + res.status + "</div>").appendTo("#messages");
                    $(".cart").empty();
                    $(".form-checkout").empty();
                })
                .fail(function (err) {
                    Object.keys(err.responseJSON.errors).map(function (key) {
                        $(".invalid-feedback." + key).css("display", "block");
                        $("<strong>" + err.responseJSON.errors[key][0] + "</strong>").appendTo(".invalid-feedback." + key);
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
