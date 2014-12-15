@extends('layouts.default')
@section('head')
    @parent
    <title>Admin Create New Page</title>
@stop
@section('content')
<section>
    <header>
        <h1>
            Create New Page
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
            {{ Form::open(['url' => '/admin/page']) }} 
                <div>
                    {{ Form::label('title', 'Title: ') }}
                    <br />
                    {{ Form::text('title', Input::old('title')) }} *
                </div>
                <div>
                    {{ Form::label('content', 'Content: ') }}
                    <br />
                    {{ Form::textarea('content') }} *
                </div>
                <div>
                    {{ Form::submit('Create')}}                    
                </div>
            {{ Form::close()}} 
        </div>
    </article>
</section>
@stop