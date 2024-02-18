<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="BEZARA Florent">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/' . get_settings()['logo']) }}" />
    <title>Site désactivé</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
</head>

<body>
    <div class="container pt-3">
        <h1 class="text-danger">Site désactivé</h1>
        <p class="lead">{{ $message }}</p>
    </div>
</body>

</html>
