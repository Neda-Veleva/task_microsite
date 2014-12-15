@extends('layouts.default')
@section('head')
    @parent
    <title>{{ $page->title }}</title>
@stop
@section('content')
<section>
    <article>

        <h1>
            {{$page->title}}
        </h1>
        <p>
            {{ $page->content }}
        </p>
    </article>
</section>

@stop