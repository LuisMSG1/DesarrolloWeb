<?php
$sql="SELECT * from usuario order by 'usuario_id'";
$resultado=$conexion->query($sql);
echo "<center><table border=1 width=80%>";
echo "<tr><th>Usuario_id</th>";
echo "<th>Clave</th>";
echo "<th>Contraseña</th>";
echo "<th>Nombre</th>";
echo "<th>Tipo</th></tr>";
while($row=$resultado->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$row["usuario_id"]."</td>";
		echo "<td>".$row["clave"]."</td>";
		echo "<td>".$row["password"]."</td>";
		echo "<td>".$row["nombre"]."</td>";
		echo "<td>".$row["tipo"]."</td>";
		echo "</tr>";
}
echo "</table></center>";
?>