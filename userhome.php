<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="user"){
      header('Location: index.php?err=2');
    }

   include"./php/conexion.php";
  $usuario = $_SESSION['sess_username'];
  $consulta = "SELECT * FROM users WHERE username = '$usuario'";
  $result = mysql_query($consulta);
  $row = mysql_fetch_array($result);
  $id=$row['id'];
  
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planes de Clases Compartidos</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/Sin título-1.png" width="50%" style="margin-top: -56px;"></a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="userhome.php?op=6" style="margin-top: -2px;"><span aria-hidden="true"><img src="<?php echo $row['img']; ?>" width="35px"></span><b>&nbsp;&nbsp;<?php echo $_SESSION['sess_username'];?></b></a></li>
            <li><a href="userhome.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Inicio</a></li>
            <li><a href="userhome.php?op=5"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>&nbsp;&nbsp;Guía</a></li>
            <li><a href="userhome.php?op=1"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;Buscar</a></li>
            <li><a href="userhome.php?op=4"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;Crear</a></li>
            <li><a href="userhome.php?op=2"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span>&nbsp;&nbsp;Subir</a></li>
            <li><a href="userhome.php?op=3"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp;&nbsp;Salir</a></li>

          </ul>
        </div> 
      </div>
    </div>

    <div class="container">
    <br>
    <br>
    <br>
      <div class="row welcome-page">
         <div class="col-md-1"></div>
            <div class="col-md-10">

              <br>
              <br>
              <br> 

              <?php 
              if (!isset($_GET['op'])) {
                include('./php/pageini.php');

              }elseif ($_GET['op']==1) {
                include('./php/buscar.php');
              }elseif ($_GET['op']==2) {
                include('./php/subir.php');
              }elseif ($_GET['op']==3) {
                include('logout.php');
              }elseif ($_GET['op']==4) {
                include('./php/crear.php');
              }elseif ($_GET['op']==5) {
                include('./php/guia.php');
              }elseif ($_GET['op']==6) {
                include('./php/perfil.php');
              }

               ?>
              
            </div>
          <div class="col-md-1"></div>
        </div>
    </div>    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>

