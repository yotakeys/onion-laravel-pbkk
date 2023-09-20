<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    {{--    <link rel="stylesheet" href="css/app.css">--}}
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
<div class="center">
    <h2>Selamat Datang</h2>
    <h1>di myPBKK Thesis</h1>
    <a href="{{route('masuk')}}" type="button" id="button-masuk">Masuk</a>
    <a href="{{route('daftar')}}" type="button" class="button-daftar">Daftar</a>
</div>

<x-button-component name="testing" default=""></x-button-component>

</body>
</html>
