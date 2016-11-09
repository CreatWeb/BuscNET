<!-- 
Nome Do Script: BuscNET
Autor: Ewerson S.
Versão Inicial: V1.0 
Data: 13/Outubro/2016
Suporte: www.BuscNet.tk 
------------------------------------------
Ultima Update: 23/Outubro/2016
Versão [UP]: V1.2
Por: Ewerson S.
-->

<?php
	//Tags
	$title="BuscNET - Seu Site De Busca.";
	$sitename="BuscNET";
	$url="http://www.buscnet.tk/";
	//Link Menu
	$home="?bN=home";
	$web="?bN=web";
	$images="?bN=images";
	$videos="?bN=videos";
	$news="?bN=news";
	//FaceBook - Ativa Ou Desativa
	$statusfb="true";
	//FaceBook - Link
	$facebook="https://www.facebook.com/";
	$fb_user="DevPixelBrasil";
?>

<?php
$bN = $_GET['bN'];

if ($bN == "home") {
$jogo = "1";
}
if ($bN == "web") {
$jogo = "2";
}
if ($bN == "images") {
$jogo = "3";
}
if ($bN == "videos") {
$jogo = "4";
}
if ($bN == "news") {
$jogo = "5";
}

/*Erros*/


if ($rP == "404") {
$jogo = "404";
}
?>

<?php
include './themer/header.php';
	/*Pages*/
  if ($jogo  ==  "1") { include "./pages/form.php"; }
  elseif ($jogo == "2") { include "./pages/web.php"; }
  elseif ($jogo == "3") { include "./pages/images.php"; }
  elseif ($jogo == "4") { include "./pages/videos.php"; }
  elseif ($jogo == "5") { include "./pages/news.php"; }
  /*Erros*/
  elseif ($jogo == "404") { include "./pages/404.php"; }
  /*home*/
  else { include "./pages/form.php"; }

include './themer/footer.php';
?>