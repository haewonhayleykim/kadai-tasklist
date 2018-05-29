@extends('layouts.app')

@section('content')

    <h1>課題新規作成ページ</h1>

    {!! Form::model($message, ['route' => 'messages.store']) !!}

        {!! Form::label('content', '課題:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection