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
</body>
</html>
