
<?php

require_once ('connection.php');
?>

<<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<select class="form-control">
		
		<option value="">Seleccione un usuario</option>
		<?php 
			$sql = $db->Execute("SELECT * FROM profesores", array(''));
			foreach ( $db->GetArray( ) as $HHFW => $row ){?>
			<option value="<?=$row["cve_profesor"];?>"><?=$row["Nombre"]." ".$row["Apellidos"];?></option>
			<?php } ?>
	</select>
		<?php
			//$sql = $db->Execute("INSERT INTO materias(cve_materia, descripcion, carrera, comentarios,cve_profesor) Values('9999','Contabilidad','CON','Temario2019','99999')", array(''));
			
		?>
</body>
</html>