<!DOCTYPE html>
<html>
    <head>
        <title>Kangur site</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href='{{asset('main.css')}}'>
        <link rel="stylesheet" href='{{asset('css/bootstrap.min.css')}}'>
        <script src="{{asset('jquery.min.js')}}"></script>
        <script src="{{asset('Skrypt.js')}}" defer></script>
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
        <div id="footer">
       Copyright &copy; Kangur
   </div>
        <button id="bgChanger" type= "button" class="btn btn-danger" onclick="changeBg('{{asset('piesel.jpg')}}', '{{asset('kangur2.jpg')}}')">change bg</button>
    </body>
</html>
