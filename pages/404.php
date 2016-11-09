  <table width="37%" border="0">
    <tr> 
      <td width="86%">
	  <input type="text" name="texto" class="formbusc" onFocus="if (this.value == 'Digite aqui sua pesquisa & Aperte Enter.') {this.value = ''}" onBlur="if (this.value == '') {this.value = 'Digite aqui sua pesquisa & Aperte Enter.'}" style="width:600px;" value="Digite aqui sua pesquisa & Aperte Enter.">
	  <input class="btn btn-success" name="sb1" type="submit" value="Pesquisar" onclick="java script:confere();" style="font-family: 'Arial'; font-size: 12px;visibility:hidden;">
      </td>
      <td width="14%"> 
        <?php

//Definindo Variáveis

settype($texto,'string');
settype($id,'string');
settype($arquivo,'string');
settype($conteudo,'string');
settype($sentinela,'integer');

//Array Que Guarda Os Nomes
//Dos Arquivos Disponiveis
//Para Pesquisa

$arquivo2[0] = "arquivos/adivinha.txt";
$arquivo3[0] = "ADVINHA (Lulu Santos)";

$arquivo2[1] = "arquivos/baby.txt";
$arquivo3[1] = "BABY (Caetano Veloso)";

$arquivo2[2] = "arquivos/madalena.txt";
$arquivo3[2] = "MADALENA (Gilberto Gil)";

$arquivo2[3] = "arquivos/buscnet.txt";
$arquivo3[3] = "Busc.Net - V1.2";

//Variável Que Guarda
//O Número De Aruivo
//Contido No Array

$contador=3;

//Gera O Loop Exibindo
//Todos Os Arquivos Em
//Que Foram Positiva A Pesquisa

if($texto !="")
{
echo "<ul>";
for($i=0;$i<$contador;$i++){
 
$arquivo ="$arquivo2[$i]";
$arquivoB ="$arquivo3[$i]";

$id = fopen($arquivo, "r"); 

$conteudo = fread($id,filesize($arquivo));

//Apenas um truque para que alguns
//caracteres não dê erro

 if($texto=="*" ||$texto=="?" ||$texto=="+")
   {$texto="\$texto";}

   if($texto=="[" ||$texto=="(" )
   {$texto="çç{%ÇÇÇ";}
   
   
   //Analiza a palavra inserida, Procura
   //em todos os arquivos colocados no array
   //e retorna o valor
  
	if(!feof ($id)== eregi($texto,$conteudo)  )
	
		
	{echo "<li  style='text-indent : 30px'><a href="."$arquivo".">$arquivoB</a></li><BR>"; 
	
	$sentinela=1;
	 }
	
	}
	echo "</ul>";
	//Caso A palavra não exista, a
	//variável não assume valor algum
	//e é impressa a mensagem abaixo
	
	if(!$sentinela )
	{echo "<font size=3 color='red'>&nbsp;&nbsp;Desculpe Mas Essa Palavra Não Foi  Encontrada</font>";}
	}
		
			 
?>
      </td>
    </tr>
  </table>