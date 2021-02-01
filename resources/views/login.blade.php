<!doctype html>
<html lang="ru">
<head>
    @include('layouts.head')
</head>
<body>
@include('layouts.main-aside')
<section class="wrapper">
    <div class="wrapper-inner">
        @include('layouts.header')
        <div class="content">
            <div class="login-form">
                <p class="login-form__title">Вход для частных лиц</p>
                <p class="login-form__text">Пожалуйста, авторизуйтесь</p>
                <form action="" class="login-form__form">
                    <label class="input-wrap">
                        <p class="input-annotation">Логин<sup class="input-red">*</sup></p>
                        <input type="text" class="input" placeholder="Введите ваш логин" required>
                    </label>
                    <label class="input-wrap">
                        <p class="input-annotation">Пароль<sup class="input-red">*</sup></p>
                        <input type="password" class="input" placeholder="Введите ваш логин" required>
                    </label>
                    <input type="submit" class="button button_blue button_fullwidth" value="Войти">
                </form>
                <div class="login-form__bottom">
                    <div class="login-form__link-wrap login-form__link-wrap_border">
                        <a href="/" class="login-form__link">Забыли свой пароль?</a>
                    </div>
                    <div class="login-form__link-wrap">
                        <a href="/" class="login-form__link">Регистрация</a>
                        <img class="login-form__icon" src="/images/icons/user-blue.svg" alt="Регистрация">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</section>
</body>
</html>
