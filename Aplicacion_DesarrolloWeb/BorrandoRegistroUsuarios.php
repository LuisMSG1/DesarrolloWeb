<html>
<head>
<?php 
   $titulo=" - Borrando Registro Agenda - ";#para hacer dinamico
   require ("Funciones/encabezado.php");
?>
</head>
<body >
<?php
   require ("Funciones/cuerpo.php");
?>
<!-- --------------------------------------------------------------------------------------------- --->
<?PHP
$Registro=1;
$Id=$_GET["Id_Agenda"];
//echo $Id."<br>"; 

echo "<hr width=80%><p>
     <h3> Datos Actualizados, registro <font color='red'> $Id </font> ha sido eliminado</h3>";

 require ("Funciones/conexion.php");
// ---------------------- Borrado del registro seleccionado ----------------------------
$sql="Delete from usuario Where usuarios_id=$Id";
$resultado=$conexion->query($sql);
// ---------------------- Desplegado de la Tabla Agenda --------------------------------
echo "<hr width=80%><p>";


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