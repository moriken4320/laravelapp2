<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        body {font-size: 16pt; color: #999;}
        h1 {font-size: 120pt; text-align: right; color: #fafafa; margin: -50px 0px -120px 0px;}
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2>メニュー</h2>
    <ul>
        <li>
            @show
        </li>
    </ul>
    <hr size="1">
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
</body>
</html>
