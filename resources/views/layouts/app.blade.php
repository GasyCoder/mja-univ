<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@hasSection('title') @yield('title') | @endif {{ get_settings()['site_name'] }}</title>
    <meta name="author" content="BEZARA Florent">
    <meta name="description" content="{{ get_settings()['description']}}">
    <meta name="keywords" content="{{ get_settings()['keywords']}}">
    <!-- Open Graph and Twitter Card -->
    <meta property="og:title" content="@hasSection('title') @yield('title') | @endif {{ get_settings()['site_name'] }}">
    <meta property="og:description" content="{{ get_settings()['description']}}">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/' . get_settings()['logo']) }}" />
    <!-- Google Font hébergées-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    @if(Route::is('admin') || Route::is('categorie') || Route::is('article')
    || Route::is('president') || Route::is('profil_etab') || Route::is('type_etab') || Route::is('domaines')
    || Route::is('historique') || Route::is('list_president') || Route::is('orga') || Route::is('staff')
    || Route::is('event') || Route::is('settings') || Route::is('contact') || Route::is('abonne')
    || Route::is('ecole_doctorale'))
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/css/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.cs') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/quill/css/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/yaireo/tagify/dist/tagify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/stepper/css/bs-stepper.min.css') }}">
    <!-- Include Bubble Theme -->
    @endif
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
    @include('layouts.partials.dark')
    @stack('styles')
</head>
<body>
@if(Route::is('admin') || Route::is('categorie') || Route::is('article')
|| Route::is('president') || Route::is('profil_etab') || Route::is('type_etab') || Route::is('domaines')
|| Route::is('historique') || Route::is('list_president') || Route::is('orga') || Route::is('staff')
|| Route::is('event') || Route::is('settings') || Route::is('contact') || Route::is('abonne')
|| Route::is('ecole_doctorale'))
    <main>
        @include('layouts.admin.sidebar')
        <div class="page-content">
        @include('layouts.admin.navigation')
        {{ $slot }}
        </div>
    </main>
@else
@include('layouts.partials.header')
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

@include('layouts.partials.footer')
@endif

<!-- Cookie alert box START -->
@livewire('cookie-alert')
<!-- Cookie alert box END -->

<!-- Back to top -->
<div class="back-top">
    <i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i>
</div>
<!-- Vendors -->
<script data-navigate-once="false" src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script data-navigate-track="false" src="{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
<script data-navigate-once="false" src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<script data-navigate-once="false" src="{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}"></script>
<script data-navigate-once="false" src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>
<script data-navigate-once="false" src="{{ asset('assets/vendor/simplebar/dist/simplebar.min.js') }}"></script>
<script data-navigate-once="false" src="{{ asset('assets/vendor/imagesLoaded/imagesloaded.js') }}"></script>
<!-- Js Functions -->
<script src="{{ asset('assets/js/functions.js') }}"></script>
@if(Route::is('admin') || Route::is('categorie') || Route::is('article')
|| Route::is('president') || Route::is('profil_etab') || Route::is('type_etab') || Route::is('domaines')
|| Route::is('historique') || Route::is('list_president') || Route::is('orga') || Route::is('staff')
|| Route::is('event') || Route::is('settings') || Route::is('contact') || Route::is('abonne')
|| Route::is('ecole_doctorale'))
<!-- Vendors -->
<script src="{{ asset('assets/vendor/apexcharts/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js') }}"></script>
<script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/quill/js/quill.min.js') }}"></script>
<script src="{{ asset('assets/vendor/yaireo/tagify/dist/tagify.min.js') }}"></script>
<script src="{{ asset('assets/vendor/stepper/js/bs-stepper.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
@endif

@stack('scripts')
</body>
</html>
