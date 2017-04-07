<!DOCTYPE html>
<html>
    <head>
        <title>Test site</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href='{{asset('main.css')}}'>
        <link rel="stylesheet" href='{{asset('css/bootstrap.min.css')}}'>
    </head>
    <body class="container-fluid">
        <nav class="main-menu">
            @include('menu')
        </nav>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-xs-8 col-xs-12">
            <section class="main-section">
                <article>              
                @yield('content')              
            </article>
            </section>
            </div>          
                <div class="col-md-2"></div>
        </div>
        <footer>        
        </footer>
    </body>
</html>
