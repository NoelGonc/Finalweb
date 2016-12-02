<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tipo de Mascota</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </head>
  <body>



  <div class="container">
  <center>
  <h3>Agregar Tipo De Animales</h3>
</center>
  <br>
  <br>
  <br>
  <br>


  <div id="background">
  <img src="img/animal.jpg" id="img" alt="" />
  </div>


    <div class="row">

    <form method="post" action="<?php echo base_url('tipo/guardar');?>">
      <div class="col-md-6">

        <div class="form-group input-group">
          <span class="input-group-addon">Id:</span>
          <input type="text" readonly class="form-control" value="<?php echo $tipo->id; ?>" name="id">
        </div>

        <div class="form-group input-group">
          <span class="input-group-addon">Tipo:</span>
          <input type="text" class="form-control" name="nombre"  value="<?php echo $tipo->nombre; ?>">
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

    </div>
    </form>
  </div>
  </center>


    <div>

     <h3>Registros</h3>
     <table class="table">
       <thead>
         <tr>
           <th> Id </th>
           <th> Nombre </th>


           <td>
             --
           </td>
         </tr>
       </thead>
       <tbody>
         <?php
                foreach($tipos as $tipo){

                  $linkEdit = base_url("tipo/?id={$tipo->id}");
                  $linkDel = base_url("tipo/borrar/?id={$tipo->id}");

                  echo "
                    <tr>
                        <td>{$tipo->id}</td>
                        <td>{$tipo->nombre}</td>


                        <td>
                            <a href= '$linkEdit' class= 'btn btn-info btn-sm'> Edit</a>
                            <a href= '$linkDel' class= 'btn btn-danger btn-sm' >Del</a>
                        </td>
                    </tr>

                  ";
                }
         ?>
       </tbody>
     </table>
   </div>
  </div>



 <a class="btn btn-info" href="<?= base_url()?>">Volver al Home</a>


  </body>

</html>
