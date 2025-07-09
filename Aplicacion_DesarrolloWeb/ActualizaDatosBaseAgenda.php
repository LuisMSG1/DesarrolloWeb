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



$sql="SELECT * from usuario WHERE Clave='{$_SESSION['Login']}'";
//$sql = "SELECT Tipo FROM Usuario WHERE Clave='{$_SESSION['Login']}' AND password='{$_SESSION['Pass']}'";
$resultado=$conexion->query($sql);
while($row=$resultado->fetch_assoc()){
	$ID=$row["usuario_id"];
}
$sql="SELECT * from agenda where usuario_id=$ID order by Id_Agenda";
$resultado=$conexion->query($sql);
echo "<center><table border=1 width=80%>";
echo "<tr><th>Id_Agenda</th>";
echo "<th>usuario_id</th>";
echo "<th>Nombre_Completo Completo</th>";
echo "<th>Correo</th>";
echo "<th>Telefono</th>";
echo "<th>Comentario</th></tr>";
while($row=$resultado->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$row["Id_Agenda"]."</td>";
		echo "<td>".$row["usuario_id"]."</td>";
		echo "<td>".$row["Nombre_Completo"]."</td>";
		echo "<td>".$row["Correo"]."</td>";
		echo "<td>".$row["Telefono"]."</td>";
		echo "<td>".$row["Comentario"]."</td>";
		
		echo "</tr>";
}
echo "</table></center>";


echo "<p><p><hr width=80%><p>";
$conexion -> close();	
echo "<p><p><hr width=80%>";
// -------------------------------- Datos a Actualizar ---------------------------------
echo "<form method='GET' action='ActualizaAgenda.php'>

<h4> Introduce el Id del registro a Actualizar : <input type='text' name='Id_Agenda' size='2'> 
y escribe los Datos a cambiar: </h4> 
<center>
<table>
<tr><td>Nombre completo   </td><td><input type='text' name='Nombre'     size='45'></td></tr>
<tr><td>Correo Electr&oacutenico</td><td><input type='text' name='Correo'     size='30'></td></tr>
<tr><td>Telefono /Celular </td><td><input type='text' name='Telefono'   size='10'></td></tr>
<td>Comentario        </td><td><input type='text' name='Comentario' size='50'>    </td></tr>
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