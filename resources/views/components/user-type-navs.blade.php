<div class="user-type-navs">
    <a href="{{ route('user.registration', 'ur') }}" class="user-type-navs__item {{isset($type) ? '' : 'user-type-navs__item_active'}}">ООО, ОАО, ЗАО</a>
    <a href="{{ route('user.registration', 'ip') }}" class="user-type-navs__item {{isset($type) ? 'user-type-navs__item_active' : ''}}">ИП</a>
</div>
