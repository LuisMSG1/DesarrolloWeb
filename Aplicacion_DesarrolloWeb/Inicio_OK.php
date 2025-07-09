<html>
<head>
<?php 
   $titulo=" - Mi agenda - ";#para hacer dinamico
   require ("Funciones/encabezado.php");
?>
</head>
<body >
<?php
   require ("Funciones/cuerpo.php");
?>
<!-- --------------------------------------------------------------------------------------------- --->
<center>
<form id="form1" name="form1" method="get" action="Entrada_OK.php"   ><p>
   Login    <input type="text" name="Login" value="lm" /><p>
   Password <input Type="password" name="Password"  maxlength="15" value="vacio"/><p>
            <input type="submit" name="Submit" value="Aceptar" /><p>
</form>
</center>
<!-- --------------------------------------------------------------------------------------------- --->

<?php
   require ("Funciones/pie_pagina.php");
?>

</body>
</html>