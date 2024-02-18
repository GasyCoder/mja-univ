<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>404 Non trouvé</title>
    <meta name="author" content="BEZARA Florent">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/' . get_settings()['logo']) }}" />
    <!-- Google Font hébergées-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
</head>
<body>
  <section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Image -->
                <img src="{{ asset('assets/images/element/error404-01.svg') }}" class="h-200px h-md-400px mb-4" alt="">
                <!-- Title -->
                <h1 class="display-1 text-danger mb-0">404</h1>
                <!-- Subtitle -->
                <h2>Oh non, quelque chose s'est mal passé !</h2>
                <!-- info -->
                <p class="mb-4">Soit quelque chose s'est mal passé, soit cette page n'existe plus.</p>
                <!-- Button -->
                <a href="/" wire:navigate class="btn btn-primary mb-0">Retour à la page d'accueil</a>
            </div>
        </div>
    </div>
</section>
</div>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Template Functions -->
<script src="{{ asset('assets/js/functions.js') }}"></script>

</body>

</html>
