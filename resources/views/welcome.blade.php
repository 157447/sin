<!DOCTYPE html>
<html>
    <head>
        <title>Test site</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href='{{asset('main.css')}}'>
    </head>
    <body>
        <nav class="main-menu">
            @include('menu')
        </nav>
        <section>
            <articles class="category-menu">
               
                @yield('content')
                
            </articles>
        </section>
        <footer>
            
        </footer>
    </body>
</html>