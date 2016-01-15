
  <div class="col-md-6">
	<div>
	<legend>Subir Planes de Clases</legend>
	
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">  
 <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Nombre:</label>
      <div class="col-lg-10">
      <select name='area' class="form-control">
      
  <?php 

    $buscar_clientes=mysql_query("SELECT * FROM area ");
     while ($muestra=mysql_fetch_array($buscar_clientes)) {  
    echo "<option value='".$muestra['id']."'>".$muestra['nombre']."</option>";     
    }
   ?>
   </div>
   </select>
    <br>
    <br>
    <br>
  

    </div>    
  <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Grado</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" name="grado">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
        </select>
       </div>
    </div>
  <div class="form-group">
    <label for="exampleInputFile" class="col-lg-2">Archivo</label>
    <div class="col-lg-10">
    	<input type="file" id="ejemplo_archivo_1" name="pdf">
    </div>
    
    <p class="help-block">Buscar en tu pc planes de clases</p>
  </div>
  
  <center><button type="submit" class="btn btn-default" name="enviar">Enviar</button></center>
</form>

</div><br><br>
</div>
<?php if (isset($_POST['enviar'])) {
  include'./controlador/subirplan.php';
  $ob=new Classsubir;
  $ob->subirPlan($id,$_POST['area'],$_POST['grado']);
} ?>

<div class="col-md-6">
  
</div>
