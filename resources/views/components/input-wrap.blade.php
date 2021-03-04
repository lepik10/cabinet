<label class="input-wrap {{ !isset($fullwidth) ? 'input-wrap_half' : 'input-wrap_fullwidth' }}">
    <p class="input-annotation">{{ __('fields.' . $name) }}{!! isset($required) ? '<sup class="input-red">*</sup>' : '' !!}</p>
    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" class="input {{ $mask ?? '' }}" value="{{ old($name) }}" {{ isset($required) ? 'required' : '' }}>
    @error($name)
        <div class="message message_error">{{ $message }}</div>
    @enderror
</label>
