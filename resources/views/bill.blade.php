<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <title>Document</title>
</head>

<body>
    @include('layout.navbar')
    <h1 style="text-align: center;margin:50px 0 0;">Bus Ticket</h1>
    @include('layout.ticket')
    @php
        $holiday = 'special';
    @endphp
    @include('layout.holiday')
    @include('layout.policy')
    @include('layout.footer')
</body>

</html>
