<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <title>NXTBUS | Bus booking service by NXTTOUR INDIA</title>
</head>

<body>
    @include('layout.navbar')
    @include('layout.busbook')
    <style>
        .shell {
            padding-top: 20px;
            background: #e1e1e1;
            margin-top: 20px;
        }

        .roow {
            display: flex;
            justify-content: space-between;
        }
    </style>
    @php
        $holiday = 'special';
    @endphp
    @include('layout.holiday')
    @include('layout.policy')
    @include('layout.footer')
</body>

</html>
