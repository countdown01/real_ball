<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body class="w-full text-center text-white h-screen flex gap-x-20 items-center justify-center">

<a href="{{route('relationship')}}" class="bg-red-500 w-20 py-2 h-12 ">relationship</a>
<a href="{{route('conctus')}}" class="bg-red-500 w-20 h-12">conctus</a>
<a href="{{route('ipserver')}}" class="bg-red-500 w-20 h-12">ipserver</a>
<a href="{{route('login')}}" class="bg-red-500 w-20 h-12">login</a>


</body>
</html>
