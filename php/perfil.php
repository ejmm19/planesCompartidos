<div class="row">
	<div class="col-md-4">
		<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Perfil de 
<?php
include"conexion.php";
	$usuario = $_SESSION['sess_username'];
	$consulta = "SELECT * FROM users WHERE username = '$usuario'";
	$cliente_editar = mysql_query($consulta);
	$row = mysql_fetch_array($cliente_editar);
	echo $row['nombres'];

 ?></h3>
  </div>
  <div class="panel-body">
    <p><b>Nombre de usuario:</b></p><?php echo $row['username']; ?>
  </div>
  <div class="panel-body">
    <p><b>Nombres:</b></p><?php echo $row['nombres']; ?>
  </div>
  <div class="panel-body">
    <p><b>Apellidos:</b></p><?php echo $row['apellidos']; ?>
  </div>
  <div class="panel-body">
    <p><b>Docente de:</b></p><?php echo $row['docenten']; ?>
  </div>
</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Imagen de Perfil</h3>
  </div>
  <div class="panel-body">
    <img src="<?php echo $row['img'];?>" width="57%" >
    
    <br><br><br>

    <form role="form" action="" method="post" enctype="multipart/form-data">
				<div class="form-group">					 
					
					<input type="file" id="exampleInputFile" name="imagen" />
					<p class="help-block">
						Seleccione su imagen de perfil.
						<p><b>Nota:</b>  El archivo no debe sobrepasar los 100kb de peso</p>
					</p>
				</div>
				<button type="submit" name="enviar" class="btn btn-success">
					Cambiar
				</button>
	</form>
	<?php 
	
	
	if (isset($_POST['enviar'])) {
		include "./controlador/imgperfil.php";
		}


 ?>


	
  </div>
</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Mis Planes de Clases</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-hover ">
  <thead>
    <tr style="font-size:12px;">
      <th>#</th>
      <th>Área</th>
      <th>Grado</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    
    <?php 
    	 include'./controlador/Cconsultas.php';
    	 $obj=new Consultas;
    	 $obj->listarmisPlanes($row['id']);

     ?>
    
    </tbody>
</table> 
  </div>
</div>
	</div>
</div>