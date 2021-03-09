@extends('layouts.app')

@section('content')
    <h1>Реквизиты</h1>
    {{ $user->name }} - {{ $user->userable->phone }}
@endsection
