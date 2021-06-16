<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield(('title'))</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

      
    </head>
    <body class=" py-6 flex flex-col  items-center justify-between min-h-screen" >
        <main role="main" class=" flex flex-col  items-center justify-between " >
            @yield('content')

        </main>
      
        <footer>
            <p class="text-gray-400"> 
                &copy; Copyright  {{ date('Y') }}
                @if (! Route::is('about'))
                 &middot; <a href="{{ route('about') }} " class="text-indigo-500 hover:text-indigo-600">About Us</a></p>
                    
                @endif
               

        </footer>
    </body>
</html>
