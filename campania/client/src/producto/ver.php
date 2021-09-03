
<html>
	<head>
		<title>PubliWeb</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/stylos.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Campañas Publicitarias de Productos</h2>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Campaña de Productos</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregar.php">
  <div class="form-group">
    <label for="nombre_campaña"> Nombre de la Campaña</label>
    <input type="text" class="form-control" name="nombre_campaña" required>
  </div>
  <div class="form-group">
    <label for="precio_producto">Precio del Producto</label>
    <input type="number" class="form-control" name="precio_producto" required>
  </div>
  <div class="form-group">
    <label for="llamadas_ilimitadas">Llamadas ilimitadas a</label>
    <input type="text" class="form-control" name="llamadas_ilimitadas" required>
  </div>
  <div class="form-group">
    <label for="gigas">Gigas para redes sociales</label>
    <input type="number" class="form-control" name="gigas" >
  </div>
  <div class="form-group">
    <label for="minutos">Minutos a todas las operadoras</label>
    <input type="number" class="form-control" name="minutos" >
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" >
  </div>


  <button type="submit" class="btn btn-default">Agregar Campaña</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>