@extends('layouts.default')
@section('head')
    @parent
    <title>Sign Up Page</title>
@stop
@section('content')
<section class="form">
    <header>
        <h1>
            Registration Form
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
            {{ Form::open(['url' => '/admin']) }} 
                <div>
                    {{ Form::label('username', 'Username: ') }}
                    {{ Form::text('username', Input::old('username')) }} *
                </div>
                <div>
                    {{ Form::label('emai', 'Email: ') }}
                    {{ Form::email('email', Input::old('email')) }} *
                </div>
                <div>
                    {{ Form::label('password', 'Password: ') }}
                    {{ Form::password('password') }} *
                </div>
                <div>
                    {{ Form::label('confirm_password', 'Confirm password: ') }}
                    {{ Form::password('confirm_password') }} *
                </div>
                <div>
                    {{ Form::submit('Register')}}
                    {{ HTML::Link('/admin/login', 'Sign In') }}
                </div>
            {{ Form::close()}}            
        </div>
    </article>
</section>
@stop