<header class="header">
    <div class="header__text">Миссия компании — безопасное и бесперебойное газоснабжение потребителей</div>
    <div class="header__info">
        <div class="header__cabinet">
            <a href="{{ route('cabinet.index') }}" class="header__cabinet-link">
                @auth
                    {{ Auth::user()->name }}
                @endauth
                @guest
                    Личный кабинет
                @endguest
                <img class="header__cabinet-icon" src="/images/icons/user.svg" alt="Личный кабинет">
                @auth
                    <a href="{{ route('user.logout') }}" class="header__exit">Выход</a>
                @endauth
            </a>
        </div>
    </div>
</header>

