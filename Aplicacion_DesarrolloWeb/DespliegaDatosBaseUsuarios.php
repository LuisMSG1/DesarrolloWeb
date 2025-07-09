<html>
<head>
<?php 
   $titulo=" - Consultas - ";#para hacer dinamico
   require ("Funciones/encabezado.php");
?>
</head>
<body >
<?php
   require ("Funciones/cuerpo.php");
?>
<!-- --------------------------------------------------------------------------------------------- --->
<?PHP
echo "<hr width=80%><p>";
$Registro=1;
	require ("Funciones/conexion.php");

require("Funciones/Toda_Tabla.php");

echo "<p><p><hr width=80%><p>";
$conexion -> close();	

?>
<!-- --------------------------------------------------------------------------------------------- --->

<?php
   require ("Funciones/pie_pagina.php");
   
?>
<th> <a href="Inicio_Ok.php"> regresar </a> </th></tr></table><p>

</body>
</html>