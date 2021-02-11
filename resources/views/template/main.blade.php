<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    @include('pages.header')
    @yield('content')
    @include('pages.footer')








    <link rel="stylesheet" href="{{asset("js/app.js")}}">
</body>
</html>