@extends('layouts.app')

@section('content')
    <x-user-type-navs></x-user-type-navs>
    <h1>Регистрация юридического лица</h1>
    @if(session('registration_complete'))
        <div class="message message_success">{{ session('registration_complete') }}</div>
    @endif
    <form action="{{ route('user.create') }}" method="POST" class="form" novalidate enctype="multipart/form-data">
        @csrf
        @include('forms._ur')
    </form>
@endsection
