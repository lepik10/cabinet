@extends('layouts.app')

@section('content')
    <x-user-type-navs></x-user-type-navs>
    <h1>Регистрация юридического лица</h1>
    @if(session('registration_complete'))
        <div class="message message_success">{{ session('registration_complete') }}</div>
    @endif
    <form action="{{ route('user.create') }}" method="POST" class="form" novalidate enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="role_id" value="4">
        <div class="form-fields flex flex_left">
            <x-input-wrap name="name_ur" required="true"></x-input-wrap>
            <x-input-wrap name="name_full" required="true"></x-input-wrap>
            <x-input-wrap name="kpp" required="true"></x-input-wrap>
            <x-input-wrap name="ogrn" required="true"></x-input-wrap>
            <x-input-wrap name="inn" required="true" mask="mask-inn"></x-input-wrap>
            <x-input-wrap name="address_ur" required="true"></x-input-wrap>
            <x-input-wrap name="address_fact" required="true"></x-input-wrap>
            <x-input-wrap name="bank_name" required="true"></x-input-wrap>
            <x-input-wrap name="dolzhnost_fio" required="true" fullwidth="true"></x-input-wrap>
        </div>
        <div class="form-fields flex flex_left">
            <x-input-wrap name="bank_rc" required="true"></x-input-wrap>
            <x-input-wrap name="bank_kc" required="true"></x-input-wrap>
            <x-input-wrap name="bank_bik" required="true"></x-input-wrap>
            <x-input-wrap name="phone" required="true" mask="mask-phone"></x-input-wrap>
            <x-input-wrap name="email" required="true" type="email"></x-input-wrap>
            <x-input-wrap name="contact_name"></x-input-wrap>
            <x-input-wrap name="contact_phone" required="true" mask="mask-phone"></x-input-wrap>
            <x-input-wrap name="password" required="true" type="password"></x-input-wrap>
            <x-input-wrap name="password_confirmation" required="true" type="password"></x-input-wrap>
        </div>
        <div class="form__files">
            <p class="form__files-title">Приложите документы</p>
            <x-input-file-wrap name="doc_copiya_inn" required="true"></x-input-file-wrap>
            <x-input-file-wrap name="doc_ogrn" required="true"></x-input-file-wrap>
            <x-input-file-wrap name="doc_egrul"></x-input-file-wrap>
            <x-input-file-wrap name="doc_copiya_polnomoch" required="true"></x-input-file-wrap>
        </div>
        <div class="center">
            <input type="submit" class="button button_blue" value="Зарегистрироваться">
        </div>
    </form>
@endsection
