<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('css/app.css')}}">
    <title>Reservation_Hotel</title>
</head>
<body>
    @include('includes.navbar')
    <div class="container">
       @yield('title')
       @yield('content') 
    </div>   
<script src="{{Asset('js/app.js')}}"></script>
</body>
</html>