<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>

	<style> 
		.resaltar {
			color: red;
			background-color: green;
			font-weight: bold;
			text-align: center;}
	</style>
</head>
<body>
<p class="resaltar"> hola parrafossss</p>
<?php
echo '<p class="resaltar">Esto es un ejemplo de parrafo creado con comillas simples</p>';
echo "<p class='resaltar'> Esto es un ejemplo de parrafo creado con comillas dobles</p>";
echo "<p class=\"resaltar\"> Esto es un ejemplo de parrafo creado con barra separadora</p>";

//para comparar cadenas strcmp diferencia mayusculas
//y strcasecmp no diferencia mayusculas

$cadena1="herman";
$cadena2="HERMAN";

$resultado=strcmp($cadena1, $cadena2); //devuelve 1 si no son iguales y 0 si lo son
if ($resultado) {
	echo "cadenas no son iguales <br>";
}else{
	echo "cadenas son iguales <br>";
}


//echo "El resultado es " . $resultado . "<br>";

$resultado=strcasecmp($cadena1, $cadena2); //devuelve 1 si no son iguales y 0 si lo son
if ($resultado) {
	echo "cadenas no son iguales <br>";
}else{
	echo "cadenas son iguales <br>";
}
//echo "El resultado es " . $resultado . "<br>";
?>
</body>
</html>