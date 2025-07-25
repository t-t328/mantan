<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/sample.css'])
</head>
<body>
    @extends('layouts.comp')
    <h1 class="text-3xl font-bold text-green-700">sample text tailwindから適用</h1>
    <h2 class="sample">sample text cssファイルから適用</h2>
</body>
</html>