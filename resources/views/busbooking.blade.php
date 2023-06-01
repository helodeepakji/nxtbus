<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alata&display=swap');

        .book {
            padding: 20px;
            font-family: 'Alata';
        }

        .book .ticket {
            max-width: 700px;
            margin: 50px auto;
            ;
            border: 4px solid #005079;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0px 8px 60px -10px #00507959;
        }

        .book .ticket .pass {
            width: 30%;
            background: #005079;
            padding: 10px;
            border-radius: 15px 0 0 15px;
            color: white;
        }

        .book .ticket .desti {
            width: 70%;
        }

        .book .ticket .desti .des,
        .book .ticket .desti .time {
            display: flex;
            margin: 15px 0;
            justify-content: space-around;
            align-items: center;
        }

        .book .icon i {
            font-size: 50px;
            color: #005079;
        }

        .text {
            margin: 15px 0;
        }

        .text h1 {
            font-size: 23px;
        }
    </style>
</head>

<body>
    @include('layout.navbar')
    <div class="book">
        @if ($data)
            @foreach ($data as $item)
                @php
                    $source = substr($item->source, strpos($item->source, ',') + 2);
                    $destination = substr($item->destination, strpos($item->destination, ',') + 2);
                @endphp
                <a href="/paymentstatus/{{ $item->order_id }}">
                    <div class="ticket">
                        <div class="pass">
                            <div class="text">
                                <p>Passenger Name</p>
                                <h1>{{ $item->name }}</h1>
                            </div>
                            <div class="text">
                                <p>Date</p>
                                <h1>{{ $item->booking_date }}</h1>
                            </div>
                            <div class="text">
                                <p>Order Id</p>
                                <h1>{{ $item->order_id }}</h1>
                            </div>
                        </div>
                        <div class="desti">
                            <div class="des">
                                <div class="text">
                                    <p>From</p>
                                    <h1>{{ $source }}</h1>
                                </div>
                                <div class="icon">
                                    <p style="opacity: 0"> NXTBUS </p>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                                <div class="text">
                                    <p>To</p>
                                    <h1>{{ $destination }}</h1>
                                </div>
                            </div>
                            <div class="time">
                                <div class="text">
                                    <p>Boarding Time</p>
                                    <h1>10:20am</h1>
                                </div>
                                <div class="text">
                                    <p>Depart Time</p>
                                    <h1>12:36pm</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        @else
            <div class="ticket" style="text-align: center;font-size:30px">
                <div class="pass">
                    <div class="text">
                        NO
                    </div>
                </div>
                <div class="desti">
                    <div class="text">
                        Booking
                    </div>
                </div>
            </div>
        @endif
    </div>
    @include('layout.footer')
</body>

</html>
