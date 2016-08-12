<!DOCTYPE html>
<html>
    <head>
        <title>@yield('pageTitle')</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet"/>
        @yield('script')
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
