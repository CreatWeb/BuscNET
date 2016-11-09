<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title; ?></title>
<!---BootsTrap--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!---Estilo Novo: V1.0--->
<link href="css/font-awesome.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.min.css" rel='stylesheet' type='text/css' />
<!---Estilo CSS--->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!---JS/Metas--->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- Barra De Rolagem -->
<style type="text/css">
::-webkit-scrollbar {background: #99cc00;} /* barra de rolagem toda */ 
::-webkit-scrollbar-thumb {background: #000000;} /* parte da barra que se movimenta */ 
::-webkit-scrollbar-button {background:#ffffff;} /* ponta da barra de rolagem */ 
::-webkit-scrollbar-track {background:#ffffff;} /* fundo da barra de rolagem, parte fixa */ 
::-webkit-scrollbar-track-piece {background:#ffffff;} /* fundo da barra de rolagem, parte que ainda falta rolar */ 
::-webkit-scrollbar-corner {background:#99cc00;} /* canto inferior direito da barra de rolagem */

</style>
<!-- Barra De Rolagem -->
<script>
	new WOW().init();
</script>
<script language="JavaScript">
	  function confere(){
		var nome1= document.form1.txtnome.value
		var empresa1= document.form1.txtempresa.value
		var email1= document.form1.txtemail.value
		  if(nome1=="" || empresa1=="" || email1==""){
			alert("Por favor, preencha todos os campos")
		  }
		  else{
		   document.getElementById("botao").style.visibility = "visible";
			  }
	  }										
	</script>
</head>
<body>
<div class="ink1"></div>
<div class="ink1"></div>
<div class="ink2"></div>
<div class="ink3"></div>
<a class="menu" href="<?php echo $home; ?>" class="bottom"><i class="fa fa-home" aria-hidden="true"></i> Inicio </a>
<a class="menu" href="<?php echo $web; ?>" class="bottom"><i class="fa fa-photo" aria-hidden="true"></i> Web </a>
<a class="menu" href="<?php echo $images; ?>" class="bottom"><i class="fa fa-photo" aria-hidden="true"></i> Images </a>
<a class="menu" href="<?php echo $videos; ?>" class="bottom"><i class="fa fa-photo" aria-hidden="true"></i> Videos </a>
<a class="menu" href="<?php echo $news; ?>" class="bottom"><i class="fa fa-photo" aria-hidden="true"></i> News </a>
<a class="menu" href="<?php echo $facebook; ?><?php echo $fb_user; ?>" class="bottom" target="new"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook </a>
<div class="ink3"></div>

