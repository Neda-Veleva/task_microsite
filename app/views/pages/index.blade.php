@extends('layouts.default')
@section('head')
    @parent
    <title>Admin All Pages</title>
@stop
@section('content')
<section>
    <article>
        <h1>
            Admin All Pages
        </h1>
        
    <div>
        
        <table>
            <thead>
                <tr>
                    <th>&numero;</th>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pages as $page)
                <tr>
                    <td>
                        {{ $page->id }}
                    </td>
                    <td>
                        {{ $page->title }}
                    </td>
                    <td>
                        {{ $page->content }}
                    </td>
                    <td>
                        {{HTML::Link("/admin/page/{$page->id}/edit", 'edit page', array($page->id)) }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@stop
