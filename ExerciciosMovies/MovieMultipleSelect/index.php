<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>The Movie Best</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>

<nav class="black">
        <div class="nav-wrapper container">
            <div class="brand-logo "><i class="material-icons prefix">movie_filter</i>The Best Movies </div>
            <ul class="right">
                <li><a href="#"><i class="material-icons left">account_circle</i>Cadastro</a></li>
                <li><a href="#"><i class="material-icons left">search</i>Movies</a></li>
            </ul>
        </div>
    </nav>

    <h4 class="center-align black-text text-darken-4">Search Movie</h4>

<div class="row container">
  <fieldset class="formulario">
    <form action="" method="get" class="col s12">
        <div class="input-field col s12">
            <select  multiple name="genero[]">
                <option value="" disabled selected>Choose your option</option>
    <?php
    include_once "dados.php";
    foreach ($filmes as $key => $value) {
    ?>                
                    <option <?=$key?>><?=$key?></option>
    <?php
    }?>
            </select>
            <label>Materialize Multiple Select</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit"  name="action">Submit
            <i class="material-icons right">send</i>
      </button>
    </form>

<?php
/*
if(isset($_GET['genero'])){
    $genero_filme = $_GET['genero'];
    if(empty($filmes[$genero_filme])){
        echo "n�o existe filmes com esse g�nero";
    }else{
        foreach ($filmes[$genero_filme] as $key => $value) {
            $nome_filme = implode(explode(" ",$value),"%20");
            echo "<a href='https://www.themoviedb.org/search?query=$nome_filme&language=pt-BR' target='_blank'><li> $value</li></a>";
        }
    }
}
*/
?>
    </fieldset>
</div>
<div class="modal" id="modal">
        <div class="modal-content">
            <form action="https://www.themoviedb.org/search?language=pt-BR" method="get>">
            <?php
            foreach ($_GET['genero'] as $key => $value) {
            echo strtoupper($value). " <br>";

              foreach ($filmes[$value] as $key => $v) {
                ?>
                <div class="row">
                        <label>
                            <input class="with-gap" name="query" type="radio" value='<?=$v?>' />
                            <span><?=$v?></span>
                        </label>
                </div>
                <?php
               }
            }?>
        </div>
        <div class ="modal-footer">
            <button type="submit" class="btn blue " id ="confirmar" >Confirmar</button>
            <a class="btn red modal-close modal-action">Cancelar</a>
        </div>
        <form>
    </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $('#modal').modal();
    var ok = <?php echo intval(isset($_GET['genero'])) ?>;
    if(ok==1)
        $('#modal').modal('open'); 
 });
 $(document).ready(function(){
    $('select').formSelect();
  });
  $('select').formSelect('isMultiple', true);
 

</script>

</body>
</html>

