<?php
include 'links.php';
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
$arquivo = fopen('funcs.txt','r');//abre o modo read pra leitura
while(!feof($arquivo))//ler o conteúdo do arquivo
{
    $linha = fgets($arquivo, 1024);//pega a linha do documento
    $line = explode(';',$linha);
    $nome = $line[0];
    $funcao = $line[1];
    echo "
    <tbody>
    <tr>
      <td>$nome</td>
      <td>$funcao</td>
      <td> <i class='fa fa-times' aria-hidden='true'></i>
      </td>
    </tr>
  ";
}
fclose($arquivo);//fecha o documento
?>
</tbody>
</table>