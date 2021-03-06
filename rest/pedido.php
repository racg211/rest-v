<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ragno" >
    <title>Restaurante</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../rest/css/bootstrap.min.css" >

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../rest/css/shop-homepage.css" >

  <link rel='stylesheet' href='../rest/css/font'>


      <link rel="stylesheet" href="../rest/css/style.css">

  </head>

  <body>

     <header class="hf">
  <nav>
    <h2><a href="#" id="logo">☆</a></h2>
    <button class="nav-button fa fa-bars"></button>
    <div>
<!--     <ul> -->
      <ul>
        <button class="exit-menu fa fa-times"></button>
        <li><a href="../controlador/con_logout.php" >Inicio</a></li>
        <li><a href="../rest/delivery.html" class="active">Delivery</a></li>
      </ul>
<!--     </ul> -->
    </div>
  </nav>
  <div class="center">
    <h1 class="alex-brush">Solicita tu menu</h1>
    <h1></h1>
    <h2>La Boveda</h2>
    <span id="asterisk">*</span>
    <p>Listos para servir</p>
  </div>
</header>

    <!-- Page Content -->
<div class="container" style="padding: 5rem;">

<form class="agregar" method="POST" action="../controlador/con_orden.php">
  <div class="center-text">
    <h2 class="custom-font" style="font-size: 3rem;">Formulario de Pedido</h2>
  </div>
    

<?php


if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['menu1'])){
   echo '<div class="ordenes">'.$_SESSION["menu1"].'</div>'; ;
}

if(isset($_SESSION['menu2'])){
   echo '<div class="ordenes">'.$_SESSION["menu2"].'</div>';
}

if(isset($_SESSION['menu3'])){
   echo '<div class="ordenes">'.$_SESSION["menu3"].'</div>';
}

if(isset($_SESSION['menu4'])){
   echo '<div class="ordenes">'.$_SESSION["menu4"].'</div>';
}

if(isset($_SESSION['menu5'])){
   echo '<div class="ordenes">'.$_SESSION["menu5"].'</div>';
}

if(isset($_SESSION['menu6'])){
   echo '<div class="ordenes">'.$_SESSION["menu6"].'</div>';
}

/*$num =count($menus);

for($n=0; $n<$num; $n++) {

	echo '<div class="ordenes">'.$menus[$n].'</div>';}*/
?>



  <div class="form-group">
  

  
	<div class="minput">
    	<label for="nombre">Nombre</label>
   	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre">	
	</div>  
   
	<div class="minput">
		<label for="apellido">Apellido</label>
		<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese Apellido">
	</div>  
    
	<div class="minput">
		<label for="direccion">Dirección</label>
		<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese Dirección">
	</div>    
	
	<div class="minput">
		<label for="cantidad">Cantidad</label>
		<input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Ingrese Cantidad">
	</div>
	
	<div class="minput text-center">
		<button type="submit"  class="btn btn-default btn-lg" >Enviar</button>
	</div>                
     
  </div>
  
  
</form>
  


</div>
    <!-- /.container -->

    <!-- Footer -->
    <footer>
  
  <div class="restaurant-info">
  
    <div class="locations">
      <h4>LOCATIONS</h4>
      <div class="location-1">
        <h5> Av. José Antonio Páez<br />Caracas, Distrito Capital &#8212; 1020</h5>
      </div>
      <div class="location-2">
        <h5>Calle San Felipe<br />Caracas, Distrito Capital &#8212; 1060</h5>
      </div>
    </div>

    <div class="hours">
      <h4>Horario</h4>
      <div class="weekdays">
        <h5>Lunes - Jueves<br />
          5:30pm - 10:00pm
        </h5>
      </div>
      
      <div class="weekends">
        <h5>Viernes & Sabados<br />
          5:30pm - 11:00pm
        </h5>
      </div>
      
      <div class="private-events">
        <h5>Disponible para eventos<br />
          privados el domingo
        </h5>
      </div>
      
    </div>
    
  </div>
</footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../rest/js/jquery/jquery.min.js"></script>
    <script src="../rest/js/bootstrap/js/bootstrap.bundle.min.js"></script>
   

  </body>

</html>