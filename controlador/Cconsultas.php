<?php 
	/**
	* 
	*/
	include'./php/conexion.php';
	class Consultas 
	{
		
	public function convertirUsuario($id){
		$sql=mysql_query("SELECT * FROM users WHERE id = '$id'");
		$resultado=mysql_fetch_object($sql);
		return $resultado->nombres;
	}
	public function convertir($id){
		$sql=mysql_query("SELECT * FROM users WHERE id = '$id'");
		$resultado=mysql_fetch_object($sql);
		return $resultado->apellidos;
	}
	public function mostrarArea($idarea){
	$sql=mysql_query("SELECT * FROM area WHERE id = '$idarea'");
		$resultado=mysql_fetch_object($sql);
		return $resultado->nombre;
	}
	public function listarmisPlanes($iduser){
		$SQL=mysql_query("SELECT * FROM plandeclase WHERE idusuario = '$iduser'");
		$i=1;
		while ($resl=mysql_fetch_object($SQL)) {
			echo "
				<tr class='warning'>
				<td>".$i++."</td>
			      <td style='font-size:10px;'>".$this->mostrarArea($resl->idarea)."</td>
			      <td>".$resl->grado."</td>
			      <td><center><a href='controlador/eliminarplan.php?op=".$resl->id."' style='color:red;font-size:20px;'><span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></a></center></td>
			      </tr>";
		}

	}
}
	
 ?>