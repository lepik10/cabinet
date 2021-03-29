@extends('layouts.app')

@section('content')
    <h1>Реквизиты</h1>
    @switch($user->role_id)
        @case(3)
            @include('forms._fiz')
        @break
        @case(4)
            @include('forms._ur')
        @break
        @case(5)
            @include('forms._ip')
        @break
    @endswitch
@endsection
