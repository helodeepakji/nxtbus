<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select Seat NXTBUS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <style>
        span.text-danger {
            color: red;
            text-align: center;
        }

        .area {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            font-size: 15px;
            background: #f3f3f3;
            padding: 20px;
        }

        .area i {
            font-size: 40px;
        }

        form {
            width: 100%;
        }

        li {
            list-style: none;
            cursor: pointer;
        }

        .sea {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .seaseat,
        .selector {
            width: 100%;
        }

        .selector {
            padding: 20px;
        }

        .seatbox {
            display: flex;
            justify-content: center;
            width: 430px;
            margin: 80px auto;
            border: 2px solid;
            border-radius: 30px;
            padding: 25px 0;
            background-color: #fff;
            box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%);
        }

        .seatbox .seatselect {
            /* display: flex;
            align-items: center; */
            justify-content: center;
        }

        .seatbox .seatselect .rseat {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .seat {
            display: flex;
            flex: 0 0 14.28571428571429%;
            padding: 5px;
        }

        .seat img {
            width: 50px;
        }

        .lseat,
        .rseat {
            display: flex;
            margin: 0 20px;

        }

        .rseat .row {
            display: flex;
        }

        .seat input[type=checkbox] {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }

        #clear,
        #next,
        #prev {
            width: 32%;
            border: none;
            height: 40px;
            background: #00396b;
            color: white;
            font-size: 20px;
        }

        button#clear {
            right: 440px;
        }

        button#prev {
            right: 230px;
            background: #813399;
        }

        .point {
            display: flex;
            padding: 5px;
        }

        .total h2,
        .return h2,
        .board h2 {
            padding: 10px;
            background: #005079;
            border-radius: 5px;
            margin: 25px auto;
            color: white;
            text-align: center;
        }

        .return input,
        .board input {
            margin-right: 15px;
        }

        @media (max-width: 600px) {
            .area {
                font-size: 12px;
            }

            .area i {
                font-size: 30px;
            }

            .seatbox {
                width: 350px;
                padding: 10px 0;
                border-radius: 20px;
            }

            .rcor img,
            .seat img {
                width: 40px;
            }


            .lseat,
            .rseat {
                display: flex;
                margin: 0 10px;
            }

            .sea {
                flex-direction: column;
            }
        }

        @media (max-width: 400px) {
            .seatbox {
                width: 99%;
            }

            .selector {
                padding: 0;
            }
        }
    </style>
</head>

