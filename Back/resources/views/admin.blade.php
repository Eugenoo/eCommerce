<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Styles -->

        @vite('resources/css/app.css')
    </head>
    <body>
        <div>
            user
        <div>
            {{ $test['user']['name'] }}
        </div>
        </div>

        <div>
            Products
        <div>
            <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th>age</th>
                <th>stock</th>
                <th>bestseller</th>
                <th>sale</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>action</th>
            </tr>
            <?php $i=0; ?>
            @foreach($test['products'] as $product)
            <?php $i++ ?>
            <?php if($i%2 == 0) : ?>
                <tr class="bg-white hover:bg-gray-200" >
            <?php elseif($i%2 == 1) : ?>
                <tr class="bg-gray-100 hover:bg-gray-200" >
            <?php endif; ?>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['description'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['age'] }}</td>
                <td>{{ $product['stock'] }}</td>
                <td>{{ $product['bestseller'] }}</td>
                <td>{{ $product['sale'] }}</td>
                <td>{{ $product['created_at'] }}</td>
                <td>{{ $product['updated_at'] }}</td>
                <td>
                    <button class="bg-blue-400">edit</button>
                    <button>delete</button>
                </td>
            </tr>
            @endforeach
            </table>



            </div>
        <div>
    </body>
</html>
