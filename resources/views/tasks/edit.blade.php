@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} の課題編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('status', '課題:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', '詳細:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection