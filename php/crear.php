

<div class="col-md-12">
	<form action="php/generar.php" method="post">
	
		<div class="col-md-6">
		<div class="form-group">
      <label for="select" class="col-lg-3 control-label">Programa</label>
      <div class="col-lg-9">
        <select class="form-control" id="select">
           <?php 

    $buscar_clientes=mysql_query("SELECT * FROM area ");
     while ($muestra=mysql_fetch_array($buscar_clientes)) {  
    echo "<option value='".$muestra['id']."'>".$muestra['nombre']."</option>";     
    }
   ?>
        </select>
       </div>
    </div>   
	</div>
	<div class="col-md-4">
		
		<div class="form-group">
      <label for="select" class="col-lg-4 control-label">Horas semanales</label>
      <div class="col-lg-8">
        <select class="form-control" id="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
       </div>
       
	</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
      <label for="select" class="col-lg-4 control-label">Grado</label>
      <div class="col-lg-8">
        <select class="form-control" id="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
        </select>
       </div>
       
	</div>
	</div>
	

	<div class="col-md-6">
		<div class="form-group">
      <label for="select" class="col-lg-2 control-label">Unidad</label>
      <div class="col-lg-10">
        <input type="text" name="unidad" class="form-control" placeholder="Titulo de la Unidad">
       </div>
    </div>   
	</div>
	<div class="col-md-6">
		<div class="form-group">
      <label for="select" class="col-lg-2 control-label">Tema</label>
      <div class="col-lg-10">
        <input type="text" name="tema" class="form-control" placeholder="Nombre del Tema">
       </div>
    </div>  		
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div class="col-md-12">
		<div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Estándar u Objetivo</label>
      <div class="col-lg-10">
      <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    </div>  
    <div class="col-md-12">
		<div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Logros</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    </div>

    <div class="col-md-12">
		<div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Indicadores de Logros</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    </div>  

    <div class="col-md-12">
		<div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Actividades Metodológicas</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    </div>

    <div class="col-md-12">
		<div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Recursos Material Didactico</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    </div>

    <div class="col-md-12">
		<div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Evaluación</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    </div>

    <div class="col-md-12">
		<div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Bibliogrfía</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    </div>

    <center>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-success">Crear</button>
      </div>
    </div> </center>






		</form>
</div>

