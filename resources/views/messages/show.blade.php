@extends('layouts.app')

@section('content')

    <h1>id = {{ $message->id }} のkadai-tasklist詳細ページ</h1>

    <p>{{ $message->content }}</p>
    
    {!! link_to_route('messages.edit', 'このkadai-tasklistを編集', ['id' => $message->id]) !!}

    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection