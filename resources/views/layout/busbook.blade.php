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

    .background {
        width: 100%;
        height: 100vh;
    }

    .mainbox {
        width: 83.33%;
        padding-top: 80px;
        margin: auto;
    }

    .mainbox .imga {
        background-image: url('{{ url('/') }}/images/background1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 450px;
        border-radius: 30px;
    }

    .searchb {
        width: 90%;
        margin: auto;
    }

    .mainbox .searchb form {
        background-color: #fff;
        box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%);
        border-radius: 32px;
        display: flex;
        align-items: center;
        padding: 20px;
        font-size: 22px;
        margin-top: -50px;
    }

    .textbox img {
        width: 15px;
        height: 15px;
        background: #0050797a;
        padding: 5px;
        margin: 0 10px;
        border-radius: 50%;
    }

    .mainbox .searchb form .source,
    .mainbox .searchb form .destination,
    .mainbox .searchb form .date,
    .mainbox .searchb form .button {
        width: 100%;
    }

    .mainbox .searchb form .textbox {
        display: flex;
        align-items: center;
    }

    .searchba input {
        outline: 0;
        border: none;
        display: block;
        cursor: pointer;
        color: #a9a8a8;
        border-bottom: 2px solid #a9a8a8;
        width: 90%;
        font-size: 20px;
        margin: 10px auto;
    }

    .button input {
        width: 100%;
        color: white;
        height: 57px;
        background: #005079;
        border-radius: 10px !important;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 25px;
        padding: 10px;
        border: none;
        cursor: pointer;
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

    @media (max-width : 1000px) {
        .mainbox {
            width: 90%;
        }

    }

    @media (max-width: 650px) {

        .mainbox .imga {
            height: 300px;
        }

        .mainbox .searchb form {
            flex-direction: column;
        }

        .searchb {
            width: 95%;
        }

        .mainbox {
            width: 95%;
        }

    }
</style>

<div class="mainbox">
    <div class="imga">
    </div>
    <div class="searchb">
        <form action="/buslist" method="get">
            <div class="source">
                <div class="textbox">
                    <div class="pin___1fnv4"><img src="https://d1flzashw70bti.cloudfront.net/original/images/pin.svg">
                    </div>
                    <div class="searchText___dqbcQ">From City</div>
                </div>
                <div class="searchba">
                    <div><input type="text" id="source" name="srce" placeholder="source" autocomplete="off"
                            required>
                    </div>
                    <div class="surlist">
                    </div>
                </div>
            </div>
            <div class="interchange___qnhw4" onclick="switchfn()" style="cursor: pointer;"><img
                    src="https://d1flzashw70bti.cloudfront.net/original/images/interchange.svg"></div>
            <div class="destination">
                <div class="textbox">
                    <div class="pin___1fnv4"><img src="https://d1flzashw70bti.cloudfront.net/original/images/pin.svg">
                    </div>
                    <div class="searchText___dqbcQ">To City</div>
                </div>
                <div class="searchba">
                    <div><input type="text" name="destination" id="destination" placeholder="Destination"
                            autocomplete="off" required>
                    </div>
                    <div class="deslist">
                    </div>
                </div>
            </div>
            <div class="interchange___qnhw4"><img
                    src="https://d1flzashw70bti.cloudfront.net/original/images/interchange.svg" style="opacity:0">
            </div>
            <div class="date">
                <div class="textbox">
                    <div class="pin___1fnv4"><img
                            src="https://d1flzashw70bti.cloudfront.net/original/images/calendar.svg"> </div>
                    <div class="searchText___dqbcQ">Date</div>
                </div>
                <div class="searchBoxDate___2VxK_">
                    <div class="searchba">
                        <input type="text" class="searchba input" id="datepicker" name="date" placeholder="Date"
                            onclick="setDatepicker(this)" autocomplete="off" required>
                    </div>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Search">
            </div>
        </form>
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
