
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
   $Registro=0;
   require ("Funciones/conexion.php");
// Obteniendo la consulta 


$conexion -> close();
	
// ---------------------- Evalua a true ya que $Login esta vacia      --------------------------------
if (empty($TipoUsuario))                           
{   print "Error - No existen permisos, Pongase encontacto con un Administrador";  }

// ---------------------- Entra al sistema con permisos de Administrador  ----------------------------
elseif ($TipoUsuario=="Admin") {
        echo "<p><b>
        <font color=red size=5>
        Haz ingresado al Sistema como Administrador, podr&aacute;s realizar las siguientes acciones: </b><p></font>
		<font color=white>
		<h2><font color= red ><i> Tabla Usuarios </i></h2></font> " ;
    
        echo "<p><p><table border=0 align=center width=80% height=50>";
        echo "<tr>";
		echo "<th><a href='CapturaDatosBaseUsuarios.php'   >Insertar un nuevo registro     </a></th>";
		echo "<th><a href='ActualizaDatosBaseUsuarios.php'>Actualiza un registro          </a></th>";
		echo "<th><a href='EliminaRegistroUsuarios.php'   >Elimina un registro            </a></th>";
		echo "<th><a href='DespliegaDatosBaseUsuarios.php' >Despliega la Tabla de Usuarios </a></th>";
		echo "</tr></table><p><p>";
		
		// ----------------- Datos de Agenda ----------------------------------------------------------
		
		echo "<center><hr width='80%'></center>";
		echo "<p><font color=white>
		<h2><i>Tabla Agenda </i></h2></font>";
		
		        echo "<p><p><table border=0 align=center width=80% height=50>";
        echo "<tr>";
		echo "<th><a href='CapturaDatosBaseAgenda.php'   >Insertar un nuevo registro </a></th>";
		echo "<th><a href='ActualizaDatosBaseAgenda.php'>Actualiza un registro      </a></th>";
		echo "<th><a href='EliminaRegistroAgenda.php'   >Elimina un registro        </a></th>";
		echo "<th><a href='DespliegaDatosBaseAgenda.php' >Despliega la Agenda        </a></th>";
		echo "</tr></table><p><p>";

					
}

// ---------------------- Entra al Sistema con permisos de Usuario  -----------------------------------
elseif ($TipoUsuario=="Usuario" ) { 
  echo "<p>
        
        Haz ingresado al Sistema para consultar la Agenda, podr&aacute;s realizar las siguientes acciones: <p>";
  
  echo "<p><p><table border=0 align=center width=80% height=200>";
  echo "<tr>";
  echo "<th><a href='CapturaDatosBaseAgenda.php'   >Insertar un nuevo registro </a></th>";
  echo "<th><a href='ActualizaDatosBaseAgenda.php'>Actualiza un registro      </a></th>";
  echo "<th><a href='EliminaRegistroAgenda.php'   >Elimina un registro        </a></th>";
  echo "<th><a href='DespliegaDatosBaseAgenda.php' >Despliega la Agenda        </a></th>";
  echo "</tr></table><p><p>";

}
?>
<!-- --------------------------------------------------------------------------------------------- --->

<?php
   require ("Funciones/pie_pagina.php");
?>

</body>
</html>