<div class="info">
         
         
       
          <div class="col-md-6 col-md-offset-3 login">
          
                    <h4 class="ingrese"></span>Registro Planes de Clases Compartidos<span class="glyphicon glyphicon-user"></h4><br/>
                            <div class="block-margin-top">
                            <form action="" method="post" class="form-signin col-md-12" role="form">  
                                  
                                  <div class="col-md-3">
                                    <h4 class="ingrese" for="">Usuario:</h4 class="ingrese">
                                  </div>
                                  <div class="col-md-9">
                                    <input type="text" name="usuario" class="form-control" placeholder="Ingrese su Usuario" required><br/>
                                  </div>
                                  
                                  <div class="col-md-3">
                                    <h4 class="ingrese" for="">Contraseña:</h4 class="ingrese">
                                  </div>
                                  <div class="col-md-9">
                                    <input type="password" name="password" class="form-control" placeholder="Ingrese su Contraseña" required><br/>
                                  </div>

                                  <div class="col-md-3">
                                    <h4 class="ingrese" for="">Nombre:</h4 class="ingrese">
                                  </div>
                                  <div class="col-md-9">
                                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese su Nombre" required><br/>
                                  </div>

                                  <div class="col-md-3">
                                    <h4 class="ingrese" for="">Apellidos:</h4 class="ingrese">
                                  </div>
                                  <div class="col-md-9">
                                    <input type="text" name="apellidos" class="form-control" placeholder="Ingrese su Apellido" required><br/>
                                  </div>

                                  <div class="col-md-3">
                                    <h4 class="ingrese" for="">Docente en:</h4 class="ingrese">
                                  </div>
                                  <div class="col-md-9">
                                    <input type="text" name="docenteen" class="form-control" placeholder="Eres Docente en..." required><br/>
                                  </div>                      
                                    <a href="index.php" class="btn btn-primary">Atrás</a>
                                    <button class="btn btn-primary" type="submit" name="registrar">Registrar</button>
                                  <br>
                                  
                          </form>
                          <br>
                          
                           </div>
                          </div>

                                <?php 
                                if (isset($_POST['registrar'])) {
                                  include('conexion.php');
                                $con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
                                mysql_select_db($db,$con)or die("no existe la base de datos");
                                if (isset($_POST['registrar'])) {
                                  $role="user";  
                                  mysql_query("INSERT INTO users(username, password, role, nombres, apellidos, docenten, img) 
                                               VALUES ('$_POST[usuario]','$_POST[password]','$role','$_POST[nombre]','$_POST[apellidos]','$_POST[docenteen]','./perfil/default.png')",$con); 
                                  echo "<script>alert('registro con exito')</script>";
                                }else{
                                  echo "<script>alert('no se ha podido registrar, Intente Nuevamente')</script>";
                                }
                                 
                                }
                                ?>