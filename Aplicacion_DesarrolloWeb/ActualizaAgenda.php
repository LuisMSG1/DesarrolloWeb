<html>
<head>
<?php 
   $titulo=" - Datos Actualizados - ";#para hacer dinamico
   require ("Funciones/encabezado.php");
?>
</head>
<body >
<?php
   require ("Funciones/cuerpo.php");
?>
<!-- --------------------------------------------------------------------------------------------- --->
<?PHP

$Id=$_GET["Id_Agenda"];
//echo $Id."<br>"; 
$Nombre_Completo=$_GET["Nombre"];
//echo $Nombre."<br>";
//$Correo=$_GET["Correo"];
//echo $Correo."<br>";
$Telefono=$_GET["Telefono"];
//echo $Telefono."<br>";
$Comentario=$_GET["Comentario"];
//echo $Comentario."<br>";

$Recorrer= array("Nombre_Completo","Telefono","Comentario");
$Registro=1;
require ("Funciones/conexion.php");
foreach ($Recorrer as $nombreVar)
{
	if ($$nombreVar != "")
	{
		$variable=$$nombreVar;
		$sql="UPDATE agenda Set $nombreVar='$variable' Where Id_Agenda=$Id";
		$conexion->query($sql);
		//echo $sql;
	}
}


						 


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

?>
<!-- --------------------------------------------------------------------------------------------- --->

<?php
   require ("Funciones/pie_pagina.php");
   
?>
<th> <a href="Inicio_Ok.php"> regresar </a> </th></tr></table><p>

</body>
</html>