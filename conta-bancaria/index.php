
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
<?php
session_start();
include_once("bd/read.php");
?>
    <div class="container">
      
    <h1 class="center-align blue-text text-darken-4">Conta Corrente</h1>
    <a href="bd/insert.php">Registrar</a>
     <table>
            <thead>
              <tr>
                  <th>Name</th>
                  <th>Cpf</th>
                  <th>Saldo</th>
                  <th>Sacar</th>
                  <th>Depositar</th>

              </tr>
            </thead>

            <tbody>
              <tr>
                <td><a href=""><?=$cliente->getNome()?></a></td>
                <td><?=$cliente->getCpf()?></td>
                <td id="saldo"><?=$conta->getSaldo()?></td>
                <td> <a title="saque" href="#sacar" class="modal-trigger"><i class="small material-icons">assignment_returned</i></a></td>
                <td> <a title="deposito" href="#depositar" class="modal-trigger"><i class="small material-icons">note_add</i></a></td>
              </tr>
            </tbody>
      </table>
      <?php
        if($_SESSION['erro']){?>
          <p class="center-align red-text"><?=$_SESSION['erro']?></p>
          <?php
        }
        session_destroy();
        ?>
    </div>
    

    
    <div class="modal" id="sacar">
     <form method="get" action="bd/update.php">
        <div class="modal-content">
            <h4 class="light center">Saque</h4>
            <p class="center">Digite o valor que você deseja sacar ?</p>
            
            <div class="input-field col s12">
                <i class="material-icons prefix">attach_money</i>
                <input type="number" min="0" step="10" name="saque" id="saque" maxlength="40" required autofocus>
                <label for="saque">Valor</label>
            </div>
        </div>
        <div class ="modal-footer">
            <button type="submit" class="btn blue modal-close modal-action" id ="saque" >Confirmar</button>
            <a class="btn red modal-close modal-action">Cancelar</a>
        </div>
     </form>
    </div>

        <div class="modal" id="depositar">
     <form method="get" action="bd/update.php">
        <div class="modal-content">
            <h4 class="light center">Dep�sito</h4>
            <p class="center">Digite o valor que você deseja Depositar ! </p>
            
            <div class="input-field col s12">
                <i class="material-icons prefix">attach_money</i>
                <input type="number" min="0" step="10" name="deposito" id="deposito" maxlength="40" required autofocus>
                <label for="deposito">Valor</label>
            </div>
        </div>
        <div class ="modal-footer">
            <button type="submit" class="btn blue modal-close modal-action" id ="saque" >Confirmar</button>
            <a class="btn red modal-close modal-action">Cancelar</a>
        </div>
     </form>
    </div>
    
    
 
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   <script>
     document.addEventListener('DOMContentLoaded', function() {
    var options;
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var options;
    var instances = M.Modal.init(elems, options);
    console.log(elems);
  });

</script>


  </body>
</html>
