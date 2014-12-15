<nav>
    <ul>
        @foreach($pages as $page)
        <li>
            {{ HTML::Link("/$page->slug", "$page->title") }} 
        </li>
        @endforeach        
        @if(Auth::check())     
        <li>
            {{ HTML::Link('/admin/page/create', 'Create New Page') }}
        </li>
        <li>
            {{ HTML::Link('/admin/page/index', 'All Pages') }}
        </li>
        <li>
            {{ HTML::Link('/admin/inquiries', 'All Inquiries') }}
        </li>
        <li>
            {{ HTML::Link('/admin/logout', 'Logout') }}
        </li>  
        @else
        <li>
            {{ HTML::Link('/admin/create', 'Sign Up') }}
        </li>
        <li>
            {{ HTML::Link('/admin/login', 'Sign In') }}
        </li>
        @endif
    </ul>
</nav>