<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<style>
    @import url('https://fonts.googleapis.com/css2?family=PT+Sans&display=swap');

    * {
        padding: 0;
        margin: 0;
    }

    a {
        text-decoration: none;
        color: black;
    }

    nav {
        font-family: 'PT Sans', sans-serif;
        background-color: #fff;
        box-shadow: 0 2px 4px -2px rgb(175 175 175 / 50%);
        box-sizing: border-box;
        display: flex;
        position: fixed;
        top: 0;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }

    nav .navlef {
        display: inline-flex;
        height: 100%;
        position: relative;
        text-align: center;
        white-space: nowrap;
        align-items: center;
    }

    nav .navlef .logo {
        margin: 5px 20px;
    }

    nav .navlef .opt {
        padding-left: 25px;
    }

    nav .navlef .opt span {
        padding: 0 20px;
    }

    nav .navlef .opt span a:hover {
        padding: 5px 0;
        border-bottom: 3px solid #005079;
        transition: 0.6s cubic-bezier(0.93, -0.97, 0.03, 1.69);
    }

    #home a {
        padding: 5px 0;
        border-bottom: 3px solid #005079;
    }

    nav .navrig {
        margin-right: 20px;
    }

    nav .navrig .profile {
        min-width: 135px;
        background-color: #005079;
        border: 0;
        border-radius: 4px;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-size: 15px;
        font-weight: 500;
        letter-spacing: .25px;
        line-height: 20px;
        padding: 8px 24px;
        text-align: center;
        text-decoration: none;
    }

    nav .navlef .logo span,
    .cancel-btn {
        display: none;
    }

    @media (max-width: 850px) {

        span.material-symbols-outlined.cancel-btn {
            text-align: end;
            color: white;
            font-size: 40px;
        }

        nav .navlef .opt {
            display: none;
        }

        nav .navlef .opt {
            position: fixed;
            height: 100vh;
            width: 100%;
            max-width: 400px;
            left: -150%;
            top: 0px;
            z-index: 6;
            display: block;
            padding: 15px;
            text-align: center;
            background-color: #2d3133eb;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        nav .navlef .show {
            left: 0%;
            transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        nav .opt span {
            margin-left: 0px;
            height: 70px;
        }

        nav span a {
            font-size: 23px;
        }

        .close {
            display: initial;
        }

        nav .navlef .logo span {
            display: initial;
            color: #005079;
            font-size: 50px;
            margin-right: 10px;
        }


        nav .navlef .opt a {
            color: white;
            ;
        }

    }

    @media (max-width: 500px) {
        nav .navlef .logo img {
            width: 60px;
        }

        nav .navrig .profile {
            min-width: 100px;
        }

        nav .navlef .logo span {
            font-size: 40px;
        }

    }
</style>
<nav>
    <div class="navlef">
        <div class="logo">
            <span class="material-symbols-outlined menu-btn">menu</span>
            <img src="{{url('images/logo1.png')}}" width="120px" alt="">
        </div>
        <div class="opt">
            <span class="material-symbols-outlined cancel-btn">close</span>
            <span id="home"> <a href="/"> Home </a> </span>
            <span id="busbooking"> <a href="/busbooking"> Bus Booking </a> </span>
            <span id="roundtrip"> <a href=""> Round Trip </a> </span>
            <span id="holiday"> <a href="https://nxttour.in"> Holiday Packages </a> </span>
        </div>
    </div>
    <div class="navrig">
        @if((session('username'))&&(session('logined')))
            <a href="{{url('/')}}/profile">
                <div class="profile"><span>Profile</span></div>
            </a>
        @else    
            <a href="{{url('/')}}/login">
                <div class="profile"><span>Sign In</span></div>
            </a>
        @endif
    </div>
</nav>
<div class="space" style="width: 100%;height:75px"></div>
<script>
    const navbar = document.querySelector(".opt");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = () => {
        navbar.classList.add("show");
        menuBtn.classList.add("close");
        cancelBtn.classList.add("close");
        console.log("click");
    }
    cancelBtn.onclick = () => {
        menuBtn.classList.add("close");
        navbar.classList.remove("show");
        menuBtn.classList.remove("close");
    }
    window.onscroll = () => {
        cancelBtn.classList.add("close");
        this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
</script>
