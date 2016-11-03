@extends('app')

@section('content')
    <div class="container">
        <h1>Messages</h1>

        @foreach($messages as $message)
            <h3>{{ $message->body }}</h3>
        @endforeach
    </div>
@stop