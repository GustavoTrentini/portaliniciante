<!DOCTYPE html>
<html lang="pt-br">
    

<head>
    <meta charset="Windows-125">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Barbearia Alura</title>

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
    <div class='box-banner'>
        <img class="banner" src="{{asset('/images/banner.jpg')}}">
    </div>
    <main>    
        <section class="principal">
            
            <h2  class="titulo-principal">Sobre a Barbearia Alura</h2>        
            
            <img src="{{asset('/images/utensilios.jpg')}}" alt="Utensilios de um barbeiro." class="utensilios">
            
            <p>Localizada no coração da cidade a <strong>Barbearia Alura</strong> traz para o mercado o que há de melhor para o seu cabelo e barba. Fundada em 2019, a Barbearia Alura já é destaque na cidade e conquista novos clientes a cada dia.</p>
            
            <p class="missao"><em>Nossa missão é: <Strong>"Proporcionar auto-estima e qualidade de vida aos clientes"</Strong>.</em></p>
            
            <p>Oferecemos profissionais experientes e antenados as mudançaas no mundo da moda. O atendimento possui padrão de excelência e agilidade, garantindo qualidade e satisfação dos nossos clientes.</p>
        </section>

        <section class="mapa">
            <h3 class="titulo-principal">Nosso Estabeleciomento</h3>

            <p>Nosso estabeleciomento encontra-se no centro da cidade</p>
            <div class="mapa-conteudo">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.547262847512!2d-47.18716868440907!3d-23.440716263034467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf6b91ce89bc03%3A0xa0b6359364f77cd3!2sAv.%20do%20Sol%2C%20S%C3%A3o%20Paulo!5e0!3m2!1spt-PT!2sbr!4v1595396773835!5m2!1spt-PT!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>
        
        <section class="beneficios">
            <h3 class="titulo-principal">Benefícios</h3>
            <div class="conteudo-beneficios">
                <ul class="lista-beneficios">
                    <li class="itens">Atendimento aos Clientes</li>
                    <li class="itens">Espaço Diferenciado</li>
                    <li class="itens">Localização</li>
                    <li class="itens">Profissionais qualificados</li>
                    <li class="itens">Pontualidade</li>
                    <li class="itens">Limpeza</li>
                </ul><img src="{{asset('/images/beneficios.jpg')}}" class="imagembeneficios">
            </div>
            
            <div class="video">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/OZLbJ1wScD8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
           
        </section>
    </main>

    <footer>
        <img src="{{asset('/images/logo-branco.png')}}">
        <p class="copyright">&copy; Copyright Barbearia Alura - 2020</p>
    </footer>
</body>

</html>


