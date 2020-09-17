<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="Windows-125">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produtos - Barbearia Alura</title>
    
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="caixa">
            <h1><img src="{{asset('/images/logo.png')}}"></h1>
            <nav>
                <ul>
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li><a href="{{ route('products')}}">Produtos</a></li>
                    <li><a href="{{ route('contact')}}">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <ul class="produtos">
            <li>
                <h2>Cabelo</h2>
                <img src="{{asset('images/cabelo.jpg')}}">
                <p class="produto-decricao">Na tesoura ou máquina, como o cliente preferir</p>
                <P class="produto-preco">R$ 25,00</P>
            </li>
            <li>
                <h2>Barba</h2>
                <img src="{{asset('images/barba.jpg')}}">
                <p class="produto-decricao">Corte e densenho profissional de barba</p>
                <P class="produto-preco">R$ 18,00</P>
            </li>
            <li>
                <h2>Cabelo + Barba</h2>
                <img src="{{asset('images/cabelo+barba.jpg')}}">
                <p class="produto-decricao">Pacote compoleto de cabelo e barba</p>
                <P class="produto-preco">R$ 35,00</P>
            </li>
        </ul>
    </main>

    <footer>
        <img src="{{asset('/images/logo-branco.png')}}">
        <p class="copyright">&copy; Copyright Barbearia Alura - 2020</p>
    </footer>

</body>

</html>