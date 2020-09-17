<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="Windows-125">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contato - Barbearia Alura</title>
    

    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="caixa">
            <h1><img src="{{asset('images/logo.png')}}" alt="Logo barbearia alura"></h1>
            <nav>
                <ul>
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li><a href="{{ route('products')}}">Produtos</a></li>
                    <li><a href="{{ route('contact')}}">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="principal-contato">
        <form>
            <label for="nomesobrenome">Nome e Sobrenome</label>
            <input type="text" id="nomesobrenome" class="input-padrao" required placeholder="Nome Sobrenome">

            <label for="email">E-mail</label>
            <input type="email" id="email" class="input-padrao" required placeholder="(XX) XXXXX-XXXX">

            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" class="input-padrao" required placeholder="user@dominio.com">

            <label for="mensagem">Mensagem</label>
            <textarea cols="70" rows="10" id="mensagem" class="input-padrao" required placeholder="Sua mensagem aqui..."></textarea>
            
            <fieldset>
                <legend>Como prefere o nosso contato ?</legend>
                <label for="radio-email"><input type="radio" name="contato" value="email" id= "radio-email">E-mail</label>
                

                <label for="radio-telefone"><input type="radio" name="contato" value="telefone" id= "radio-telefone">Telefone</label>
                

                <label for="radio-whatsapp"><input type="radio" name="contato" value="whatsapp" id= "radio-whatsapp" checked>WhatsApp</label>
                
            </fieldset>
            <fieldset>
                <legend>Qual horário prefere ser atendido?</legend>
                <select >
                    <option>Manha</option>
                    <option>Tarde</option>
                    <option>Noite</option>
                </select>
            </fieldset>
            <label class="checkbox"><input type="checkbox" checked> Gostaria de receber nossas novidades por e-mail ?</label>
            <input type="submit" value="Enviar formulário" class="enviar">

        </form>
        <table>
            <thead>
                <tr>
                    <th>Dia</th>
                    <th>Horário</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Segunda-Feira</td>
                    <td>8h - 20h</td>
                </tr>
                <tr>
                    <td>Terça-Feira</td>
                    <td>8h - 20h</td>
                </tr>
                <tr>
                    <td>Quarta-Feira</td>
                    <td>8h - 20h</td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        
        <img src="{{asset('images/logo-branco.png')}}" alt="Logo barbearia alura">
        <p class="copyright">&copy; Copyright Barbearia Alura - 2020</p>
    </footer>

</body>

</html>