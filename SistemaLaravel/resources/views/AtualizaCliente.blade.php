<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Form</title>
</head>
<body>
<!-- Formulario de Cadastro -->

<div class="row container">
    <p>&nbsp;</p>
    <form action="{{ route('update') }}" method="post" class="col s12">
    {{csrf_field()}}
        <fieldset class="formulario">
            <legend><img src="imagens/avatar1.png" alt="[imagem]" width="100"> </legend>
            <h5 class="light center">Editar Clientes  </h5>
            <!--Campo nome -->
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nome" id="nome"  maxlength="40" value="{{$cliente['nome']}}" required autofocus>
                <label for="nome">Nome do Cliente</label>
            </div>

            <!--Campo Email -->
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email"  maxlength="50" value="{{$cliente['email']}}" required>
                <label for="email">Email do Cliente</label>
            </div>

            <!--Campo Telefone -->
            <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <input type="tel" name="telefone" id="telefone"  maxlength="15" value="{{$cliente['telefone']}}" required>
                <label for="telefone">Telefone do Cliente</label>
            </div>

            <input type="hidden" name="id" value = "{{$cliente['id']}}">

            <!--Botões-->
            <div class="input-field col s12">
                <input type="submit" value="cadastrar" class="btn blue">
                <input type="reset" value="limpar" class="btn red">
            </div>
        </fieldset>
    </form>
</div>
    
</body>
</html>