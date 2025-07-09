<html>
<head>
<?php 
   $titulo=" - Insercion - ";#para hacer dinamico
   require ("Funciones/encabezado.php");
?>
</head>
<body >
<?php
   require ("Funciones/cuerpo.php");
?>
<!-- --------------------------------------------------------------------------------------------- --->
<?php
$Registro=1;
require("Funciones/conexion.php");
$sql = "Select Id_Agenda from agenda order by Id_Agenda";
//echo $sql;
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
        // Mostrar cada fila
        while($fila = $resultado->fetch_assoc()) {
            //echo "Tipo: ".$fila["Tipo"];
            			//echo "Hola".$ID;
            $ID=$fila["Id_Agenda"];
            $ID=$ID+1;
			//echo "<p> El Id sera:".$ID=$ID+1;
        }
    } else {
        $ID=1;
    }

// echo "ID=".$ID;
$Nombre_Completo=$_GET["Nombre"];
$Correo=$_GET["Correo"];
$Telefono=($_GET["Telefono"]);
//echo $Telefono;
$Comentario=$_GET["Comentario"];
$sql = "SELECT usuario_id from usuario where Clave='{$_SESSION['Login']}'";
//echo $sql;
$resultado=$conexion->query($sql);
while($row=$resultado->fetch_assoc()){
	$usuario_id=$row["usuario_id"];
}

$sql = "INSERT INTO agenda 
             VALUES ('$Nombre_Completo','$Correo',$Telefono,'$Comentario',$ID,$usuario_id)";
//echo $sql;
$resultado = $conexion->query($sql);

$sql="SELECT * from agenda WHERE usuario_id=$usuario_id order by 'Id_Agenda' ";
//echo $sql;
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
?>
<!-- --------------------------------------------------------------------------------------------- --->

<?php
   require ("Funciones/pie_pagina.php");   
?>
<th> <a href="Inicio_Ok.php"> regresar </a> </th></tr></table><p>

</body>
</html>