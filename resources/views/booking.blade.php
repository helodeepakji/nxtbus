<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bus Booking Details</title>
    <style>
        a {
            text-decoration: none;
        }

        form {
            padding: 4em 10%;
        }

        .head{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 40px 0;
        }

        .grid {
            background: white;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
        }

        h2.heading {
            font-size: 18px;
            text-transform: uppercase;
            font-weight: 300;
            text-align: left;
            color: #506982;
            border-bottom: 1px solid #506982;
            padding-bottom: 3px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            width: 100%;
        }


        .col-1-3 {
            width: 31.33%;
        }

        .controls input,
        .controls select {
            padding: 12px;
            font-size: 14px;
            border: 1px solid #c6c6c6;
            width: 100%;
            margin-bottom: 18px;
            color: #888;
            font-family: 'Lato', 'sans-serif';
            font-size: 16px;
            font-weight: 300;
            border-radius: 2px;
            transition: all .3s;
        }

        .controls input[type="text"]:focus,
        .controls input[type="text"]:hover {
            outline: none;
            border-color: #9FB1C1;
        }

        button {
            cursor: pointer;
            background-color: #1b3d4d;
            border: none;
            color: #fff;
            padding: 12px 0;
            float: right;
        }

        input#phone,
        input#state,
        input#pincode {
            width: 92%;
        }

        button:hover {
            background-color: rgb(0, 0, 0);
        }

        @media (max-width: 450px) {
            .grid {
                flex-direction: column;
                align-items: flex-start;
            }

            .head{
                font-size: 10px;
            }

            .head img{
                width: 55px;
            }

            input#phone,
            input#state,
            .controls input,
            input#pincode {
                width: 92%;
            }
        }
    </style>
</head>

<body>
    @include('layout.navbar')
    <style>
       

        .col-2-3 {
            width: 65.66%;
        }

        .col-1-2 {
            width: 50%;
        }

        .col-1-4 {
            width: 25%;
        }

        @media (max-width: 950px) {

            form {
                padding: 3em 5%;
            }

            .col-1-4-sm,
            .col-1-3,
            .col-2-3 {
                width: 100%;
            }
        }
    </style>
    <form action="/payment" method="post">
        @csrf
        <input type="hidden" name="jurdate" value="{{$request->date}}">
        <div class="head">
            <h1>{{$request->source}}</h1>
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <img src="{{url('/')}}/images/logo1.png" width="100px" alt="">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <h1>{{$request->destination}}</h1>
            <input type="hidden" value="{{$request->bpoint}}" name="bpoint">
            <input type="hidden" value="{{$request->dpoint}}" name="dpoint">
            <input type="hidden" value="{{$request->source}}" name="source">
            <input type="hidden" value="{{$request->destination}}" name="destination">
            <input type="hidden" value="{{$request->busid}}" name="busid">
        </div>
        <div class="form-group">
            @php
                $i = 0;
            @endphp
            @foreach ($request->seat_list as $item)
                <h2 class="heading">Person {{$i+1}}</h2>
                <div class="grid">
                    <div class="col-1-3">
                        <div class="controls">
                            <label for="Name">Name</label>
                            <input type="text" id="name" name="name{{$i}}" required>
                            <input type="hidden" name="seat{{$i}}" value="{{$item}}">
                        </div>
                    </div>
                    <div class="col-1-3">
                        <div class="controls">
                            <label for="Age">Age</label>
                            <input type="number" id="age" name="age{{$i}}" required>
                        </div>
                    </div>
                    <div class="col-1-3">
                        <div class="controls">
                            <label for="Gender">Gender</label>
                            <select name="gender{{$i}}">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                @php
                    $i++;
                @endphp
            @endforeach
            <h2 class="heading">Contact</h2>
            <div class="grid">
                <div class="col-2-3">
                    <div class="controls">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" required>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="controls">
                        <label for="phone">Phone no</label>
                        <input type="number" id="phone" name="phone" required>
                    </div>
                </div>
            </div>
            <h2 class="heading">Booking Address</h2>
            <div class="grid">
                <div class="col-1-3">
                    <div class="controls">
                        <label for="area">Area</label>
                        <input type="text" id="area" name="area" required>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="controls">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" required>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="controls">
                        <label for="state">State</label>
                        <input type="text" id="state" name="state" required>
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="col-2-3">
                    <div class="controls">
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country" required>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="controls">
                        <label for="pincode">Pincode</label>
                        <input type="text" id="pincode" name="pincode" required>
                    </div>
                </div>
            </div>
            <div class="grid">
                <button type="submit" value="Submit" class="col-1-4">Submit</button>
            </div>
            <input type="hidden" name="member" value="{{$i}}">
        </div> <!-- /.form-group -->
    </form>
    @include('layout.footer')
</body>

</html>
