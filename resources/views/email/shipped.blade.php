@component('mail::message')
    # Hello Admin

    From: {{ $content['email'] }}
    Name: {{ $content['name'] }}
    Comments: {{ $content['comments'] }}

    <table class="table">
        <tbody>
        @foreach($content['products'] as $product)
            <tr>
                <td><img src="{{ url(config('url') . config('app.image_dir') . $product['id'] . config('app.image_extension')) }}" class="card-img-top">
                </td>
                <td><h5 class="card-title">{{ $product['title'] }}</h5></td>
                <td><p class="card-text">{{ $product['description'] }}</p></td>
                <td><p class="card-text">{{ $product['price'] }}$</p></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
