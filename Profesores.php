<?php
	require_once ('codes/header.php');
	require_once ('codes/nav.php');
?>


	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th>cve_profesor</th>
				<th>Nombre</th>
				<th>Apellidos</th>
			</tr>
		</thead>
		<?php
			$sql = $db->Execute("SELECT * FROM profesores", array(''));
			
			foreach ( $db->GetArray( ) as $HHFW => $row ){
				print("<tr>");
				print("<td>".$row["cve_profesor"]."</td>");
				print("<td>".$row["Nombre"]."</td>");
				print("<td>".$row["Apellidos"]."</td>");
				print("</tr>");
			}
		?>
		
	</table>
<?PHP
	require_once 'codes/header.php';
?>