<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('require.style')
</head>
<body>
    @include('require.header') 

    
    @yield('containt')

    @include('require.footer')
    @include('require.js')
</body>
</html>