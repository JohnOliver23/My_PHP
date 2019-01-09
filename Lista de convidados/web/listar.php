   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
             <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   </head>
   <?php
   include_once '../vendor/autoload.php';
   session_start();
   ?>
   <body>
   <!--menu-->
   <?php
if(!isset($_SESSION['login'])){
    header("location:index.php");
}
?>
<nav class="blue-grey">
        <div class="nav-wrapper container">
            <div class="brand-logo light">Sistema de Cadastro </div>
            <ul class="right">
                <li><a href="home.php"><i class="material-icons left">arrow_back</i>voltar</a></li>
                <li><a href="sair.php"><i class="material-icons left">power_settings_new</i>Sair</a></li>
            </ul>
        </div>
    </nav>
   <div class="row container">
    <div class="col s12">
        <h5 class="light">Consultas </h5><hr>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sexo</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($_SESSION['pessoa'] as $key => $value) {
                        
                        ?>
                        <tr>
                            <td><?=$value->getNome()?></td>
                            <td><?=$value->getSexo()?></td>
                        </tr>
                    <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>
       
   </body>
   </html>
