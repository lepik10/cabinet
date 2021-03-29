@extends('admin.layouts.app')

@section('content')
<div class="admin-edit-page">
    <div class="col-sm-3">
        <div class="admin-aside">
            <a href="#history">История сообщений</a>
            <a href="#requests">Запросы</a>
            <a href="#profile">Личная информация</a>
        </div>
    </div>
    <div class="col-sm-9">
        <div id="history" class="admin-messages-wrap">
            <h1>История Сообщений</h1>
            <div class="admin-messages">
                <div class="alert alert-warning">
                    <div class="alert-content">
                        <h3>Форма: Заявление на подготовку расчета планируемого максимального часового расхода газа</h3>
                        Данные изменены
                    </div>
                    <div class="date">
                        <div class="nowrap">2020-11-16</div>
                        <div class="nowrap">10:45:04</div>
                    </div>

                </div>

                <div class="alert alert-success">
                    <div class="alert-content">
                        pdakjfksdjfis
                    </div>
                    <div class="date">
                        <div class="nowrap">2020-11-16</div>
                        <div class="nowrap">10:50:16</div>
                    </div>
                </div>

                <div class="alert alert-warning">
                    <div class="alert-content">
                        <h3>Форма: Запрос о предварительном размере платы за подключение</h3>
                        Данные изменены
                    </div>
                    <div class="date">
                        <div class="nowrap">2020-11-16</div>
                        <div class="nowrap">10:53:24</div>
                    </div>

                </div>

            </div>

            <form class="message-form" method="post" action=" http://svgk.teamaa.ru/admin/users-fiz/3/add-message   ">
                <input type="hidden" name="_token" value="UlA7flguBDlCjYhRcmc9Hthtpz57k1a5urzy9Z75">                <textarea name="body"></textarea>
                <input type="submit" class="btn button-blue" value="Отправить">
            </form>
        </div>


        <h1 id="requests">Запросы</h1>
        <div class="requests-table-wrap">
            <table class="table requests-table">
                <tbody><tr>
                    <td>
                        <a href="/admin/users-fiz/3/requests/1">Заявление на подготовку расчета планируемого максимального часового расхода газа</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-success">Принято</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Заявление на выдачу технических условий
                    </td>
                    <td>
                        <a href="#" class="btn btn-secondary">Не заполнено</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="/admin/users-fiz/3/requests/3">Запрос о предварительном размере платы за подключение</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-success">Принято</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Заявка о подключении
                    </td>
                    <td>
                        <a href="#" class="btn btn-secondary">Не заполнено</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Заявление о предоставлении дополнительных документов к договору о подключении
                    </td>
                    <td>
                        <a href="#" class="btn btn-secondary">Не заполнено</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Подать запрос о внесении изменений в договор о подключении
                    </td>
                    <td>
                        <a href="#" class="btn btn-secondary">Не заполнено</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Прочие запросы
                    </td>
                    <td>
                        <a href="#" class="btn btn-secondary">Не заполнено</a>
                    </td>
                </tr>
                </tbody></table>
        </div>
        <h1 id="profile">Личная информация</h1>
        <div class="admin-profile">
            <div class="card-block row">
                <div class="col-lg-6 title">
                    {{ $user->name }}
                </div>
            </div>
            @switch($user->role_id)
                @case(3)
                @include('forms._fiz')
                @break
                @case(4)
                @include('forms._ur')
                @break
                @case(5)
                @include('forms._ip')
                @break
            @endswitch
            <fieldset class="form-group card-block">
                <form method="POST" action="{{ route('admin.activate', $user->id) }}">
                    @csrf
                    <button type="submit" class="btn button-blue">{{ $user->status == 1 ? 'Деактивировать пользователя' : 'Активировать пользователя' }}</button>
                </form>
            </fieldset>
        </div>
        <div id="modal">
            <p class="title">Замечания</p>
            <form method="post">
                <textarea name="body" id=""></textarea>
                <input type="submit" class="btn btn-success" value="Отправить">
            </form>
        </div>
    </div>
</div>
@endsection
