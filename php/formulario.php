<div class="info">
         
         
       
          <div class="col-md-6 col-md-offset-3 login">
          <center><img src="img/Sin título-1.png" width="50%"></center> 
                    <h4 class="ingrese"></span>Ingreso Planes de Clases Compartidos<span class="glyphicon glyphicon-user"></h4><br/>
                            <div class="block-margin-top">
                              <?php 

                                $errors = array(
                                    1=>"Usuario y/o Contraseña no validos, Intente de nuevo",
                                    2=>"Por favor Ingrese los Datos"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                               ?>  

                              <form action="authenticate.php" method="POST" class="form-signin col-md-8 col-md-offset-2" role="form">  
                                  <input type="text" name="username" class="form-control" placeholder="Usuario" required autofocus><br/>
                                  <input type="password" name="password" class="form-control" placeholder="Contraseña" required><br/>
                                  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button><br>
                                  <center>
                                    <a href="index.php?op=1" class="btn btn-success">Registrate</a>
                                    
                                  </center> 
                                  <br>       
                          </form>

                          <br>
                          
                           </div>
</div>