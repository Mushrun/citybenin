<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello From Benin</title>

      
    </head>
    <body >
        <h1> Hello from Benin</h1>

        <p> It's currently {{ date('h:i A') }} </p>

        <footer>
            <p> &copy; Copyright  {{ date('Y') }}&middot; <a href="/about-us">About Us</a></p>

        </footer>
    </body>
</html>
