@extends('layouts.app')

@section('content')

    <h1>課題一覧</h1>

    @if (count($messages) > 0)
        <ul>
            @foreach ($messages as $message)
                <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->status }} > {{ $message->content }}</li>
            @endforeach
        </ul>
    @endif

    {!! link_to_route('messages.create', '新規課題の投稿') !!}

@endsection