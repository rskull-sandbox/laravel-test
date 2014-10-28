
@extends('common')

@section('content')
    <h2>User list!!!</h2>
    @foreach ($users as $user)
        <p>ID {{ $user->id }} : {{ $user->name }} : {{ $user->created_at }}</p>
    @endforeach
@stop

