<input type="hidden" name="role_id" value="3">
<div class="form-fields flex flex_left">
    <x-input-wrap name="name" required="true"></x-input-wrap>
    <x-input-wrap name="birth_date" required="true" mask="mask-date"></x-input-wrap>
    <x-input-wrap name="birth_place" required="true"></x-input-wrap>
    <x-input-wrap name="citizenship" required="true"></x-input-wrap>
    <x-input-wrap name="passport_ser" required="true" mask="mask-passport-ser"></x-input-wrap>
    <x-input-wrap name="passport_num" required="true" mask="mask-passport-num"></x-input-wrap>
    <x-input-wrap name="passport_who" required="true"></x-input-wrap>
    <x-input-wrap name="passport_date" required="true" mask="mask-date"></x-input-wrap>
    <x-input-wrap name="inn" mask="mask-inn"></x-input-wrap>
    <x-input-wrap name="snils" mask="mask-snils"></x-input-wrap>
    <x-input-wrap name="address_reg" required="true"></x-input-wrap>
    <x-input-wrap name="address_prozh" required="true"></x-input-wrap>
    <x-input-wrap name="phone" required="true" mask="mask-phone"></x-input-wrap>
    <x-input-wrap name="email" required="true" type="email"></x-input-wrap>
    <x-input-wrap name="password" required="true" type="password"></x-input-wrap>
    <x-input-wrap name="password_confirmation" required="true" type="password"></x-input-wrap>
</div>
<div class="form__files">
    <p class="form__files-title">Приложите документы</p>
    <x-input-file-wrap name="doc_copiya_passport" required="true"></x-input-file-wrap>
    <x-input-file-wrap name="doc_copiya_inn" required="true"></x-input-file-wrap>
    <x-input-file-wrap name="doc_copiya_snils" required="true"></x-input-file-wrap>
    <x-input-file-wrap name="doc_doverennost"></x-input-file-wrap>
</div>
<div class="center">
    <label class="checkbox-wrap">
        <input type="checkbox" class="checkbox" required> Нажимая на кнопку "Зарегистрироваться" вы даете согласие на <a href="/" class="link">обработку персональных данных</a>
    </label>
    <input type="submit" class="button button_blue" value="Зарегистрироваться">
</div>
