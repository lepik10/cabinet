@extends('layouts.app')

@section('content')
<div class="login-form">
    <p class="login-form__title">{{ $type == 'ur' ? 'Вход для юридических лиц' : 'Вход для частных лиц' }}</p>
    <p class="login-form__text">Пожалуйста, авторизуйтесь</p>
    @if(session('login_error'))
        <div class="message message_error">{{ session('login_error') }}</div>
    @endif
    <form method="POST" action="{{ route('user.login.check') }}" class="login-form__form">
        @csrf
        <x-input-wrap name="email" title="Логин" required="true" fullwidth="true" placeholder="Введите ваш логин"></x-input-wrap>
        <x-input-wrap name="password" type="password" required="true" fullwidth="true" placeholder="Введите ваш пароль"></x-input-wrap>
        <input type="submit" class="button button_blue button_fullwidth" value="Войти">
    </form>
    <div class="login-form__bottom">
        <div class="login-form__link-wrap login-form__link-wrap_border">
            <a href="/" class="login-form__link">Забыли свой пароль?</a>
        </div>
        <div class="login-form__link-wrap">
            <a href="{{ $type == 'ur' ? route('user.registration', 'ur') : route('user.registration') }}" class="login-form__link">Регистрация</a>
            <img class="login-form__icon" src="/images/icons/user-blue.svg" alt="Регистрация">
        </div>
    </div>
</div>
@endsection
