<!DOCTYPE html>
<html>
    <head>  
        @section('head')
        <meta charset="UTF-8">        
        @show      
    </head>
    <body>
        <header>                                  
            @include('navigation')
        </header>
        <div class="message">
            @if(Session::has('message'))
                <h3> {{ Session::get('message') }} </h3>
            @endif
        </div>
        <div class="wrapper">
            @yield('content')
        </div>       
    </body>
</html>