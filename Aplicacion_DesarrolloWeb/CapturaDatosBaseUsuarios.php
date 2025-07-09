<html>
<head>
<?php 
   $titulo=" - Captura de Dato Usuarios - ";#para hacer dinamico
   require ("Funciones/encabezado.php");
?>
</head>
<body >
<?php
   require ("Funciones/cuerpo.php");
?>
<!-- --------------------------------------------------------------------------------------------- --->
<?php
echo "<p>
<center><font color='red'>
<h2> Captura </h2>
</font></center>
<hr width='80%'>
<form method='GET' action='InsertaDatosBaseUsuarios.php'>
<label><center><h3> Introduce los siguientes datos para el nuevo usuario : </h3> </center></label> 
<table align='center'>
 
<tr><td><label> Nombre de Usuario </label> </td><td><input type='text' name='Clave'   size='30'></td></tr>
<tr><td><label> Contraseña </label> </td><td><input type='password' name='Contraseña'     size='30'></td></tr>
<tr><td><label> Nombre Completo   </label> </td><td><input type='text' name='Nombre'     size='30' ></td></tr>
<tr><td><label> Tipo de Usuario   </label> </td><td><input type='text' name='TipoUsuario'     size='30' ></td></tr>
<tr><td colspan='2' align='center'><input type='Submit' value='Agregar Datos a la Base'></td></tr></table>

</form><p><hr width='80%'>";

?>
<!-- --------------------------------------------------------------------------------------------- --->

<?php
   require ("Funciones/pie_pagina.php");
?>
    <th> <a href="Inicio_Ok.php"> regresar </a> </th></tr></table><p>

</body>
</html>