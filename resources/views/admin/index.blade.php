@extends('admin.layouts.app')

@section('content')
<div class="users-wrapper main-form">
        <div class="container-fluid">
            <div class="table-scroll-x">
                <table class="table table-admin">
                    <tr>
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
                    @forelse($users as $user)
                        <x-admin.table-item :user="$user"></x-admin.table-item>
                    @empty
                        Пользователей нет
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
