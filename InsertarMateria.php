
<?php
	require_once ('codes/header.php');
	require_once ('codes/nav.php');
	$formulario = TRUE;
	if(isset($_REQUEST["control"])){
		$claveMateria = $_REQUEST["txtClaveMateria"];
		$descripcion = $_REQUEST["txtDescripcion"];
		$carrera = $_REQUEST["txtCarrera"];
		$comentarios = $_REQUEST["txtComentarios"];
		$claveProfesor = $_REQUEST["slcClaveProfesor"];
		$sql = $db->Execute("INSERT INTO materias(cve_materia, descripcion, carrera, comentarios,cve_profesor) Values(".$claveMateria.", '".$descripcion."', '".$carrera."', '".$comentarios."', '".$claveProfesor."')", array(''));
		$formulario=FALSE;
	}
?>

<?php if($formulario){?>
	<form method="post" action="InsertarMateria.php">
		<input type="hidden" name="control" value="12345">
		Clave Materia:<br>
		<input type="text" name="txtClaveMateria" ><br>
		Descripción:<br>
		<input type="text" name="txtDescripcion" ><br>
		Carrera:<br>
		<input type="text" name="txtCarrera" ><br>		
		Comentarios:<br>
		<input type="text" name="txtComentarios" ><br>
		Profesor:
		<select name="slcClaveProfesor">
			<option value="">Seleccione un profesor</option>
			<?php 
				$sql = $db->Execute("SELECT * FROM profesores", array(''));
				foreach ( $db->GetArray( ) as $HHFW => $row ){?>
				<option value="<?=$row["cve_profesor"];?>"><?=$row["Nombre"]." ".$row["Apellidos"];?></option>
				<?php } ?>
		</select><br>
		<input type="submit" value="Guardar">

	</form>
<?php }else{ ?>
	<h2>Se inserto una nueva materia</h2><br>
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th>cve_materia</th>
				<th>descripcion</th>
				<th>carrera</th>
				<th>comentarios</th>
				<th>cve_profesor</th>
			</tr>
		</thead>
		<?php
			$sql = $db->Execute("SELECT * FROM materias", array(''));
			foreach ( $db->GetArray( ) as $HHFW => $row ){
				print("<tr>");
				print("<td>".$row["cve_materia"]."</td>");
				print("<td>".$row["descripcion"]."</td>");
				print("<td>".$row["carrera"]."</td>");
				print("<td>".$row["comentarios"]."</td>");
				print("<td>".$row["cve_profesor"]."</td>");
				print("</tr>");
			}
		?>
	</table>
<?php } ?>
<?php
	require_once ('codes/footer.php');
?>