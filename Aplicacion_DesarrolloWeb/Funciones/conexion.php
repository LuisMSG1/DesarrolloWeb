<?php
    session_start();
    if ($Registro==0)
    {
            $_SESSION["Login"]=$_GET["Login"];
    // echo $Login."<br>";
            $_SESSION["Pass"]=$_GET["Password"];
    // echo $Pass."<br>";

    }
    $Servidor="localhost";
    $Usuario="root";
    $Password="";
    $Base="proyectophp";
    // Crear la conexión
    $conexion = mysqli_connect($Servidor, $Usuario, $Password, $Base);

    //Verificar la conexion
    if ($conexion -> connect_errno) {
    echo "Fallo la conexion con MySQL: ". $mysqli -> connect_error;
    exit();
    }

    echo "Conexión exitosa a MySQL usando MySQLi"; 

    if ($Registro==0)
    {
        $sql = "SELECT Tipo FROM Usuario WHERE Clave='{$_SESSION['Login']}' AND password='{$_SESSION['Pass']}'";
    //echo $sql;
    $resultado = $conexion->query($sql);
    // Verificar si hay resultados
    if ($resultado->num_rows > 0) {
        // Mostrar cada fila
        while($fila = $resultado->fetch_assoc()) {
            //echo "Tipo: ".$fila["Tipo"];
            $TipoUsuario=$fila["Tipo"];
        }
    } else {
        echo "No se encontraron resultados";
    }
    }
    $Registro=1;
    
?>