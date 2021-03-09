<!doctype html>
<html lang="ru">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.aside-main')
    <section class="wrapper">
        <div class="wrapper-inner">
            @include('layouts.header')
            @if(Route::currentRouteName() != 'main')
                <div class="content">
                    @yield('content')
                </div>
            @endif
        </div>
        @include('layouts.footer')
        <script src="/js/app.js"></script>
    </section>
</body>
</html>
