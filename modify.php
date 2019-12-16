<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<meta charset="UTF-8">
		<title>
			Página de futbol
		</title>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>
	<body>
		<?php 
		if(isset($_POST["btn-modify"])){
			$servidor = "localhost";
			$usuari = "root";
			$password = "";
			$db = "futbol";
			$codi=$_POST['codi'];
			$nom=$_POST['nom'];
			$localitat=$_POST['localitat'];
			$web=$_POST['web'];
			$escut=$_POST['escut'];
			
			// Create connection
			$conn = new mysqli($servidor, $usuari, $password, $db);
			$conn->set_charset("utf8");
			// Check connection
			if ($conn->connect_error) {
				die("Connexió KO: " . $conn->connect_error);
			} else {
				$sql = "UPDATE equips SET nom = '".$nom."', localitat = '".$localitat."', web = '".$web."', escut = '".$escut."'
							WHERE codi = " . $codi;
							
					if ($conn->query($sql) === TRUE) {
						echo "Registre canviat amb èxit";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

				$conn->close();
			}
			};
		if(isset($_GET["modal"])){
			if($_GET["modal"]=="1"){
				$id = $_GET['id'];
			$servidor = "localhost";
			$usuari = "root";
			$password = "";
			$db = "futbol";
			
			// Create connection
			$conn = new mysqli($servidor, $usuari, $password, $db);
			$conn->set_charset("utf8");
			// Check connection
			if ($conn->connect_error) {
				die("Connexió KO: " . $conn->connect_error);
			} else {
					$sql = "SELECT nom, localitat, web, escut FROM equips
							WHERE codi = " . $id;
							$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
							$nom=$row["nom"];
							$localitat=$row["localitat"];
							$webdb=$row["web"];
							$escutdb=$row["escut"];
							echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>';
							echo '<script>$( document ).ready(function() {$(".modal").fadeIn();});</script>';
						}	
				$conn->close();					
			}
			}
			}
		}
		?>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="./"><i class="fas fa-home"></i>Inicio</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Mostrar   <i class="far fa-eye"></i>
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="mostrar1.php">Equipos</a>
				  <a class="dropdown-item" href="mostrar2.php">Títulos</a>
				</div>
			  </li>
			  <li>
				<a class="dropdown-item"href="insert.php"><i class="fas fa-plus-square"></i>   Insertar</a>
			  </li>
			  <li>
				<a class="dropdown-item" href="modify.php"><i class="fas fa-exchange-alt"></i>   Modificar</a>
			  </li>
			  <li>
				<a class="dropdown-item" href="delete.php"><i class="fas fa-trash-alt"></i>   Eliminar</a>
			  </li>
			</ul>
		  </div>
		</nav>
		<table class="table table-striped table-dark">
			<tr>
				<th>Nº</th>
				<th>Nom</th>
				<th>Localitat</th>
				<th>Web</th>
				<th>Escut</th>
			</tr>	
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "futbol";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			$conn->set_charset("utf8");
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT codi, nom, localitat, web, escut FROM equips";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					if($row["web"] == null){
						$web="No tiene web";
					}else{
						$web='<a href="'.$row["web"].'" target="_blank">'.$row["web"].'</a>';
					}
					if($row["escut"] == null){
						$escut='<img src="img/notfound.png" width="75em" height="auto">';
					}else{
						$escut="<img src=".$row["escut"]." width='60em' height='auto'>";
					}
					echo  '<tr><td>'.$row["codi"].'</td><td>'.$row["nom"].'</td><td>'.$row["localitat"].'</td><td>'.$web.'</td><td>'.$escut.'</td><td><a href="?modal=1&id='.$row["codi"].'"><i class="fas fa-feather-alt fa-3x btn" style="color:lime"></i></a></td></tr>';
					
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
		</table>
		<!-- Modal -->
		<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Se estan modificando la siguiente información:</h5>
				<button type="button" class="close" onclick="$('.modal').fadeOut()">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<form method="post" action="modify.php">
				  <div class="form-group">
					<label for="exampleInputEmail1">Nom</label>
					<input type="text" class="form-control" name="nom" value="<?php echo $nom ?>">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Localitat</label>
					<input type="text" class="form-control" name="localitat" value="<?php echo $localitat ?>">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Pàgina Web</label>
					<input type="text" class="form-control" name="web" value="<?php echo $webdb ?>">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Escut</label>
					<input type="text" class="form-control" name="escut" value="<?php echo $escutdb ?>">
				  </div>
				 <input type="hidden" name="codi" value="<?php echo $id?>">
				 <div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="btn-modify" value="Guardar cambios">
					<button type="button" class="btn btn-secondary" onclick="$('.modal').fadeOut()">Cancelar</button>
				  </div>
				</form>
			  </div>
			  
			</div>
		  </div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html>