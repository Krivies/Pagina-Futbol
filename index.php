<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<meta charset="UTF-8">
		<title>
			Página de futbol
		</title>
	
	</head>
	<body>
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
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
			<div class="carousel-item active"
>
			  <img class="d-block w-100" src="img/1.jpg" height="60%" alt="First slide">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="img/2.jpg" height="60%" alt="Second slide">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="img/3.jpg" height="60%" alt="Third slide">
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		<div class="jumbotron">
		  <h1 class="display-4">¡Estas de suerte!</h1>
		  <p class="lead">Al entrar en esta página has accedido a nuestro concurso entre los visitantes.¡Y TE HA TOCADO A TÍ!</p>
		  <hr class="my-4">
		  <p>Para recoger tu premio, que es nada más y nada menos que unas entradas para ver la final de la liga F.C.Barcelona VS Real Madrid.Solo debes hacer click sobre el botón que hay aquí abajo.</p>
		  <p class="lead">
			<a class="btn btn-primary btn-lg" href="aina.php" role="button">Recoge tu premio</a>
		  </p>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html>