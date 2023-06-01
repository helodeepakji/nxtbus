<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<style>
    .ui-widget-header {
        border: 1px solid #000000;
        background: #005079;
        color: #ffffff;
        font-weight: bold;
    }

    .ui-state-highlight,
    .ui-widget-content .ui-state-highlight,
    .ui-widget-header .ui-state-highlight {
        border: 1px solid #000000;
        background: #0a9cfc9c;
        color: #363636;
    }

    body {
        background: #f4f4f4;
    }

    .forma {
        background: #00000008;
    }

    .forma form {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        width: 750px;
        padding: 20px;
        margin: auto;
        border-radius: 20px;
    }

    .mainbox {
        display: flex;
        justify-content: center;
    }

    .bus {
        width: 70%;
        border-left: 2px solid #005079;
        border-right: 2px solid #005079;
    }

    .busTile {
        background-color: #fff;
        width: 700px;
        height: fit-content;
        border-radius: 15px;
        padding: 15px 25px;
        border: 0.5px solid rgb(0 80 121 / 71%);
        margin: 50px auto;
        box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%);
    }

    .bConta {
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding: 10px 0 15px;
    }

    input[type="text"] {
        height: 30px;
        display: inline-block;
        text-align: left;
        padding: 5px 12px;
        margin: 0 7px;
        border: 1px solid rgba(123, 42, 255, 0.25);
        border-radius: 15px;
        box-shadow: 0 5px 20px rgb(0 0 0 / 4%);
        vertical-align: middle;
    }

    .col1,
    .col2,
    .col3 {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
    }

    .actc {
        border-top: 1px solid #f6f6f6;
        padding: 15px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }


    .col3 {
        align-items: flex-end;
    }

    .cRow {
        display: flex;
        align-items: center;
        justify-content: space-around;
        width: 100%;
        padding-bottom: 15px;
    }

    .seatava,
    .price {
        display: flex;
        margin-bottom: 5px;
        padding: 5px;
    }

    .arrow,
    .stat,
    .ennd {
        margin: 0 15px;
    }

    .butt button {
        border: none;
        padding: 10px 30px;
        background: #005079;
        border-radius: 20px;
        color: white;
        cursor: pointer;
        margin: 15px 0;
        font-size: 18px;
        border: 2px solid #005079;
    }

    .btnseat:hover,
    .butt button:hover {
        border: 2px solid #005079;
        background: white;
        color: black;
    }

    .btnseat {
        color: white;
        background: #005079;
        padding: 7px 10px;
        font-size: 15px;
        border-radius: 15px;
        cursor: pointer;
        border: 2px solid #005079;
    }

    .groupbtn {
        display: flex;
    }

    .groupbtn p {
        font-size: 10px;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .deslist,
    .surlist {
        position: absolute;
        z-index: 1;
        background: #fff;
        box-shadow: 0 0px 4px 0px #b5b3b3;
        text-align: left;
    }

    .deslist p,
    .surlist p {
        font-family: "Sofia-ProSoft-Regular";
        font-size: 15px;
        padding: 5px 10px 5px 10px;
        cursor: pointer;
    }


    @media (max-width: 800px) {

        .forma form {
            justify-content: center;
            width: 90%;
            margin: auto;
            margin-bottom: 0;
        }

        input[type="text"] {
            width: 75%;
        }

        .butt button {
            padding: 10px 15px;
            font-size: 13px;
        }

        .mainbox .busTile {
            width: 90%;
        }
    }

    @media (max-width: 650px) {

        .forma form {
            width: 97%;
            padding: 10px 0px;
        }

        input[type="text"] {
            width: 70%;
            margin: 0;
            padding: 2px 10px;
        }

        .mainbox {
            padding: 0;
        }

        .mainbox .busTile {
            width: 95%;
            padding: 15px 5px;
            overflow: hidden;
        }

        .btnseat {
            padding: 5px 10px;
            font-size: 10px;
        }

        .col3 {
            width: 70%;
            font-size: 11px;
        }

        .col2 {
            width: 130%;
            font-size: 10px;
        }

    }
</style>
<div class="forma">
    <form action="/buslist" method="get">
        <div class="source">
            <input id="source" type="text" value="{{ $src }}" name="srce" autocomplete="off">
            <div class="surlist">
            </div>
        </div>
        <div class="interchange___qnhw4" onclick="switchfn()" style="cursor: pointer;"><img
                src="https://d1flzashw70bti.cloudfront.net/original/images/interchange.svg"></div>
        <div class="destination">
            <input id="destination" type="text" value="{{ $desc }}" name="destination" autocomplete="off">
            <div class="deslist">
            </div>
        </div>
        <div class="date">
            <input type="text" value="{{ $date }}" name="date" id="datepicker"
                onclick="setDatepicker(this)" autocomplete="off">
        </div>
        <div class="butt">
            <button type="submit">Search</button>
        </div>
    </form>
</div>
<hr>
<div class="mainbox">
    <div class="holiday">
        @php
            $holiday = strtolower(substr($desc, strpos($desc, " ") + 1));
            $busdesc = substr($desc,0,strpos($desc, ","));
            $bussrc = substr($src,0,strpos($src, ","));
        @endphp
        @include('layout.holiday')
    </div>
    <div class="bus">
        <div class="bigo">
            <div class="hdt">
                <h1>Best Bus for you</h1>
                <div class="line"></div>
            </div>
        </div>
        <div class="busTile">
            <div class="bConta">
                <div class="col1">
                    <div>Volvo AC Bus</div>
                    <div class="groupbtn">
                        <div class="fach">
                            <p>Wifi</p>
                            <i class="fa fa-wifi" aria-hidden="true"></i>
                        </div>
                        <div class="fach">
                            <p>AC</p>
                            <i class="fas fa-thermometer-quarter"></i>
                        </div>
                        <div class="fach">
                            <p>Sleeper</p>
                            <i class="fas fa-bed"></i>
                        </div>
                        <div class="fach">
                            <p>Security</p>
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="cRow">
                        <div class="startym">5:55PM</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="dittym">3h 40m</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="endtym">9:35PM</div>
                    </div>
                    <div class="cRow">
                        <div class="startym">{{ $bussrc }}</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="endtym">{{ $busdesc }}</div>
                    </div>
                </div>
                <div class="col3">
                    <div class="price">
                        <div class="priceText___3AUPT" style="margin-right:10px">₹429</div>
                        <div class="priceSubText___2tPZY">₹479</div>
                    </div>
                    <div class="seatava">5 Seats left</div>
                    <div class="buttonContainer___3BbhF"><a href="/seatselect?src={{$bussrc}}&des={{$busdesc}}&date={{$date}}&busid=1"><button class="btnseat">Select Seat</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="busTile">
            <div class="bConta">
                <div class="col1">
                    <div>Volvo AC Bus</div>
                    <div class="groupbtn">
                        <div class="fach">
                            <p>Wifi</p>
                            <i class="fa fa-wifi" aria-hidden="true"></i>
                        </div>
                        <div class="fach">
                            <p>AC</p>
                            <i class="fas fa-thermometer-quarter"></i>
                        </div>
                        <div class="fach">
                            <p>Sleeper</p>
                            <i class="fas fa-bed"></i>
                        </div>
                        <div class="fach">
                            <p>Security</p>
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="cRow">
                        <div class="startym">5:55PM</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="dittym">3h 40m</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="endtym">9:35PM</div>
                    </div>
                    <div class="cRow">
                        <div class="startym">{{ $bussrc }}</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="endtym">{{ $busdesc }}</div>
                    </div>
                </div>
                <div class="col3">
                    <div class="price">
                        <div class="priceText___3AUPT" style="margin-right:10px">₹429</div>
                        <div class="priceSubText___2tPZY">₹479</div>
                    </div>
                    <div class="seatava">5 Seats left</div>
                    <div class="buttonContainer___3BbhF"><a href="/seatselect?src={{$bussrc}}&des={{$busdesc}}&date={{$date}}&busid=2"><button class="btnseat">Select Seat</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="busTile">
            <div class="bConta">
                <div class="col1">
                    <div>Volvo AC Bus</div>
                    <div class="groupbtn">
                        <div class="fach">
                            <p>Wifi</p>
                            <i class="fa fa-wifi" aria-hidden="true"></i>
                        </div>
                        <div class="fach">
                            <p>AC</p>
                            <i class="fas fa-thermometer-quarter"></i>
                        </div>
                        <div class="fach">
                            <p>Sleeper</p>
                            <i class="fas fa-bed"></i>
                        </div>
                        <div class="fach">
                            <p>Security</p>
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="cRow">
                        <div class="startym">5:55PM</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="dittym">3h 40m</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="endtym">9:35PM</div>
                    </div>
                    <div class="cRow">
                        <div class="startym">{{ $bussrc }}</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="endtym">{{ $busdesc }}</div>
                    </div>
                </div>
                <div class="col3">
                    <div class="price">
                        <div class="priceText___3AUPT" style="margin-right:10px">₹429</div>
                        <div class="priceSubText___2tPZY">₹479</div>
                    </div>
                    <div class="seatava">5 Seats left</div>
                    <div class="buttonContainer___3BbhF"><a href="/seatselect?src={{$bussrc}}&des={{$busdesc}}&date={{$date}}&busid=3"><button class="btnseat">Select
                                Seat</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="busTile">
            <div class="bConta">
                <div class="col1">
                    <div>Volvo AC Bus</div>
                    <div class="groupbtn">
                        <div class="fach">
                            <p>Wifi</p>
                            <i class="fa fa-wifi" aria-hidden="true"></i>
                        </div>
                        <div class="fach">
                            <p>AC</p>
                            <i class="fas fa-thermometer-quarter"></i>
                        </div>
                        <div class="fach">
                            <p>Sleeper</p>
                            <i class="fas fa-bed"></i>
                        </div>
                        <div class="fach">
                            <p>Security</p>
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="cRow">
                        <div class="startym">5:55PM</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="dittym">3h 40m</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="endtym">9:35PM</div>
                    </div>
                    <div class="cRow">
                        <div class="startym">{{ $bussrc }}</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="endtym">{{ $busdesc }}</div>
                    </div>
                </div>
                <div class="col3">
                    <div class="price">
                        <div class="priceText___3AUPT" style="margin-right:10px">₹429</div>
                        <div class="priceSubText___2tPZY">₹479</div>
                    </div>
                    <div class="seatava">5 Seats left</div>
                    <div class="buttonContainer___3BbhF"><a href="/seatselect?src={{$bussrc}}&des={{$busdesc}}&date={{$date}}&busid=4"><button class="btnseat">Select
                                Seat</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="busTile">
            <div class="bConta">
                <div class="col1">
                    <div>Volvo AC Bus</div>
                    <div class="groupbtn">
                        <div class="fach">
                            <p>Wifi</p>
                            <i class="fa fa-wifi" aria-hidden="true"></i>
                        </div>
                        <div class="fach">
                            <p>AC</p>
                            <i class="fas fa-thermometer-quarter"></i>
                        </div>
                        <div class="fach">
                            <p>Sleeper</p>
                            <i class="fas fa-bed"></i>
                        </div>
                        <div class="fach">
                            <p>Security</p>
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="cRow">
                        <div class="startym">5:55PM</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="dittym">3h 40m</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="endtym">9:35PM</div>
                    </div>
                    <div class="cRow">
                        <div class="startym">{{ $bussrc }}</div>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <div class="endtym">{{ $busdesc }}</div>
                    </div>
                </div>
                <div class="col3">
                    <div class="price">
                        <div class="priceText___3AUPT" style="margin-right:10px">₹429</div>
                        <div class="priceSubText___2tPZY">₹479</div>
                    </div>
                    <div class="seatava">5 Seats left</div>
                    <div class="buttonContainer___3BbhF"><a href="/seatselect?src={{$bussrc}}&des={{$busdesc}}&date={{$date}}&busid=5"><button class="btnseat">Select
                                Seat</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function switchfn() {
        let source = document.getElementById("source");
        let destination = document.getElementById("destination");
        let temp = source.value;
        source.value = destination.value;
        destination.value = temp;
    }
</script>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>
    $(function() {
        $("#datepicker").datepicker();
    });
</script>

<script>
    $(document).ready(function() {
        $('#source').keyup(function() {
            $(".deslist").html('');
            var search = $('#source').val();
            console.log(search);
            if (search != '') {
                $.ajax({
                    url: "test.php",
                    type: "POST",
                    data: {
                        search: search
                    },
                    success: function(data) {
                        $(".surlist").html(data);
                    }
                });
            } else {
                $(".surlist").html('');
            }
        });

        $(document).on('click', '.surlist p', function() {
            var str = $(this).text()
            $('#source').val(str);
            $(".surlist").html('');
        });

        $('#destination').keyup(function() {
            $(".surlist").html('');
            var search = $('#destination').val();
            console.log(search);
            if (search != '') {
                $.ajax({
                    url: "test.php",
                    type: "POST",
                    data: {
                        search: search
                    },
                    success: function(data) {
                        $(".deslist").html(data);
                    }
                });
            } else {
                $(".deslist").html('');
            }
        });


        $(document).on('click', '.deslist p', function() {
            var str = $(this).text()
            $('#destination').val(str);
            $(".deslist").html('');
        });
    });
</script>
