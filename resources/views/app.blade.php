<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') {{ config('varenyky-admin.name') }}</title>
    <link rel="stylesheet" href="/css/admin.css" />
    <link rel="stylesheet" type="text/css" href="/css/theme.css">
    <link rel="stylesheet" type="text/css" href="/css/auth.css">
    @yield('css')
</head>
<body>
    <main>
        @include('varenykyAdmin::sidebar')
        <article style="width:100%; overflow-y: scroll;" class="text-start">
            @include('varenykyAdmin::top')
            @yield('tabs')
            @include('varenykyAdmin::alerts')
            <div class="container py-3">
                @yield('content')
            </div>
            @include('varenykyAdmin::footer')
        </article>
    </main>
    <script src="/js/admin.js"></script>
    <script src="https://cdn.tiny.cloud/1/03xc5vammwoyka8022s0e8q1x8qb454jueaaja5b7cm44u8s/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    @yield('js')
</body>
</html>
