<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>

    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="300">

    <p>{{ $product->description }}</p>
    <p>価格: {{ $product->price }}円</p>

    {{-- ここに「カートに入れる」ボタンなどを追加 --}}
    <button>カートに入れる</button>

    <p><a href="{{ route('products.index') }}">商品一覧に戻る</a></p>
</body>
</html>