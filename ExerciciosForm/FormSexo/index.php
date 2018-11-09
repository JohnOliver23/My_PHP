<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
   <div class="box">
    <form method='post' action="">
    <p>Digite seu Nome: <input type="text" name="nome" id="nome"></p>
    <p>Qual seu sexo ?</p>
    <div class="form-check">
          <input class="form-check-input" type="radio" name="genero" id="f" value="m" checked>
          <label class="form-check-label" for="gridRadios1">
            <p>M</p>
          </label>
          <input class="form-check-input" type="radio" name="genero" id="m" value="f">
          <label class="form-check-label" for="gridRadios2">
           <p>F</p>
          </label>
        </div>
        <p><input type='submit' name='enviar'  class="btn btn-primary" > </input> </p>
    </form>
    <?php
    if(isset($_POST['nome'])){
        echo "$_POST[nome], sexo: ";
        if($_POST['genero'] == 'm'){
            echo "masculino";
        }else{
            echo "feminino";
        }
            

    }
    ?>
   </div>
</body>
</html>