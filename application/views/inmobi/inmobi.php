<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html>
<head>
<title>Publicar</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Furnyish Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
  <script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>

</head>
<body>
<!-- header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_left">
				<ul>

					<li><a href="contacto">Contact</a></li>|

				</ul>
			</div>
			<div class="top_left">

				<div class="social">
					<ul>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="twitter"></i></a></li>
						<li><a href="#"><i class="dribble"></i></a></li>
						<li><a href="#"><i class="google"></i></a></li>
					</ul>
				</div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<a href="home"><img src="images/logo.png" alt=""/></a>

				<h5>NGC Inmobiliaria</h5>

		 </div>
		 <div class="header_right">
			 <div class="login">
				 <a href="login">LOGIN</a>
			 </div>

		 </div>
		  <div class="clearfix"></div>
	 </div>
</div>
<!--cart-->

<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		 <ul class="megamenu skyblue">
			 <li class="active grid"><a class="color1" href="home">Home</a></li>
			 
			 <li><a class="color6" href="contacto">contacto</a>
			 <li><a class="color6" href="anuncio">Anuncio</a>
			  <li><a class="color6" href="inmobi">publicar</a>
			   <li><a class="color6" href="mapa">Ver Modo Map</a>
       
			   </ul>
			   <div class="search">
				 <form>
					<input type="text" value="" placeholder="Search...">
					<input type="submit" value="">
					</form>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NGC Inmobiliaria</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </head>
  <body>



  <div class="container">
  <center><h3>publicar</h3></center>

 
    <div class="row">

    <form method="post" action="<?php echo base_url('inmobi/guardar');?>">
      <div class="col-md-6">

        <div class="form-group input-group" >
          <span class="input-group-addon">Id:</span>
          <input type="text" readonly class="form-control" value="<?php echo $inmobi->id; ?>" name="id">
        </div>


        <div class="form-group input-group">
          <span class="input-group-addon">Titulo:</span>
          <input type="text" class="form-control" name="titulo" autofocus="on"  value="<?php echo $inmobi->titulo; ?>">
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Direccion</span>
          <input type="text" class="form-control" name="direccion" autofocus="on" value="<?php echo $inmobi->direccion; ?>">
        </div>


		<div class="input-group form-group">
      		<span class="input-group-addon">Tipo</span>
      		<select name="tipo" autofocus="on" class="form-control" value="<?php echo $inmobi->tipo; ?>">
      			<option value="">seleccionar</option>
      			<option value="categoria">casa</option>
      			<option value="categoria">finca</option>
				<option value="categoria">solar</option>
      			<option value="categoria">apartamento</option>
      		</select>
      	</div>

        <div class="form-group input-group">
          <span class="input-group-addon">Precio:</span>
          <input type="text" class="form-control" name="precio" autofocus="on" value="<?php echo $inmobi->precio; ?>">
        </div>

		<div class="input-group form-group">
      		<span class="input-group-addon">Accion</span>
      		<select name="accion" autofocus="on" class="form-control" value="<?php echo $inmobi->accion; ?>">
      			<option value="">seleccionar</option>
      			<option value="categoria">Vender</option>
      			<option value="categoria">Alquilar</option>
      		</select>
      	</div>

		<div class="form-group input-group">
          <span class="input-group-addon">Descripcion:</span>
          <input type="text" class="form-control" name="descripcion" autofocus="on" value="<?php echo $inmobi->descripcion; ?>">
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Foto:</span>
          <input type="file" class="form-control" name="foto[]" autofocus="on"  value="<?php echo $inmobi->foto; ?>" multiple>
        </div>
		
		<div class="contact-map">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> </iframe>
	     </div>


        <div class="text-center">
          <button type="submit" class="acount-btn">guardar</button>
        </div>

    </div>
    </form>
  </div>


    <div>

     <h3>Registros De Inmobi</h3>
     <table class="table">
       <thead>
         <tr>
           <th> Id </th>
           <th> Titulo </th>
           <th> Direccion </th>
           <th> Tipo </th>
           <th> Precio </th>
           <th> Accion </th>
           <th> Descripcion </th>
           <th> Foto </th>

           <td>
             --
           </td>
         </tr>
       </thead>
       <tbody>

         <?php
              foreach($inmobis as $inmobi){

                $linkEdit = base_url("inmobi/?id={$inmobi->id}");
                $linkDel = base_url("inmobi/delete/?id={$inmobi->id}");


                echo "
                  <tr>
                    <td>{$inmobi->id}</td>
                    <td>{$inmobi->titulo}</td>
                    <td>{$inmobi->direccion}</td>
                    <td>{$inmobi->tipo}</td>
                    <td>{$inmobi->precio}</td>
                    <td>{$inmobi->accion}</td>
                    <td>{$inmobi->descripcion}</td>
                    <td>{$inmobi->foto}</td>

                    <td>
                        <a href= '$linkEdit' class= 'acount-btn'> Edit</a>
                        <a href= '$linkDel' class= 'btn btn-danger btn-sm' >Del</a>
                    </td>

                </tr>";
              }

         ?>

       </tbody>
     </table>
   </div>
  </div>





  </body>
</html>
<div class="footer">
	 <div class="container">
		 <div class="store">
			 <ul>
				 <li class="active">Estamos Ubicados ::</li>
				 <li><a href="#">Maria Trinidad Sanchez (Nagua). </a></li>

			 </ul>
		 </div>
		 <div class="copywrite">
			 <p>Copyright © 2016 NGC Inmobiliaria! </p>
		 </div>
		 </div>
	 </div>
</div>
<!---->
</body>
</html>
