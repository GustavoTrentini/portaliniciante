<!doctype html>
<html lang="pt-br">

<head>
    <title>Signin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="{{asset('css/singin.css')}}"> -->

</head>

<body>
    <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh;background: #222;">
        <form class="form-signin text-center col-md-3">
            <div class="shadow-sm p-3 mb-5 bg-dark text-light rounded">

                <div class="mb-4">
                    <img src="{{asset('/images/logoKraken.png')}}" alt="" width="72" height="72">
                </div>


                <h1 class="h2 mb-3 font-weight-normal">Realize o login</h1>

                <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Email" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembrar senha
                    </label>
                </div>

                <button class="btn btn-lg btn-outline-light btn-block" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2020 V1</p>
        </form>
    </div>
</body>

</html>
