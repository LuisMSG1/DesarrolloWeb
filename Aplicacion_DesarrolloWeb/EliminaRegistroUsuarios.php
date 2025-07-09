<html>
<head>
<?php 
	$Registro=1;
   $titulo=" - Eliminacion de Registro - ";#para hacer dinamico
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
require("Funciones/conexion.php");

require("Funciones/Toda_Tabla.php");

echo "<p><p><hr width=80%><p>";
$conexion -> close();

// -------------------------------- Registro a Eliminar ---------------------------------
echo "<form method='GET' action='BorrandoRegistroUsuarios.php'>
<p><h4> Introduce el Id del registro a Eliminar : <input type='text' name='Id_Agenda' size='2'> </h4>";
echo "<center><input type='Submit' value='Eliminar Registro'></center> </form><p>";
?>
<!-- --------------------------------------------------------------------------------------------- --->

<?php
   require ("Funciones/pie_pagina.php");
   
?>
<th> <a href="Inicio_Ok.php"> Cancelar Registro </a> </th></tr></table><p>

</body>
</html>