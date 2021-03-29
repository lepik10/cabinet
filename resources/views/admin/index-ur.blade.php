@extends('admin.layouts.app')

@section('content')
<div class="users-wrapper main-form">
    <div class="container-fluid">
        <div class="table-scroll-x">
            <table class="table table-admin">
                <tbody><tr>
                    <th>Имя</th>
                    <th>id</th>
                    <th>Дата</th>
                    <th>Статус</th>
                    <th>ЦТП</th>
                    <th>Прогресс</th>
                    <th>Сообщения</th>
                    <th>Ответственный</th>
                    <th>Зарегистрирован</th>
                </tr>
                @forelse($users_ur as $user)
                    <x-admin.table-item :user="$user"></x-admin.table-item>
                @empty
                    Пользователей нет
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <h2>Индивидуальные предприниматели</h2>
    <div class="container-fluid">
        <div class="table-scroll-x">
            <table class="table table-admin">
                <tbody><tr>
                    <th>Имя</th>
                    <th>id</th>
                    <th>Дата</th>
                    <th>Статус</th>
                    <th>ЦТП</th>
                    <th>Прогресс</th>
                    <th>Сообщения</th>
                    <th>Ответственный</th>
                    <th>Зарегистрирован</th>
                </tr>
                @forelse($users_ip as $user)
                    <x-admin.table-item :user="$user"></x-admin.table-item>
                @empty
                    Пользователей нет
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
