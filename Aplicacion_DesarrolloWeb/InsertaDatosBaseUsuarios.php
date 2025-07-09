<html>
<head>
<?php 
   $titulo=" - Insercion Usuario - ";#para hacer dinamico
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
$sql = "Select usuario_id from usuario order by usuario_id";
//echo $sql;
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
        // Mostrar cada fila
        while($fila = $resultado->fetch_assoc()) {
            //echo "Tipo: ".$fila["Tipo"];
            $ID=$fila["usuario_id"];
            $ID=$ID+1;
			//echo "Hola".$ID;
			//echo "<p> El Id sera:".$ID=$ID+1;
        }
    } else {
        $ID=1;
    }

// echo "ID=".$ID;
$Nombre_Usuario=$_GET["Clave"];
$Contraseña=$_GET["Contraseña"];
$Nombre_Completo=($_GET["Nombre"]);
$Tipo_Usuario=($_GET["TipoUsuario"]);

$sql = "INSERT INTO usuario 
             VALUES ($ID,'$Nombre_Usuario','$Contraseña','$Nombre_Completo','$Tipo_Usuario')";
//echo $sql;

$resultado = $conexion->query($sql);

    require ("Funciones/Toda_Tabla.php");

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