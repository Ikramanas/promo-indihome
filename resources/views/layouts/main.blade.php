<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Indihome Fiber Sulawesi Selatan</title>

        <meta content="" name="description">
        <meta content="" name="keywords">

        @include('partial.style')

         <!-- leaflet js  -->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    </head>
    <body>

        @include('partial.header')

        @yield('content')

        @include('partial.footer')

        @include('partial.script')

    </body>
</html>