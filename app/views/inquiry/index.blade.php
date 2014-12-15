@extends('layouts.default')

@section('content')
<section>
    <article>
        <h1>
            Inquiry Page
        </h1>
        
    <div>
        
        <table>
            <thead>
                <tr>
                    <th>&numero;</th>
                    <th>Name</th>
                    <th>Family</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inquiries as $inquiry)
                <tr>
                    <td>
                        {{ $inquiry->id }}
                    </td>
                    <td>
                        {{ $inquiry->name }}
                    </td>
                    <td>
                        {{ $inquiry->family }}
                    </td>
                    <td>
                        {{ $inquiry->email }}
                    </td>
                    <td>
                        {{ $inquiry->subject }}
                    </td>
                    <td>
                        {{ $inquiry->content }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@stop
