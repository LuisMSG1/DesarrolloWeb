<html>
<head>
<?php 
   $titulo=" - Datos Actualizados Usuario- ";#para hacer dinamico
   require ("Funciones/encabezado.php");
?>
</head>
<body >
<?php
   require ("Funciones/cuerpo.php");
?>
<!-- --------------------------------------------------------------------------------------------- --->
<?PHP

$Id=$_GET["Usuario_id"];
//echo $Id."<br>"; 
$nombre=$_GET["Nombre_Usuario"];
//echo $Nombre."<br>";
//$Correo=$_GET["Correo"];
//echo $Correo."<br>";
$clave=$_GET["Nombre"];
//echo $Telefono."<br>";
$tipo=$_GET["Tipo_Usuario"];

$password=$_GET["Contraseña"];

//echo $Comentario."<br>";

$Recorrer= array("nombre","tipo","clave","password");
$Registro=1;
require ("Funciones/conexion.php");
foreach ($Recorrer as $nombreVar)
{
	if ($$nombreVar != "")
	{
		$variable=$$nombreVar;
		$sql="UPDATE usuario Set $nombreVar='$variable' Where usuario_id=$Id";
		$conexion->query($sql);
		//echo $sql;
	}
}


						 


echo "<hr width=80%><p>";


require("Funciones/Toda_Tabla.php");

echo "<p><p><hr width=80%><p>"; 

?>
<!-- --------------------------------------------------------------------------------------------- --->

<?php
   require ("Funciones/pie_pagina.php");
   
?>
<th> <a href="Inicio_Ok.php"> regresar </a> </th></tr></table><p>

</body>
</html>