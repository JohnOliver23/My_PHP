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
    <p>Nome: <input type="text" name="nome" id="nome"></p>
    <p>Quais esporte você pratica : </p>
    <div class="form-check">
          <input type="checkbox" name="esportes[]" value="natacao" />natacao
          <input type="checkbox" name="esportes[]" value="futebol" />futebol
          <input type="checkbox" name="esportes[]" value="volei" />volei
          <input type="checkbox" name="esportes[]" value="judo" />judô
    <div>
    <br>
        <p><input type='submit' name='enviar'  class="btn btn-primary" > </input> </p>
    </form>
    <?php
    if(isset($_POST['nome'])){
        echo "$_POST[nome], esportes que pratica: ";

            foreach ($_POST['esportes'] as $key => $value) {
                echo" $value ";
            }
            

    }

    ?>
   </div>
</body>
</html>