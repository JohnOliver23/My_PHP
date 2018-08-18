<?php
include 'links.php';
$arquivo = fopen('docs/funcs.txt','r');//abre o modo read pra leitura
//var_dump($_GET);
$count = 0;
if(isset($_GET['deletar'])){
  $indice = 0;
  foreach ($_GET as $key => $value) {
    $indice = $value;
  }
  deleteRow($indice);
}
if(isset($_GET['campoTxt'])){
  $nome = $_GET['campoTxt'];
  $funcao = $_GET['campoFuncao'];
  $indice = $_GET['indice'];
  editRow($nome, $funcao, $indice);
  
}
function editRow($newnome, $newfuncao, $indice){
  $arq = file('docs/funcs.txt');//ler as linhas do arquivo como um vetor de linhas
  foreach ($arq as $key => $value) {//ler linha por linha
    if($key == $indice){
      $newvalue = "$newnome;$newfuncao;\n";//substitui a linha antiga pelos novos valores
      $arq[$key] = $newvalue;
    }
  }
    $arq2 = fopen('docs/funcs.txt','w');//abre o arquivo em modo write
    foreach ($arq as $key => $value) {
      fwrite($arq2, $value);
    }
    fclose($arq2);//fecha o arquivo
}

function deleteRow($chave){
  $arq = file('docs/funcs.txt');//abre o arquivo como um vetor
  foreach ($arq as $key => $value) {
    if($key == $chave)
      unset($arq[$key]);
  }
  $arq2 = fopen('docs/funcs.txt','w');//abre o arquivo modo escrita
  foreach ($arq as $key => $value) {//esceve as novas linhas no arquivo
    fwrite($arq2, $value);
  }
  fclose($arq2);
}
?>
<h3> Funcionários</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Função</th>
      <th scope="col">Settings</th>
    </tr>
  </thead>
  <tbody>
<?php
while(!feof($arquivo))//ler o conteúdo do arquivo
:
    $linha = fgets($arquivo, 1024);//pega a linha do documento
    $line = explode(';',$linha);
    $nome = $line[0];
    if($nome == "")
      break;
    $funcao = $line[1];
    
?>
  <form mehod="get">
    <tr>
      <td><input type='text' name='campoTxt' value='<?=$nome?>'></input></td>
      <td><input type='text' name='campoFuncao' value='<?= $funcao?>'></input></td>
      <input type='hidden' name='indice' value='<?=$count?>'></input>
      <td> <a href='?deletar=<?=$count?>'><i class='fa fa-times' aria-hidden='true'></i></a>
      <button type="submit" ><i class="fa fa-edit" id='lapis'></i> </button>
      </td>
    </tr>
  </form>
<?php
$count++;
endwhile;
fclose($arquivo);//fecha o documento
?>
</tbody>
</table>