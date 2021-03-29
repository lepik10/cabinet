<!doctype html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>
<body>
<div class="container-admin">
    <form method="POST" action="{{ route('admin.login.check') }}">
        @csrf
        <div class="container main-form">
            <div class="form-group">
                <label for="exampleInputEmail1">Логин</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Логин">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Пароль">
            </div>
            <button type="submit" class="btn btn-primary">Войти</button>
        </div>
    </form>
</div>
</body>
</html>
