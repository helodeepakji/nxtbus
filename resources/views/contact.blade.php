<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact</title>
    <style>
        a {
            text-decoration: none;
            color: black;
        }

        .bigo {
            margin-top: 20px;
            display: flex;
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
    </style>
</head>

<body>
    @include('layout.navbar')
    <div class="bigo">
        <div class="hdt">
            <h1>Contact</h1>
            <div class="line"></div>
        </div>
    </div>
    <form action="{{ url('/') }}/contact" method="post" class="mx-5 my-5">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            <span class="text-danger">
                @error('name')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="text" name="email" class="form-control"  value="{{ old('email') }}">
            <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
            <span class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
    <hr>
    @include('layout.footer')
</body>

</html>
