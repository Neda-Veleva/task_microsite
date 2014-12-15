@extends('layouts.default')

@section('content')
<section>
    <article>
        <h1>
            Inquiry Page
        </h1>
        
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
</section>

@stop
