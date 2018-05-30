@extends('layouts.app')

@section('content')

    <h1>id = {{ $message->id }} の課題詳細ページ</h1>

    <p>課題: {{ $message->status }}</p>
    <p>詳細: {{ $message->content }}</p>

    {!! link_to_route('messages.edit', 'この課題編集', ['id' => $message->id]) !!}

    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection