<div class="form__file">
    <span class="form__file-name">{{ __('fields.' . $name) }} {!! isset($required) ? '<sup class="input-red">*</sup>' : '' !!}</span>

    @if(Auth::check() && (Auth::user()->role->id == 1 || Auth::user()->role->id == 2))
    @else
    <input class="input-file" name="{{ $name }}" type="file" {{ isset($required) ? 'required' : '' }}>
    <p class="form__file-info">(не более 10 Мб, расширение pdf, jpeg, jpg, png, doc)</p>
    @endif


    @if($value)
        <a href="{{ route(Auth::user()->role->id == 1 || Auth::user()->role->id == 1 ? 'admin.download' : 'cabinet.download', $value) }}">Скачать</a>
    @endif
</div>
@error($name)
<div class="message message_error">{{ $message }}</div>
@enderror
