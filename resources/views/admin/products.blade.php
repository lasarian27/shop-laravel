@extends('layouts.app')

@section('title', __('shop.products.title'))

@section('scripts')
    <script>
        function getProducts() {
            $.get("/products")
                .done(function (req) {
                    $(".products").empty();

                        $(".form-checkout").css("display", "block");

                        renderProducts(req.data);

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
                })
                .fail(function () {
                    $("<h4>Error</h4>").appendTo("#errors");
                });
        }

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
                html += '<div class="row"';
                @if(Auth::user()->isAdmin() || Auth::user()->isModerator())
                    html += '<button class="btn btn-info edit" data="' + product.id + '"><?= __("shop.edit") ?></button>';
                    html += '<button class="btn btn-destroy delete" data="' + product.id + '"><?= __("shop.delete") ?></button>';
                @endif
                html+= "<p class=\"text-center\">{{ __('shop.created.by') }}" + product.user.name + " - " + product.created_at.diffForHumans() + '</p>';
                html += '</div>';
                html += '</div>';
            });
            html += '</div>';
            $(html).appendTo(".container.home");
            }
        $(document).ready(function () {
            getProducts();
            renderProducts();
        })
    </script>
@endsection

@section('content')
    <div class="container products">

      {{--  @if(count($products))
            <div class="row">
                @foreach($products as $product)
                    <div class="card">
                        <div class="card-header">
                            <img
                                src="{{ url(config('app.image_dir') . '/' . $product['id'] . config('app.image_extension')) }}"
                                class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['title'] }}</h5>
                            <p class="card-text">{{ $product['description'] }}</p>
                            <h2 class="card-text text-center">{{ $product['price'] }}$</h2>
                        </div>
                        <div class="card-footer text-center">

                            <div class="row">
                                @if(Auth::user()->isAdmin() || Auth::user()->isModerator() && Auth::user()->getKey() === $product['id'])
                                    <a href="{{ route('products.edit', $product['id']) }}"
                                       class="btn btn-info col">{{ __('shop.edit') }}</a>
                                    <form action="{{ route('products.destroy', [$product['id']]) }}" method="POST"
                                          class="col">
                                        @method('DELETE')
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">{{ __('shop.delete') }}</button>
                                    </form>
                                @endif
                                <p class="text-center">{{ __('shop.created.by') . $product->user->name . " - " . $product->created_at->diffForHumans() }}</p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>{{ __('shop.empty.db') }}</h2>
        @endif

        <a href="{{ route('products.create') }}" class="btn btn-primary">{{ __('shop.create.product') }}</a>--}}
    </div>
@endsection
