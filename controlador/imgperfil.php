<?php 
	include('./php/conexion.php');
	$usuario = $_SESSION['sess_username'];
	if ($_FILES["imagen"]["error"] > 0){
	echo "ha ocurrido un error";
} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 100;

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "./perfil/" . $_FILES['imagen']['name'];
		//comprovamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			if ($resultado){
				echo "<div class='alert alert-dismissible alert-success'>
						  <button type='button' class='close' data-dismiss='alert'>X</button>
						  <strong></strong> Su Imagen de Perfil Ha sido Cambiada con Exito
						</div>";
			//para actualizar la imagen del perfil del usuario en la base de datos ruta url
			
			$sql = "UPDATE users SET img = '$ruta' WHERE username = '$usuario'";
			mysql_query($sql);
			} else {
				echo "ocurrio un error al mover el archivo.";
			}
		} else {
			echo $_FILES['imagen']['name'] . ", este archivo existe";
		}
	} else {
		echo "<script>alert('El Archivo supera los 100kb, Intenta con otra, debes tenerla por ahi en tu pc, no se busca no seas flojo!!!');</script>";
		
	}
}


 ?>