<input type="hidden" name="role_id" value="4">
<div class="form-fields flex flex_left">
    <x-input-wrap name="name_ur" required="true" value="{{ isset($user) ? $user->name : null }}"></x-input-wrap>
    <x-input-wrap name="name_full" required="true" value="{{ isset($user) ? $user->userable->name_full : null }}"></x-input-wrap>
    <x-input-wrap name="kpp" required="true" value="{{ isset($user) ? $user->userable->kpp : null }}"></x-input-wrap>
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
@if(!Auth::check())
<div class="center">
    <input type="submit" class="button button_blue" value="Зарегистрироваться">
</div>
@endif
