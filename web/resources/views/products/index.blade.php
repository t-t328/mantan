<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    {{-- Tailwind CSS を使っている場合、以下のCSSフレームワークを使用すると、ページネーションの見た目が整います --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <h1>商品一覧</h1>

    <div>
        @foreach ($products as $product)
            <div>
                <h2><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></h2>
                <p>価格: {{ $product->price }}円</p>
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
            </div>
            <hr>
        @endforeach
    </div>

    {{-- ページネーションリンクの表示 --}}
    <div class="mt-4">
        {{ $products->links() }}
    </div>
</body>
</html>