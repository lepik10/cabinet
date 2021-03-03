<div class="form__file">
    <span class="form__file-name">{{ __('fields.' . $name) }} {!! isset($required) ? '<sup class="input-red">*</sup>' : '' !!}</span>
    <input class="input-file" name="{{ $name }}" type="file" {{ isset($required) ? 'required' : '' }}>
    <p class="form__file-info">(не более 10 Мб, расширение pdf, jpeg, jpg, png, doc)</p>
</div>
@error($name)
<div class="message message_error">{{ $message }}</div>
@enderror
