@extends('layouts.default')
@section('head')
    @parent
    <title>Sign In Page</title>
@stop
@section('content')
<section class="form">
    <header>
        <h1>
            Login Form
        </h1>
    </header>
    <article>   
        <div>
            @if($errors->has())    
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div>
            {{ Form::open(['url' => '/admin/login']) }} 
                <div>
                    {{ Form::label('username', 'Username: ') }}
                    {{ Form::text('username', Input::old('username')) }} *
                </div>
                <div>
                    {{ Form::label('password', 'Password: ') }}
                    {{ Form::password('password') }} *
                </div>
                <div>
                    {{ Form::label('remember', 'Remember:') }} 
                    {{ Form::checkbox('remember') }}                                                   
                </div>
            <div class="login">
                    {{ Form::submit('Login')}}
                    {{ HTML::Link('/admin/create', 'Sign Up') }}
                </div>
            {{ Form::close()}} 
        </div>
    </article>
</section>
@stop