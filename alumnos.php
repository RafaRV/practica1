
<?php

require_once ('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th>No. Cuenta</th>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Materia</th>
				<th>Editar</th>
				<th>Borrar</th>
			</tr>
		</thead>
		<?php
			$sql = $db->Execute("SELECT a.nocta, a.nombre, a.apat, a.amat, m.descripcion FROM alumnos a INNER JOIN materias m ON a.cve_materia = m.cve_materia", array(''));
			
			foreach ( $db->GetArray( ) as $HHFW => $row ){
				print("<tr>");
				print("<td>".$row["nocta"]."</td>");
				print("<td>".$row["nombre"]."</td>");
                print("<td>".$row["apat"]."</td>");
                print("<td>".$row["amat"]."</td>");
				print("<td>".$row["descripcion"]."</td>");
				print("<td><input type='button' name='buysell' value='Editar'></td>");
  				print( "<td><input type='button' name='buysell' value='Borrar'></td>");
				print("</tr>");
			}
		?>
		
	</table>
</body>
</html>