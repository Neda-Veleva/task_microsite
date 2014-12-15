@extends('layouts.default')
@section('head')
    @parent
    <title>{{ $page->title }}</title>
@stop
@section('content')
<section>
    <header>
        <h1>
            {{ $page->title }}
        </h1>
    </header>
    <article>   
        <p>
            {{ $page->content }}
        </p>
        @if($page->id === 3)
        <div>
            {{ Form::open(['url' => '/inquiries']) }} 
                <div>
                    {{ Form::label('name', 'Name: ') }}
                    <br/>
                    {{ Form::text('name') }}
                </div>
                <br/>
                <div>
                    {{ Form::label('family', 'Family: ') }}
                    <br/>
                    {{ Form::text('family') }}
                </div>
                <br/>
                <div>
                    {{ Form::label('email', 'E-mail: ') }}
                    <br/>
                    {{ Form::email('email') }}
                </div>
                <br/>
                <div>
                    {{ Form::label('subject', 'Subject: ') }}
                    <br/>
                    {{ Form::text('subject') }}
                </div>
                <br/>
                <div>
                    {{ Form::label('content', 'Content: ') }}
                    <br/>
                    {{ Form::textarea('content') }}
                </div>
                <br/>
                <div>
                    {{ Form::submit('Send')}}
                </div>
            {{ Form::close()}} 
        </div>
        @endif
    </article>
</section>
@stop