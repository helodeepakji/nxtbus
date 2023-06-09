<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
    * {
        font-family: Open Sans;
        margin: 0;
        padding: 0;
    }


    .footer-distributed {
        background: white;
        /* margin-top: 80px; */
        box-shadow: 1px 0 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        padding: 40px;
        text-align: left;
        font: bold 16px sans-serif;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
        display: inline-block;
        vertical-align: top;
    }

    /* Footer left */

    .footer-distributed .footer-left {
        width: 40%;
        padding-left: 20px;
    }

    /* Footer links */

    .footer-distributed .footer-links {
        margin: 20px 0 12px;
        padding: 0;
    }

    .footer-distributed .footer-links a {
        display: inline-block;
        line-height: 1.8;
        font-weight: 400;
        text-decoration: none;
        color: inherit;
        padding-right: 10px;
    }

    .footer-distributed .footer-links a:hover {
        color: #005079;
    }

    .footer-distributed .footer-company-name {
        color: #222;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
    }

    /* Footer Center */

    .footer-distributed .footer-center {
        width: 35%;
    }

    .footer-distributed .footer-center span {
        background-color: black;
        color: #ffffff;
        font-size: 30px;
        width: 38px;
        cursor: pointer;
        height: 38px;
        border-radius: 50%;
        text-align: center;
        line-height: 42px;
        margin: 10px 15px;
        vertical-align: middle;
    }

    .footer-distributed .footer-center p {
        display: inline-block;
        font-weight: 400;
        vertical-align: middle;
        margin: 0;
    }

    .footer-distributed .footer-center p span {
        display: block;
        font-weight: normal;
        font-size: 14px;
        line-height: 2;
    }

    .footer-distributed .footer-center p a {
        color: #005079;
        text-decoration: none;
    }

    .footer-distributed .footer-links a:before {
        content: "|";
        font-weight: 300;
        font-size: 20px;
        left: 0;
        display: inline-block;
        padding-right: 5px;
    }

    .footer-distributed .footer-links .link-1:before {
        content: none;
    }

    /* Footer Right */

    .footer-distributed .footer-right {
        width: 20%;
    }

    .footer-distributed .footer-company-about {
        line-height: 20px;
        color: #92999f;
        font-size: 13px;
        font-weight: normal;
        margin: 0;
    }

    .footer-distributed .footer-company-about span {
        display: block;
        font-size: 25px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .footer-distributed .footer-icons {
        margin-top: 25px;
    }

    .footer-distributed .footer-icons a {
        display: inline-block;
        width: 35px;
        height: 35px;
        cursor: pointer;
        background-color: black;
        border-radius: 2px;
        font-size: 25px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;
        margin-right: 3px;
        margin-bottom: 5px;
    }

    .footer-distributed .footer-center span:hover,
    .footer-distributed .footer-icons a:hover {
        background-color: #005079;
    }

    /* If you don't want the footer to be responsive, remove these media queries */

    @media (max-width: 800px) {

        .footer-distributed {
            font: bold 14px sans-serif;

        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: block;
            width: 100%;
            margin-top: 50px;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-right {
            width: 100%;
            padding-left: 0;
            text-align: center;
        }

        .footer-distributed .footer-center .loca {
            width: 280px;
            margin: auto;
        }

        .footer-distributed .footer-right {
            width: 100%;
            text-align: center;
        }
    }

    @media (max-width: 400px) {
        .footer-distributed h1 {
            padding-top: 50px;
        }

        .footer-distributed {
            padding: 10px;
        }

        .footer-distributed .footer-left {
            padding-left: 0;
            margin: 0;
        }
    }
</style>
<hr>
<footer class="footer-distributed">
    <div class="footer-left">
        <h1><img src="{{url('images/logo1.png')}}" width="200px" alt=""></h1>
        <p class="footer-links">
            <a href="/" class="link-1">Home</a>
            <a href="/busbooking">Bus Booking</a>
            <a href="searchresult">Round Trip</a>
            <a href="profile">holiday Packages</a>
        </p>
        <p class="footer-company-name"> helodeepakji © 2021</p>
    </div>
    <div class="footer-center">
        <div class="loca">
            <span class="material-symbols-outlined">
                location_on
            </span>
            <p> <a> Ghaziabad <br> UttarPradesh, INDIA</a></p>
        </div>
        <div class="loca">
            <span class="material-symbols-outlined">
                phone_in_talk
            </span>
            <p> <a href="tel: +918860422993"> +91 8860422993 </a> </p>
        </div>
        <div class="loca">
            <span class="material-symbols-outlined">
                mail
            </span>
            <p><a href="mailto:support@nxttour.in">support@nxtbus.in</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About the company</span>
            Best Deals and holiday packages in best price. Custmer support is very helpfull, Follow on Instagram for
            more update and best deals.
        </p>
        <div class="footer-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
            <a href="https://api.whatsapp.com/send/?phone=918860422993&text=I am intrested to travel"><i
                    class="fab fa-whatsapp" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/nxttour.in/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
        </div>
    </div>
</footer>
