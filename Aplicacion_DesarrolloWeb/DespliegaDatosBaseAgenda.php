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

?>
<!-- --------------------------------------------------------------------------------------------- --->

<?php
   require ("Funciones/pie_pagina.php");
   
?>
<th> <a href="Inicio_Ok.php"> regresar </a> </th></tr></table><p>

</body>
</html>