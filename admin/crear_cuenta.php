
              <form action="" method="POST">
              <h1>Crear Cuenta</h1>
             
              <div>
                <input type="email" name="email"  class="form-control" placeholder="Email" required="" />
              </div>
              
              <div>
                <input type="text" name="nombre"  class="form-control" placeholder="Nombre" required="" />
              </div>
              
              <div>
                <input type="text" name="apellido"  class="form-control" placeholder="Apellido" required="" />
              </div>
              
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.php">Registrarme</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">¿ Ya sos miembro ?
                  <a href="#" class="to_register"> Ingresar </a>
                </p>

                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
            
           <? 

                    $email = $_POST['email'];

                    $nombre = $_POST['nombre'];

                    $apellido = $_POST['apellido'];

                    $password = $_POST['password'];

            
            $sql = "INSERT INTO usuarios (email, nombre, apellido, pass) 
                    VALUES ('$email','$nombre','$apellido','$password')";
            $con->exec($sql);


		 
            ?>
           