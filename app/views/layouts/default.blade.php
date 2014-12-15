<!DOCTYPE html>
<html>
    <head>  
        <meta charset="UTF-8">        
    </head>
    <body>
        <header>                                  
            <nav>
                <ul>
                    <li>
                        {{ HTML::Link('/', 'Home Page') }}
                    </li>
                    <li>
                        {{ HTML::Link('/information', 'Information Page') }}
                    </li>
                    <li>
                        {{ HTML::Link('/inquiries', 'Contact Form') }}
                    </li>
                    @if(!Auth::check())
                    <li>
                        {{ HTML::Link('/admin/create', 'Sign Up') }}
                    </li>
                    <li>
                        {{ HTML::Link('/admin/login', 'Sign In') }}
                    </li> 
                    <li>
                        {{ HTML::Link('/admin/page', 'Edit Page') }}
                    </li>
                    @else
                    <li>
                        {{ HTML::Link('/admin/logout', 'Logout') }}
                    </li>
                    @endif
                </ul>
            </nav>
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