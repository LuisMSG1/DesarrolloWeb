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
echo "<th>Id_Usuario</th>";
echo "<th>Nombre_Completo</th>";
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

// -------------------------------- Registro a Eliminar ---------------------------------
echo "<form method='GET' action='BorrandoRegistroAgenda.php'>
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