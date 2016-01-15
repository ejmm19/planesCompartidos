<?php 

if ($_GET['op']) {
	$id=$_GET['op'];
	mysql_query("DELETE FROM plandeclase WHERE id = '$id'");
	header('Location: ../userhome.php?op=6');
}


 ?>