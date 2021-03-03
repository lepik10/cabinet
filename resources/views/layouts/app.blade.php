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
            @yield('content')
        </div>
    </div>
    @include('layouts.footer')
    <script src="/js/app.js"></script>
</section>
</body>
</html>
