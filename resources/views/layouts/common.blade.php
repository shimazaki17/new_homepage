<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @hasSection('gtag')
            <script async src="https://www.googletagmanager.com/gtag/js?id=@yield('gtag')"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag("js", new Date());

                gtag("config", "@yield('gtag')");
            </script>
            <meta name="google-site-verification" content="Gy3omZhQvd8wVM8fXXwG_1SitqokfvJuq1kOyvktiGg" />
        @endif
        <meta name="description" content="恵比寿で弁護士をお探しならご相談ください。個人・法人を問わず、お気軽にお問合せください。" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('layout-title')|@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src='https://cdn.jsdelivr.net/gh/rsms/markdown-wasm@v1.2.0/dist/markdown.js'></script>
        <script src="/static/jquery-2.1.3.min.js"></script>
        @vite(['resources/css/app.scss', 'resources/js/app.ts'])
    </head>
    <body>
        @yield('body')
    </body>
</html>
