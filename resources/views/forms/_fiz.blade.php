<input type="hidden" name="role_id" value="3">
<div class="form-fields flex flex_left">
    <x-input-wrap name="name" required="true" value="{{ isset($user) ? $user->name : null }}"></x-input-wrap>
    <x-input-wrap name="birth_date" required="true" mask="mask-date" value="{{ isset($user) ? $user->userable->birth_date : null }}"></x-input-wrap>
    <x-input-wrap name="birth_place" required="true" value="{{ isset($user) ? $user->userable->birth_place : null }}"></x-input-wrap>
    <x-input-wrap name="citizenship" required="true" value="{{ isset($user) ? $user->userable->citizenship : null }}"></x-input-wrap>
    <x-input-wrap name="passport_ser" required="true" mask="mask-passport-ser" value="{{ isset($user) ? $user->userable->passport_ser : null }}"></x-input-wrap>
    <x-input-wrap name="passport_num" required="true" mask="mask-passport-num" value="{{ isset($user) ? $user->userable->passport_num : null }}"></x-input-wrap>
    <x-input-wrap name="passport_who" required="true" value="{{ isset($user) ? $user->userable->passport_who : null }}"></x-input-wrap>
    <x-input-wrap name="passport_date" required="true" mask="mask-date" value="{{ isset($user) ? $user->userable->passport_date : null }}"></x-input-wrap>
    <x-input-wrap name="inn" mask="mask-inn" value="{{ isset($user) ? $user->userable->inn : null }}"></x-input-wrap>
    <x-input-wrap name="snils" mask="mask-snils" value="{{ isset($user) ? $user->userable->snils : null }}"></x-input-wrap>
    <x-input-wrap name="address_reg" required="true" value="{{ isset($user) ? $user->userable->address_reg : null }}"></x-input-wrap>
    <x-input-wrap name="address_prozh" required="true" value="{{ isset($user) ? $user->userable->address_prozh : null }}"></x-input-wrap>
    <x-input-wrap name="phone" required="true" mask="mask-phone" value="{{ isset($user) ? $user->userable->phone : null }}"></x-input-wrap>
    <x-input-wrap name="email" required="true" type="email" value="{{ isset($user) ? $user->email : null }}"></x-input-wrap>
    <x-input-wrap name="password" required="true" type="password"></x-input-wrap>
    <x-input-wrap name="password_confirmation" required="true" type="password"></x-input-wrap>
</div>
<div class="form__files">
    <p class="form__files-title">Приложите документы</p>
    <x-input-file-wrap name="doc_copiya_passport" required="true" value="{{ isset($user) ? $user->userable->doc_copiya_passport : null }}"></x-input-file-wrap>
    <x-input-file-wrap name="doc_copiya_inn" required="true" value="{{ isset($user) ? $user->userable->doc_copiya_inn : null }}"></x-input-file-wrap>
    <x-input-file-wrap name="doc_copiya_snils" required="true" value="{{ isset($user) ? $user->userable->doc_copiya_snils : null }}"></x-input-file-wrap>
    <x-input-file-wrap name="doc_doverennost" value="{{ isset($user) ? $user->userable->doc_doverennost : null }}"></x-input-file-wrap>
</div>
@if(!Auth::check())
<div class="center">
    <label class="checkbox-wrap">
        <input type="checkbox" class="checkbox" required> Нажимая на кнопку "Зарегистрироваться" вы даете согласие на <a href="/" class="link">обработку персональных данных</a>
    </label>
    <input type="submit" class="button button_blue" value="Зарегистрироваться">
</div>
@endif
