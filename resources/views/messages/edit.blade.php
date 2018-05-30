@extends('layouts.app')

@section('content')

    <h1>id: {{ $message->id }} の課題編集ページ</h1>

    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}

        {!! Form::label('status', '課題:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', '詳細:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection