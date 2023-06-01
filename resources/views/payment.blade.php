<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NXTBUS PAYMENT SEAT BUS</title>
</head>

<body>
    @php
        $sat = json_decode(base64_decode($data[0]->person)); 
        $apiKey = 'rzp_test_R77KBY8vsfVFYg';
        $TXN_AMOUNT = 120;
    @endphp

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <center>
        <h1>Please do not refresh this page...</h1>
    </center>

    <form style="display:none;" action="{{url('/')}}/paymentstatus" method="POST">
        @csrf
        <script src="https://checkout.razorpay.com/v1/checkout.js" 
        data-key="<?php echo $apiKey; ?>"
        data-amount="<?php echo $TXN_AMOUNT * 100; ?>" data-currency="INR" data-id="{{$data[0]->order_id}}"
        data-buttontext="Pay with Razorpay" data-name="NXTBUS"
        data-description="Best Tour and holiday packages in cheapest Price!"
        data-image="https://nxttour.in/nxtbus.png" 
        data-prefill.name="{{$sat[0]->name}}"
        data-prefill.email="{{$data[0]->email}}" 
        data-prefill.contact="{{$data[0]->phone}}"
        data-theme.color="#005079">
        </script>
        <input type="hidden" name="orderid" value="{{$data[0]->order_id}}" readonly>
        <input type="hidden" name="username" value="{{$data[0]->username}}" readonly>
        <input type="hidden" name="phone" value="{{$data[0]->phone}}" readonly>
        <input type="hidden" name="sno" value="{{$data[0]->sno}}" readonly>
        <input type="hidden" name="amount" value="{{$TXN_AMOUNT}}" readonly>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        window.onload = function() {
            $(".razorpay-payment-button").click();
        }
    </script>
</body>

</html>
