<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('layouts.components.script')
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script> --}}

</head>

<body>
    <div class="bg-white">
        @include('layouts.components.navbar')
    </div>
    <div>
        @include('home')
        @include('contact')
    </div>
</body>

<footer class="bg-white dark:bg-gray-900">
    <div>
        @include('layouts.components.footer')
    </div>
</footer>

</html>
