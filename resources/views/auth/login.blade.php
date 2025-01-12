<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">

</head>



<body>


    @if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
    <div class="main-con d-flex justify-content-center align-items-center">
        <div class="container">
        <div class="heading">Login</div>
        <form class="form" action="{{route("loginPost")}}" method="POST">
            @csrf
            <input
            placeholder="E-mail"
            id="email"
            name="email"
            type="email"
            class="input"
            required=""
            />
            <input
            placeholder="Password"
            id="password"
            name="password"
            type="password"
            class="input"
            required=""
            />
            <input value="Login" type="submit" class="login-button" />
        </form>
        <a class="d-flex justify-content-center text-decoration-none" href="{{route("user-home")}}">Back</a>
        <small class="agreement">Don't have an account? <a class="fs-6" href="{{route("register")}}">Signup</a></small>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
