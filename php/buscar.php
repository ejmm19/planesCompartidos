<div>
	
  <fieldset>
    <legend>Buscar Planes de Clases</legend>
    <div class="col-md-6">
    
    <form class="form-horizontal" action="" method="post">
    	<div class="form-group">
      <label for="select" class="col-lg-2 control-label">Área</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" name="area">
          
          <?php 
            include'conexion.php';
            $consulta=mysql_query("SELECT * FROM area");
            while ($result=mysql_fetch_object($consulta)) {
              echo "<option value='".$result->id."'>".$result->nombre."</option>";  
            }
           ?>
        </select>
       </div>
    </div>   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary" name="barea">Buscar</button>
      </div>
    </div>      
    </div>
    </form>

    <div class="col-md-6">
    	
    
    	
    </div>
  
  <div class="col-md-12">
  <br>
  <br>
  <br>
  
  <br>
  
    <?php 
    include'./controlador/Cconsultas.php';
    $objeto=new Consultas;

    if (isset($_POST['barea'])) {
      echo "<center><h4>Resultado de la Busqueda ' ".$objeto->mostrarArea($_POST['area'])."'</h4></center> ";
      $sql=mysql_query("SELECT * FROM plandeclase WHERE idarea = '$_POST[area]'");
      while ($res=mysql_fetch_object($sql)) {
        echo "<div class='col-md-4'>
              <div class='thumbnail'>
            <img alt='Bootstrap Thumbnail First' width='40%' src='./img/pdf-icon1.png' />
            <div class='caption'>
              <h3>
               Autor: <h5>".$objeto->convertirUsuario($res->idusuario)." &nbsp;".$objeto->convertir($res->idusuario)."</h5>
              </h3>
              <p>
                <b>Grado:</b>&nbsp;&nbsp;".$res->grado."
              </p>
              <p>
                <a class='btn btn-success' href='planes/".$res->url."'>Descargar</a>
              </p>
            </div>
              </div>
              </div>";
      }
    }

     ?>
  </div>
  </fieldset>

</div>