<!DOCTYPE html>
<html lang="en">
<head>
<title > App Name - @yield('title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@section('navbar')
@include('includes.navbar')
<div class="cont">
@yield('content')
</div>
</body>
</html>