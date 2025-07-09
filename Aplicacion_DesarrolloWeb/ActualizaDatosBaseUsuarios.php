<html>
<head>
<?php 
   $titulo=" - Actualización Datos - ";#para hacer dinamico
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
 require("Funciones/conexion.php");


echo "<hr width=80%><p>";


require ("Funciones/Toda_Tabla.php");

echo "<p><p><hr width=80%><p>";
$conexion -> close();	
echo "<p><p><hr width=80%>";
// -------------------------------- Datos a Actualizar ---------------------------------
echo "<form method='GET' action='ActualizaUsuarios.php'>

<h4> Introduce el Id del registro a Actualizar : <input type='text' name='Usuario_id' size='2'> 
y escribe los Datos a cambiar: </h4> 
<center>
<table>
<tr><td>Nombre de Usuario / Clave  </td><td><input type='text' name='Nombre'     size='30'></td></tr>
<tr><td>Contraseña</td><td><input type='text' name='Contraseña'     size='30'></td></tr>
<tr><td>Nombre Completo </td><td><input type='text' name='Nombre_Usuario'   size='30'></td></tr>
<td>	Tipo de Usuario        </td><td><input type='text' name='Tipo_Usuario' size='30'>    </td></tr>
<tr><td colspan='2' align='center'><input type='Submit' value='Actualizar Datos'> </td></tr>
</table></form><p></center>";
?>
<!-- --------------------------------------------------------------------------------------------- --->

<?php
   require ("Funciones/pie_pagina.php");
   
?>
<th> <a href="Inicio_Ok.php"> regresar </a> </th></tr></table><p>

</body>
</html>