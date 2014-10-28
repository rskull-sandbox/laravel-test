
@extends('common')

@section('content')
    @foreach ($users as $user)
        <p>ID: {{ $user->id }} {{ $user->name }} : {{ $user->created_at }}</p>
    @endforeach
@stop

