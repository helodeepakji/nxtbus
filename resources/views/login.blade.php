<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Raleway, sans-serif;
        }

        body {
            background: linear-gradient(90deg, #ffffff, #00121b1f);
        }

        .container {
            display: grid;
            align-items: center;
            justify-content: center;
            margin: 60px 0;
        }

        .screen {
            background-image: url('{{ url('/') }}/images/formback.png');
            background-size: cover;
            height: 600px;
            width: 360px;
            box-shadow: 0px 0px 24px #005079;
        }

        .screen__content {
            z-index: 1;
            height: 100%;
        }

        .login {
            width: 320px;
            padding: 30px;
            padding-top: 156px;
        }

        .login__field {
            padding: 20px 0px;
        }

        .login__icon {
            top: 30px;
            color: #005079;
        }

        .login__input {
            border: none;
            border-bottom: 2px solid #D1D1D4;
            background: none;
            padding: 10px;
            padding-left: 24px;
            font-weight: 700;
            width: 75%;
            transition: .2s;
        }

        .login__input:active,
        .login__input:focus,
        .login__input:hover {
            outline: none;
            border-bottom-color: #6A679E;
        }

        .login__submit {
            background: #fff;
            font-size: 14px;
            margin-top: 30px;
            padding: 16px 20px;
            border-radius: 26px;
            border: 1px solid #005079;
            text-transform: uppercase;
            font-weight: 700;
            display: flex;
            align-items: center;
            width: 100%;
            color: #005079;
            box-shadow: 0px 2px 2px #005079;
            cursor: pointer;
            transition: .2s;
        }

        .login__submit:active,
        .login__submit:focus,
        .login__submit:hover {
            border-color: #6A679E;
            outline: none;
        }

        .button__icon {
            font-size: 24px;
            margin-left: auto;
            color: #005079;
        }

        .social-login {
            float: right;
            height: 140px;
            width: 160px;
            text-align: center;
            margin-top: 50px;
            color: #fff;
        }

        .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .msg {
            background: pink;
            margin-top: 35px;
            padding: 15px;
            font-size: 15px;
        }

        .social-login__icon {
            padding: 20px 10px;
            color: #fff;
            text-decoration: none;
            text-shadow: 0px 0px 8px #005079;
        }

        .social-login__icon:hover {
            transform: scale(1.5);
        }

        .trs {
            float: left;
            font-weight: 500;
            text-align: center;
            margin: 0 30px;
            background: #5589a4;
            font-size: 18px;
            padding: 10px;
            border-radius: 20px;
        }

        @media (max-width: 500px) {
            .screen {
                height: 500px;
                width: 320px;
            }

            .login {
                width: 300px;
                padding: 30px;
                padding-top: 90px;
            }
        }
    </style>
</head>

<body>
    @include('layout.navbar')
    @if ($_SERVER["REQUEST_METHOD"] == "POST")
        <div class="status" style="color: #d50e0e;text-align: center;padding: 10px;background: white;font-size: 20px;">
            {{ $err }}
        </div>
    @endif
    @error('username')
        <div class="status" style="color: #d50e0e;text-align: center;padding: 10px;background: white;font-size: 20px;">
            {{ $message }}
        </div>
    @enderror
    @error('password')
        <div class="status" style="color: #d50e0e;text-align: center;padding: 10px;background: white;font-size: 20px;">
            {{ $message }}
        </div>
    @enderror
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" action="/login" method="post">
                    @csrf
                    <input type="hidden" value="{{ URL::previous() }}" name="redirect_url">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" name="username" id="username" class="login__input"
                            placeholder="User name" required>
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="password" id="password" class="login__input"
                            placeholder="Password" required>
                    </div>
                    <button class="button login__submit">
                        <span class="button__text">Log In Now</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                <div class="trs">
                    <a href="/signin" style="color: white">Sign Up</a>
                </div>
                <div class="social-login">
                    <h3>log in via</h3>
                    <div class="social-icons">
                        <a href="/glogin" class="social-login__icon fa-brands fa-google"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
</body>

</html>
