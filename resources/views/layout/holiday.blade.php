<style>
    @import url('https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i');

    a {
        text-decoration: none;
        color: black;
    }

    .bigo {
        margin-top: 20px;
        display: flex;
        /* padding: 20px; */
    }

    .bigo .hdt h1 {
        font-size: 30px;
        text-align: center;
        font-weight: 100;
        margin: 5px;
    }

    .bigo .hdt {
        width: 100%;
    }

    .bigo .hdt .line {
        width: 8rem;
        height: .35rem;
        background-color: #005079;
        border-radius: .25rem;
        margin: auto;
        transition: all 0.5s ease;
    }

    .bigo .hdt h1:hover+.line {
        width: 15rem;
    }

    .bigo .prt p {
        font-size: 16px;
        float: right;
        padding-left: 150px;
        width: 100%;
        margin-right: 40px;
    }

    .roow {
        /* display: flex; */
        padding: 10px;
        /* height: 70vh; */
        overflow: auto;
        font-family: 'Muli', sans-serif;
    }

    .roow::-webkit-scrollbar {
        width: 5px;
        height: 5px;
        /* margin-top: -50px; */
        background: #20b2aa29;
    }

    /* Track */
    .roow::-webkit-scrollbar-track {
        border-radius: 10px;
    }

    /* Handle */
    .roow::-webkit-scrollbar-thumb {
        background: #005079;
        border-radius: 20px;
    }

    .wsk-cp-product {
        box-shadow: 0px 0px 20px 0px rgb(0 0 0 / 30%);
        padding: 5px;
        border-radius: 10px;
        width: 280px;
        height: 220px;
        margin: 40px 15px;
        cursor: pointer;
        background: white;
    }

    .wsk-cp-img {
        width: 100%;
        transition: all 0.1s ease-in-out;
    }

    .wsk-cp-img img {
        width: 280px;
        transition: all 0.1s ease-in-out;
        border-radius: 6px;
        height: 220px;
    }

    .wsk-cp-product:hover .wsk-cp-img {
        transform: translate(0, -35px);
    }

    .wsk-cp-product:hover .wsk-cp-img img {
        box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
    }

    .wsk-cp-text .category {
        text-align: center;
        font-size: 12px;
        font-weight: bold;
        padding: 5px;
        margin-top: -10px;
        transition: all 0.2s ease-in-out;
    }

    .wsk-cp-text .category span {
        padding: 12px 30px;
        border: 1px solid #313131;
        background: #212121;
        color: #fff;
        box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
        border-radius: 27px;
        transition: all 0.05s ease-in-out;

    }

    .wsk-cp-product:hover .wsk-cp-text .category span {
        border-color: #ddd;
        box-shadow: none;
        padding: 11px 28px;
    }

    .wsk-cp-product:hover .wsk-cp-text .category span {
        background: #005079;
    }

    .wsk-cp-text .title-product {
        text-align: center;
        display: none;
    }

    .wsk-cp-text .title-product h3 {
        font-size: 20px;
        font-weight: bold;
        margin: 15px auto;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        width: 100%;
    }

    .wsk-cp-text .description-prod p {
        margin: 0;
    }

    /* Truncate */
    .wsk-cp-text .description-prod {
        text-align: center;
        width: 100%;
        height: 75px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        margin-bottom: 15px;
        display: none;
    }

    .arrow {
        display: none;
    }

    @keyframes arrow {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .leftico,
    .righthico {
        position: absolute;
        margin: 10px;
        font-weight: 900;
        font-size: 30px;
        animation: arrow 1s linear infinite;
    }

    .leftico {
        left: 0;
    }

    .righthico {
        right: 0;
    }

    @media only screen and (max-width: 1200px) {
        .roow {
            padding: 10px;
        }

        .wsk-cp-product {
            width: 250px;
            height: 200px;
        }

        .wsk-cp-img img {
            width: 250px;
            height: 200px;
        }
    }

    @media only screen and (max-width: 1000px) {
        .mainbox {
            flex-direction: column-reverse;
        }

        .bus {
            width: 100%;
        }

        .roow {
            display: flex;
        }

        .arrow {
            display: grid;
            align-items: center;
        }

    }
</style>
<div class="shell">
    <div class="bigo">
        <div class="hdt">
            <h1>Holiday Packages</h1>
            <div class="line"></div>
        </div>
    </div>
    <div class="roow">
        <?php
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'nxttour';
        
        $conn = mysqli_connect($server, $username, $password, $database);
        if (!$conn) {
            die('Error' . mysqli_connect_error());
        }
        
        $sql = "SELECT * FROM $holiday LIMIT 4";
        $result0 = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result0)) {
            $places = $row['place'];
            $decs = $row['decs'];
            $rate = $row['rate'];
            $hidecode = $row['hidecode'];
            echo '<div class="col-md-3">
                                                <div class="wsk-cp-product"> <a href="https://nxttour.in/tourpage?tour=' .
                $places .
                '&name=' .
                $holiday .
                '">
                                                        <div class="wsk-cp-img">
                                                            <img src="https://nxttour.in/' .
                $hidecode .
                '" alt="Product" class="img-responsive" />
                                                        </div>
                                                    </a>
                                                    <div class="wsk-cp-text">
                                                        <a href="https://nxttour.in/tourpage?tour=' .
                $places .
                '&name=' .
                $holiday .
                '">
                                                            <div class="category">
                                                                <span>Rs. ' .
                $rate .
                '</span>
                                                            </div>
                                                        </a>
                                                        <div class="title-product">
                                                        <a href="tourpage?tour=' .
                $places .
                '&name=special">  <h3>' .
                $places .
                '</h3> </a>
                                                        </div>
                                                        <div class="description-prod" style="color:black">
                                                            <p>' .
                substr($decs, 0, 150) .
                '</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
        }
        echo '<div class="arrow"> 
                                   <span class="material-symbols-outlined leftico">
                                    arrow_back_ios
                                    </span> 
                                </div>
                                 <div class="arrow">  
                                 <span class="material-symbols-outlined righthico">
                                 arrow_forward_ios
                                 </span>
                                 </div>
                                 </div>';
        
        $conn->close();
        ?>


    </div>
