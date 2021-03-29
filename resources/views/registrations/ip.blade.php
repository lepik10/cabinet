@extends('layouts.app')

@section('content')
    <x-user-type-navs type="ip"></x-user-type-navs>
    <h1>Регистрация индивидуального предпринимателя</h1>
    @if(session('registration_complete'))
        <div class="message message_success">{{ session('registration_complete') }}</div>
    @endif
    <form action="{{ route('user.create') }}" method="POST" class="form" novalidate enctype="multipart/form-data">
        @csrf
        @include('forms._ip')
    </form>
@endsection
