
@extends('common')

@section('content')
    @foreach ($users as $user)
        <p>{{ $user->name }} : {{ $user->created_at }}</p>
    @endforeach
@stop

