<?php
use Illuminate\Support\Facades\Input;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Form</title>
</head>
<body>

<div class="container">
 <h1 class="center-align blue-text text-darken-4">Clientes</h1>
    <table>
            <thead>
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Telefone</th>
                  <th>Editar</th>    
                  <th>Remover</th>             

              </tr>
            </thead>

            <tbody>
            @foreach($clientes as $k => $v)
              <tr>
                <td>{{$v['nome']}}</td>
                <td>{{$v['email']}}</td>
                <td>{{$v['telefone']}}</td>
                <td> <a title="update" href="{{URL::to('/updatecli/'.$v['id']) }}" class="modal-trigger"><i class="small material-icons">note_add</i></a></td>
                <td> <a title="delete" href="{{URL::to('/deletecli/'.$v['nome']) }}" class="modal-trigger"><i class="small material-icons">delete_forever</i></a></td>
              </tr>
            @endforeach
            </tbody>
      </table>
    </div>
</body>
</html>