<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
  </head>
  <body>

    @include('partials.header')

    <main>
      @yield('main')
    </main>

    @include('partials.footer')

  </body>
</html>