<body>
    @include('layout.navbar')
    <div class="area">
        <h1>{{ $src }}</h1>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
        <h1>{{ $des }}</h1>
    </div>

    <form action="{{ url('/') }}/booking" method="post">
        @csrf
        <div class="sea">
            <div class="seaseat">
                <div class="seatbox">
                    <div class="upselect" style="display: flex;justify-content: center;">
                        <div class="lcor" style="width: 50%;"></div>
                        <div class="rcor">
                            <img src="https://d1flzashw70bti.cloudfront.net/original/images/icon-steering-wheel.svg"
                                width="50px" alt="">
                        </div>
                    </div>
                    <div class="seatselect">
                        <div class="lseat">
                            <li class="seat">
                                <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg" alt="">
                                </div>
                                <input type="checkbox" name="seat_list[]" value="A1">
                            </li>
                            <li class="seat">
                                <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg" alt="">
                                </div>
                                <input type="checkbox" name="seat_list[]" value="A2">
                            </li>
                            <li class="seat">
                                <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg" alt="">
                                </div>
                                <input type="checkbox" name="seat_list[]" value="A3">
                            </li>
                            <li class="seat">
                                <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg" alt="">
                                </div>
                                <input type="checkbox" name="seat_list[]" value="A4">
                            </li>
                            <li class="seat">
                                <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg" alt="">
                                </div>
                                <input type="checkbox" name="seat_list[]" value="A5">
                            </li>
                        </div>
                        <div class="rseat">
                            <div class="row">
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt="">
                                    </div>
                                    <input type="checkbox" name="seat_list[]" value="A6">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt="">
                                    </div>
                                    <input type="checkbox" name="seat_list[]" value="A7">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt="">
                                    </div>
                                    <input type="checkbox" name="seat_list[]" value="A8">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A9">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A10">
                                </li>
                            </div>
                            <div class="row">
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A11">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A12">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A13">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A14">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A15">
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="seatbox">
                    <div class="upselect" style="display: flex;justify-content: center;">
                        <div class="lcor" style="width: 50%;"></div>
                        <div class="rcor" style="width:50px">
                        </div>
                    </div>
                    <div class="seatselect">
                        <div class="lseat">
                            <li class="seat">
                                <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                        alt="">
                                </div>
                                <input type="checkbox" name="seat_list[]" value="A1">
                            </li>
                            <li class="seat">
                                <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                        alt="">
                                </div>
                                <input type="checkbox" name="seat_list[]" value="A2">
                            </li>
                            <li class="seat">
                                <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                        alt="">
                                </div>
                                <input type="checkbox" name="seat_list[]" value="A3">
                            </li>
                            <li class="seat">
                                <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                        alt="">
                                </div>
                                <input type="checkbox" name="seat_list[]" value="A4">
                            </li>
                            <li class="seat">
                                <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                        alt="">
                                </div>
                                <input type="checkbox" name="seat_list[]" value="A5">
                            </li>
                        </div>
                        <div class="rseat">
                            <div class="row">
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A6">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A7">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A8">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A9">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A10">
                                </li>
                            </div>
                            <div class="row">
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A11">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A12">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A13">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A14">
                                </li>
                                <li class="seat">
                                    <div class="chair"><img src="{{ url('/') }}/images/sleeperava.svg"
                                            alt=""></div>
                                    <input type="checkbox" name="seat_list[]" value="A15">
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="text-danger">
                @error('seat_list')
                    {{ $message }}
                @enderror
                </span>
            </div>
            <div class="selector">
                <div class="trav">
                    Bus Id : {{ $busid }}
                    <input type="hidden" name="busid" value="{{ $busid }}">
                    <input type="hidden" name="date" value="{{ $date }}">
                    <input type="hidden" name="source" value="{{ $src }}">
                    <input type="hidden" name="destination" value="{{ $des }}">
                    <div class="board">
                        <h2>Boarding Point</h2>
                        <div class="points">
                            <div class="point">
                                <input type="radio" name="bpoint" value="{{ $source1 }}">
                                <li>{{ $source1 }}</li>
                            </div>
                            <div class="point">
                                <input type="radio" name="bpoint" value="{{ $source2 }}">
                                <li>{{ $source2 }}</li>
                            </div>
                            <span class="text-danger">
                                @error('bpoint')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="return">
                        <h2>Drop Point</h2>
                        <div class="poits">
                            <div class="point">
                                <input type="radio" name="dpoint" value="{{ $destination1 }}">
                                <li>{{ $destination1 }}</li>
                            </div>
                            <div class="point">
                                <input type="radio" name="dpoint" value="{{ $destination2 }}">
                                <li>{{ $destination2 }}</li>
                            </div>
                            <span class="text-danger">
                                @error('dpoint')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <div class="total">
                    <h2>Selected Seats : </h2>
                    <div class="pointt" style="display:flex">
                        <li>Seat : </li>
                    </div>
                </div>
                <div class="pronxt" style="margin-top: 10px">
                    <button type="button" id="clear" onclick="window.location.reload();">Clear</button>
                    <a href="{{ URL::previous() }}">
                        <button type="button" id="prev">Previous</button></a>
                    <button type="submit" id="next">Next</button>
                </div>
            </div>
        </div>
    </form>
    @include('layout.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type='text/javascript'>
        var count = 1;
        $('img').click(function() {
            if (count <= 5) {
                $(this).closest('.seat').find('input[type="checkbox"]').click();
                var vale = $(this).closest('.seat').find('input[type="checkbox"]').val();
                if ($(this).attr("src") == "{{ url('/') }}/images/sleeperselect.svg") {
                    count = count - 1;
                    $(this).attr("src", "{{ url('/') }}/images/sleeperava.svg");
                    $("#" + vale).remove();
                } else {
                    count = count + 1;
                    $(this).attr("src", "{{ url('/') }}/images/sleeperselect.svg");
                    $(".pointt").append('<li id="' + vale + '" style="margin-left:10px">Seat : ' + vale + '</li>');
                }
            } else {
                alert("Only 5 seat is book");
            }
        });

        $('.point li').click(function() {
            $(this).closest('.point').find('input[type="radio"]').click();
        });
    </script>
</body>

</html>
