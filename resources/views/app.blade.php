<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPA - Laravel + Vite + Vue3</title>

    {{-- UIkit CSS --}}
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}"/>

    {{-- UIkit JS --}}
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>

    @vite('resources/js/app.js')
</head>
<body>

<div id="app"></div>

</body>
</html>
