@extends('layout')


@section('content')
    <div class="container rounded mb-3 p-3 shadow">
        Sorry, but something bad happened.<br/>
        <br/>
        Bad system! No treats for you!<br/>
        <br/>
        Feel free to report this to our team:
        {{ $e }}

        <br/>
        <br/>
        {{ $prescription }}
    </div>
@endsection