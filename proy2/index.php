<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta naem="viewport" content="width=device-width,initial-scale=1.0">
	<title>TiendaGames</title>
	<!--font awesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<!--! font OSWAL -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&display=swap" rel="stylesheet">
	<!--css personalizado-->
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="container">
		<nav class="nav-main">
			<img src="https://gifimage.net/wp-content/uploads/2017/11/gif-sin-fondo-baile-6.gif" alt="Logo tienda" class="nav-brand">
		<ul class="nav-menu">
			<li><a href='#'>Nosotros</a></li>
			<li><a href="#">Pedidos</a></li>
			<li><a href="#">Informacion</a></li>
			<li><a href="#">Promociones</a></li>
		</ul>

		<ul class="nav-menu-rigtht">
			<li>
				<a href="#">
					<i class="fas fa-search"></i>
				</a>
			</li>
		</ul>
		</nav>
		<hr>

		<!--showcase-->
		<header class="showcase">
			<h2>El Juego del momento</h2>
			<p>Hitman 3 es un videojuego de sigilo desarrollado y publicado por IO Interactive. Fue lanzado el 20 de enero de 2021 en PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S, Nintendo Switch, Microsoft Windows y Stadia.</p>
		 <a href="#" class="btn">
        SignUp <i class="fas fa-chevron-right"></i>
      	</a>
			
		</header>

<div class="game-cards">
		 <?php
          $query = "SELECT * FROM videojuego";
          $result_games = mysqli_query($conn, $query);    
          while($row = mysqli_fetch_assoc($result_games)) { ?>
          		<div>
          		<form>
		        <img src="<?php echo $row['imagen']?>" alt="" />
		        <h3><?php echo $row['nombre']?></h3>
		        <p><?php echo $row['descripcion']?>
		        </p>
		        <h3>$ <?php echo $row['precio']?></h3>
		        <button>Añadir al carrito</button>
		        </form>
		        </div>
          <?php } ?>


    </div>
</div>

</body>
</html>