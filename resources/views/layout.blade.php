<!doctype html>
<html>
    <head>
        <link rel="icon" type="image/x-icon" href="http://example.com/favicon.ico" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Aumm Studio" />
        <meta property="og:locale" content="en_US" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="" />
	    <meta name="twitter:creator" content="" />
        <meta name="theme-color" content="#F8D174">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('head')
    </head>

    @yield('script')
    <body>
        <div id="app">
            @yield('content')
            <footer class="footer">
                <div class="container footer-text">
                    Copyright © {{ date('Y') }} Aumm Studio
                </div>
            </footer>
        </div>
    </body>
</html>