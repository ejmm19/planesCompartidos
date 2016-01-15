<?php 
	
	/**
	* 
	*/
	include'./php/conexion.php';
	class Classsubir
	{
		public function subirPlan($iduser,$area,$grado){
			$usuario = $_SESSION['sess_username']; 
				if ($_FILES["pdf"]["error"] > 0){
				echo "ha ocurrido un error";
			} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de pdf permitido.
	//y que el tamano del archivo no exceda los 100kb
		
		//esta es la ruta donde copiaremos la pdf
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "./planes/" . $_FILES['pdf']['name'];
		$url=$_FILES['pdf']['name'];
		//comprovamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["pdf"]["tmp_name"], $ruta);
			if ($resultado){
				mysql_query("INSERT INTO plandeclase (idusuario,idarea,grado,url) VALUES ('$iduser','$area','$grado','$url')");
				echo "<div class='alert alert-dismissible alert-success'>
						  <button type='button' class='close' data-dismiss='alert'>X</button>
						  <strong></strong> Su pdf Ha sido Subido con Exito
						</div>";
			//para actualizar la pdf del perfil del usuario en la base de datos ruta url
			
			
			} else {
				echo "ocurrio un error al mover el archivo.";
			}
		} else {
			echo $_FILES['pdf']['name'] . ", este archivo existe";
		}
	
		
		
	}
		}

	}



 ?>