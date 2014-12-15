@extends('layouts.default')
@section('head')
    @parent
    <title>Admin Edit Page</title>
@stop
@section('content')
<section class="form">
    <header>
        <h1>
            Admin Edit Page
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
            {{ Form::open(['url' => "/admin/page/$page->id"]) }} 
                <div>
                    {{ Form::label('title', 'Title: ') }}
                    <br />
                    {{ Form::text('title', $page->title) }} 
                </div>
                <div>
                    {{ Form::label('content', 'Content: ') }}
                    <br />
                    {{ Form::textarea('content', $page->content) }} 
                </div>
                <div>
                    {{ Form::submit('Edit')}}                    
                </div>
            {{ Form::close()}} 
        </div>
    </article>
</section>
@stop