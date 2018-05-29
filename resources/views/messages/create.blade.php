@extends('layouts.app')

@section('content')

    <h1>課題新規作成ページ</h1>


    {!! Form::model($message, ['route' => 'messages.store']) !!}

        {!! Form::label('title', '課題:') !!}
        {!! Form::text('title') !!}

        {!! Form::label('content', '詳細:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection