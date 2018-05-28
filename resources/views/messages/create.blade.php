@extends('layouts.app')

@section('content')

    <h1>kadai-tasklist新規作成ページ</h1>

    {!! Form::model($message, ['route' => 'messages.store']) !!}

        {!! Form::label('content', '課題:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('追加') !!}

    {!! Form::close() !!}

@endsection