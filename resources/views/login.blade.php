<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('signin/signin.css') }}" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="/login" method="POST">
            @csrf
            <img class="mb-1" src="{{ asset('signin/admin-logo.png') }}" alt="" width="90">
            <h1 class="h3 mb-3 fw-normal">Login Admin</h1>

            <div class="form-floating">
                <input type="Email" class="form-control" id="email" placeholder="Email" name="email">
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
    </main>



</body>

</html>
