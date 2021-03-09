@extends('layouts.app')

@section('content')
    <h1>Регистрация физического лица</h1>
    @if(session('registration_complete'))
        <div class="message message_success">{{ session('registration_complete') }}</div>
    @endif
    <form action="{{ route('user.create') }}" method="POST" class="form" novalidate enctype="multipart/form-data">
        @csrf
        @include('forms._fiz')
    </form>
@endsection
