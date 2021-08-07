<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<style>
    .header {
        height: 200px;
        width: 100%;
        background-color: bisque;
    }
    .footer {
        height: 150px;
        width: 100%;
        background-color: #e2e8f0;
    }
    .left-menu {
        float: left;
        width: 20%;
        background-color: green;
    }
    .clear-both{
        clear: both;
    }
    .content {
        width: 80%;

    }
</style>
</head>
<body>
<div class="header">
    <h1>This is header</h1>
</div>
<div class="main-content">
    <div class="left-menu">
        <ul>
            <li>Link 1</li>
            <li>Link 2</li>
            <li>Link 3</li>
        </ul>
    </div>
    <div class="content">
        @yield('content')
    </div>
</div>
<div class="clear-both"></div>
<div class="footer">This is footer</div>
@yield('js')
</body>
</html>
