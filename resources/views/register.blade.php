<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatorias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <title>Cadastro</title>
</head>

<body class="container py-4">
    <div>
        <div class="shadow-sm p-3 mb-5 bg-white rounded display-3 text-center">Cadastro</div>

    </div>
    <form method="POST" action="class/salva_cliente.php">
        <div class="container-fluid shadow-sm p-3 mb-5 bg-white rounded">

            <label>Dados cadastrais:</label>

            <div class="row">
                <div class="input-group mt-4 col-md-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nome</span>
                    </div>
                    <input type="text" class="form-control" name="nome" required>
                </div>
            </div>

            <div class="row">
                <div class="input-group mt-4 col-md-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text">CPF/CNPJ</span>
                    </div>
                    <input type="text" class="form-control" name="cpf" minlength="11" maxlength="14" required>
                </div>

                <div class="input-group mt-4 col-md-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nascimento</span>
                    </div>
                    <input type="date" class="form-control" placeholder="DD/MM/AAAA" name="dataNascimento" required>
                </div>

                <div class="mt-4 col-md-3">
                    <div class="custom-control custom-radio custom-control-inline ">
                        <label> </label>
                        <input type="radio" id="sexo" value="F" name="sexo" class="custom-control-input">
                        <label class="custom-control-label" for="sexo">Feminino</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline ">
                        <label> </label>
                        <input type="radio" id="customRadioInline2" value="M" name="sexo" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Masculino</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="input-group mt-4 col-md-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text">E-mail</span>
                    </div>
                    <input type="text" class="form-control" name="email" required>
                </div>

            </div>

            <div class="row">
                <div class="input-group mt-4 col-md-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Senha</span>
                    </div>
                    <input type="password" class="form-control" name="senha" required>
                </div>
                <div class="input-group mt-4 col-md-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Confirmação</span>
                    </div>
                    <input type="password" class="form-control" name="confirmacao" required>
                </div>

            </div>

        </div>

        <div class="container-fluid shadow-sm p-3 mb-5 bg-white rounded">
            
            <div class="row mt-4 col-md-12">
                <button class="btn btn-outline-dark btn-block" type="submit">Enviar Formulario</button>
            </div>

        </div>
        
    </form>
    <z-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
<?php

?>