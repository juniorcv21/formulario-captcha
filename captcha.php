<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CAPTCHA</title>
	<link rel="stylesheet" type="text/css" href="captcha.css?202">
	<script type="text/javascript" src="enlace.js?2020"></script>
</head>
<body>

	<div id=sucesion><br>
		<div id="h2">Regístrese en la Plataforma</div>

	<form method="POST" action="#">
		Nombre:<input type="text" id ="campo1" name="nombre"class="field" required><br>
		Apellidos:<input type="text" id ="campo2" name="nombre"class="field" required><br>
		G-mail @:<input type="text" id ="campo3" name="nombre"class="field" required><br>
		Teléf.📞<input type="number" id ="campo4" maxlength="9" minlength="9" name="nombre"class="field" required><br>
		<div id="imagen"><a href="captcha.php"><img src="imagen.png" id="img1" onclick="generar_captcha()"></a>
		<input type="text" name="valorc" id="valorc" class="captcha" value='<?php echo generar_captcha();?>' size="4" class="field" readonly><br>
		<input type="text" name="base" id="base" placeholder="TipeaElTexto" required></div><br>
		<input type="button" onclick="validar();" class="field2" value="Ingresar">
	</form>
	<img src="undc2.png" id="img2">
	<img src="sistemas.jpg" id="img3">

	</div>


</body>
</html>

<?php
	function generar_captcha(){
		$captcha="";
		$parametros = array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","x","y","z");
		$length=count($parametros)-1;


		for ($i=0; $i < 5 ; $i++) { 
			$rand = rand(0,$length);
			$captcha.=$parametros[$rand];
		}
		return $captcha;
	}
	
?>