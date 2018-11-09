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
          <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">movie</i>
                    <input type="text" name ="genero" id="autocomplete-input" class="autocomplete" value='<?= isset($_GET['genero'])?$_GET['genero']:""?>' maxlength="12" required autofocus>
                    <!--<label for="autocomplete-input">Autocomplete</label>-->
                </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                    </button>
          </div>
    </form>
    
<?php
include_once "dados.php";
if(isset($_GET['genero'])){
    $genero_filme = $_GET['genero'];
    if(empty($filmes[$genero_filme])){
        echo "não existe filmes com esse gênero";
    }else{
        foreach ($filmes[$genero_filme] as $key => $value) {
            $nome_filme = implode(explode(" ",$value),"%20");
            echo "<a href='https://www.themoviedb.org/search?query=$nome_filme&language=pt-BR' target='_blank'><li> $value</li></a>";
        }
    }
}

?>
    </fieldset>
</div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.autocomplete');
    var instances = M.Autocomplete.init(elems);
  });
  </script>

</body>
</html>

