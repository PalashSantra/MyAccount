<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>My Accounting</title>
  </head>
  <body class="app sidebar-mini rtl">
    @yield('top-bar')
    @yield('left-bar')
    @yield('content')
    @yield('js-section')
  </body>
</html>