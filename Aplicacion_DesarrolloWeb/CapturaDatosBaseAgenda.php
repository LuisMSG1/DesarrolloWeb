<html>
<head>
<?php 
   $titulo=" - Captura de Datos - ";#para hacer dinamico
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
<form method='GET' action='InsertaDatosBaseAgenda.php'>
<label><center><h3> Introduce los siguientes datos en la Agenda : </h3> </center></label> 
<table align='center'>
<tr><td><label> Nombre completo   </label> </td><td><input type='text' name='Nombre'     size='45' ></td></tr>
<tr><td><label> Correo Electr&oacute;nico</label> </td><td><input type='text' name='Correo'     size='30'></td></tr>
<tr><td><label> Telefono /Celular </label> </td><td><input type='text' name='Telefono'   size='10'></td></tr>
<tr><td><label> Comentario        </label> </td><td><input type='text' name='Comentario' size='50'></td></tr>
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