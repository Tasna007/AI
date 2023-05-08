<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('Title')</title>
    @yield('Import')
</head>
<body class="page">
    @yield('SideBar')
    @yield('Content')
    @yield('Script')
</body>
</html>
