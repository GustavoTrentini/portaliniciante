<!doctype html>
<html lang="en">

<head>
    <title>Signin </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/singin.css')}}">

</head>

<body class="text-center">
    <form class="form-signin">
        <div class="container-fluid shadow-sm p-3 mb-5 bg-white rounded">

        <div class="mb-4">
            <img  src="{{asset('/images/logoKraken.png')}}" alt="" width="72" height="72">
        </div>


        <h1 class="h2 mb-3 font-weight-normal">Realize o login</h1>

        <label for="inputEmail" class="sr-only">Email:</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Lembrar senha
            </label>
        </div>

        <button class="btn btn-lg btn-outline-dark btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2020 V1</p>
        </div>
    </form>
</body>

</html>