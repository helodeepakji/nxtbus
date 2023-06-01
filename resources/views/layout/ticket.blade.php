<style>
    @import url("https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&display=swap");

    * {
        margin: 0;
        padding: 0;
    }

    body,
    html {
        background: #eaebef;
    }

    .ticket {
        margin: 50px auto;
        max-width: 800px;
        font-family: "IBM Plex Sans", sans-serif;
        background-color: #fff;
        border-radius: 0.5em;
        box-shadow: 0 0 10px #bdbcbc;
    }

    .ticket .airline {
        max-width: 414px;
        background: #ffffff;
        box-sizing: border-box;
        width: 100%;
        height: 736px;
        border-radius: 30px;
        -webkit-box-shadow: 2px 2px 40px #d6d6d6;
        box-shadow: 2px 2px 40px #d6d6d6;
        padding-top: 0;
    }

    .ticket-inner {
        padding: 15px 25px;
        background: #fff;
        border-radius: 6px;
    }

    .route {
        display: flex;
        font-weight: 600;
        color: #121212;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin: 20px 0;
    }


    .route p span:first-child {
        font-size: 40px;
        font-weight: 700;
        color: #121212;
    }


    .route p {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;

    }

    .route p span:last-child {
        font-size: 15px;
        font-weight: 300;
    }

    .route p :first-child span:last-child {
        text-align: left;
    }

    .time {
        display: -webkit-box;
        display: -ms-flexbox;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        display: flex;
        justify-content: space-between;
        border-top: 1px dashed #cdcdcd;
        padding: 15px 0;
    }

    .time .board {
        width: 50%;
        padding: 10px;
        border-left: 1px dashed #cdcdcd;
        border-right: 1px dashed #cdcdcd;
    }

    .time .board p:first-child {
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        font-size: 14px;
        text-align: left;
        color: #777676;
        margin-bottom: 15px;
    }

    .time .board p {
        color: black;
        text-align: right;
        margin-bottom: 10px;
    }

    .time .board span {
        text-align: right
    }

    .flight p:first-child,
    .flight p:nth-child(2) {
        margin-top: 0;
    }

    .flight p span {
        text-align: right;
    }

    .flight p span:first-child {
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        font-size: 14px;
        text-align: left;
        color: #777676;
    }

    .flight p {

        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 50%;
        margin: 20px 0 0;

    }

    .flight {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
        justify-content: space-evenly;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .time p span:first-child {
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        font-size: 14px;
        color: #777676;
    }

    .title {
        display: -webkit-box;
        display: -ms-flexbox;
        background: #f5f5f5;
        padding: 20px 15px;
        border-radius: 20px 20px 0 0;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .title svg {
        height: 24px;
        -webkit-transform: scaleX(-1);
        -ms-transform: scaleX(-1);
        transform: scaleX(-1);
        width: 24px;
        margin-left: 10px;
        margin-right: 30px;
    }

    .title span {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        font-size: 18px;
        font-weight: 400;
        color: #191919;
    }

    .ticket-inner .image {
        height: 100px;
        width: 100%;
        overflow: hidden;
        margin-top: 20px;
        border-top: 1px dashed #cdcdcd;
        padding-top: 20px;
    }

    .ticket-inner .image img {
        height: 100%;
        width: 100%;
        -o-object-fit: inherit;
        object-fit: inherit;
        -webkit-transform: scale(1.5);
        -ms-transform: scale(1.5);
        transform: scale(1.5);
        border-top: 1px dashed #000;
        padding-top: 20px;
    }

    .title span.share-icon {
        margin-left: auto;
        -webkit-transform: scaleX(-1);
        -ms-transform: scaleX(-1);
        transform: scaleX(-1);
    }

    .title span .share-icon svg {
        height: 20px;
        width: 20px;
        fill: #121212;
    }

    .ticket-inner .cta {
        margin-top: auto;
        bottom: 20px;
        position: relative;
    }

    .ticket-inner .cta a {
        padding: 16px 20px;
        background: #1976d2;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #fff;
        text-decoration: none;
        font-size: 18px;
        font-weight: 500;
        border-radius: 3px;
    }

    .ticket-inner .cta a .pdf-icon {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-right: 10px;
    }

    .ticket-inner .cta a .pdf-icon svg {
        height: 20px;
        fill: #fff;
    }

    .shell {
        padding-top: 20px;
        background: #e1e1e1;
        margin-top: 20px;
    }

    .roow {
        display: flex;
        justify-content: space-between;
    }

    @media (max-width: 600px) {
        .ticket-inner {
            padding: 10px;
        }

        .route p span:first-child {
            font-size: 18px;
        }

        .route p span:last-child {
            font-size: 10px;
        }

        .time .board p,
        .time .board p:first-child {
            font-size: 12px;
        }
    }
</style>
@php
echo '<pre>';
// print_r($data);
$end = json_decode(base64_decode($data[0]->person));
echo '</pre>';
$source = substr($data[0]->source, strpos($data[0]->source, ',') + 2);
$destination = substr($data[0]->destination, strpos($data[0]->destination, ',') + 2);
$source1 = substr($data[0]->source, 0, strpos($data[0]->source, ','));
$destination1 = substr($data[0]->destination, 0, strpos($data[0]->destination, ','));
@endphp
<div class="ticket airline" style="background-color: #fff;">
    <div class="ticket-inner">

        <div class="route" style="display: flex;justify-content: space-between;align-items: center;">
            <p style="width: 100%;">
                <span>{{ $source }}</span><br>
                <span>{{ $source1 }}</span>
            </p>
            <div class="logo">
                <img src="https://nxttour.in/nxtbus.png" width="80px" alt="">
            </div>
            <p style="width: 100%;text-align: right;">
                <span>{{ $destination }}</span><br>
                <span>{{ $destination1 }}</span>
            </p>
        </div>
        <div class="time" style="display:flex;border-top: 1px dashed #cdcdcd;border-bottom: 1px dashed #cdcdcd;">
            <div class="board" style="width: 50%;padding: 10px;border-left: 1px dashed #cdcdcd;border-right: 1px dashed #cdcdcd;">
                <p>Booking Id</p>
                <p>{{ $data[0]->order_id }}</p>
            </div>
            <div class="board" style="width: 50%;padding: 10px;border-left: 1px dashed #cdcdcd;border-right: 1px dashed #cdcdcd;">
                <p>Booking Date</p>
                <p>{{ $data[0]->booking_date }}</p>
            </div>
        </div>
        <div class="time" style="display:flex;border-bottom: 1px dashed #cdcdcd;">
            <div class="board" style="width: 50%;padding: 10px;border-left: 1px dashed #cdcdcd;border-right: 1px dashed #cdcdcd;">
                <p>Board Point</p>
                <p>10:25 a.m</p>
            </div>
            <div class="board" style="width: 50%;padding: 10px;border-left: 1px dashed #cdcdcd;border-right: 1px dashed #cdcdcd;">
                <p>Depart point</p>
                <p>1:05 p.m</p>
            </div>
        </div>
        <div class="time" style="display:flex;border-bottom: 1px dashed #cdcdcd;">
            <div class="board" style="width: 50%;padding: 10px;border-left: 1px dashed #cdcdcd;border-right: 1px dashed #cdcdcd;">
                <p>Transaction No</p>
                <p>{{ $data[0]->payment_id }}</p>
            </div>
            <div class="board" style="width: 50%;padding: 10px;border-left: 1px dashed #cdcdcd;border-right: 1px dashed #cdcdcd;">
                <p>Status</p>
                @if ($data[0]->status == 'Success')
                    <p>SUCCESS</p>
                @else
                    <p>Failed</p>
                @endif
            </div>
        </div>
        <div class="time" style="display:flex;border-bottom: 1px dashed #cdcdcd;">
            <div class="board" style="width: 50%;padding: 10px;border-left: 1px dashed #cdcdcd;border-right: 1px dashed #cdcdcd;">
                <p>Passenger</p>
                @foreach ($end as $item)
                    <p>{{ $item->name }}</p>
                @endforeach
            </div>
            <div class="board" style="width: 50%;padding: 10px;border-left: 1px dashed #cdcdcd;border-right: 1px dashed #cdcdcd;">
                <p>Seat No</p>
                @foreach ($end as $item)
                    <p>{{ $item->seat }}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>