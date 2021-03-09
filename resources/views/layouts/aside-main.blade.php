<section class="main-aside">
    <div class="main-aside__logo">
        <a href="/" class="main-aside__logo-link">
            <img src="/images/brand-sign.svg" alt="logo">
            <p class="main-aside__logo-text">СРЕДНЕВОЛЖСКАЯ<br>ГАЗОВАЯ<br>КОМПАНИЯ</p>
        </a>
    </div>
    <nav class="main-aside__menu">
        <ul class="main-aside__menu-wrap">
            @if (Str::startsWith(Route::currentRouteName(), 'cabinet'))
                <li class="main-aside__menu-item"><a href="{{ route('cabinet.index') }}" class="main-aside__menu-link">История</a></li>
                <li class="main-aside__menu-item"><a href="{{ route('cabinet.info') }}" class="main-aside__menu-link">Реквизиты</a></li>
                <li class="main-aside__menu-item"><a href="/" class="main-aside__menu-link">Запросы</a></li>
                <li class="main-aside__menu-item"><a href="/" class="main-aside__menu-link">Договор о подключении</a></li>
            @else
                <li class="main-aside__menu-item"><a href="{{ route('user.login') }}" class="main-aside__menu-link">Для физических лиц</a></li>
                <li class="main-aside__menu-item"><a href="{{ route('user.login', 'ur') }}" class="main-aside__menu-link">Для юридических лиц</a></li>
                <li class="main-aside__menu-item"><a href="/" class="main-aside__menu-link">Помощь</a></li>
                <li class="main-aside__menu-item"><a href="/" class="main-aside__menu-link">Контакты</a></li>
            @endif
        </ul>
    </nav>
</section>
