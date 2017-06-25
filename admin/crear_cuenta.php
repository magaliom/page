
              <form action="login.php" method="POST">
              <h1>Crear Cuenta</h1>
             
              <div>
                <input type="text" name="email"  class="form-control" placeholder="Email" required="" />
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
                <input type="submit" name="crear_cuenta" class="btn btn-default submit" value="Registrarme">Registrarme</a>
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
            
           <?php 
           require_once 'inc/dbhelper.php';
           require_once 'inc/funcs.php';
           if (isset($_POST["crear_cuenta"])) {
              DBHelper::crearCuenta($_POST['email'], $_POST['nombre'], $_POST['apellido'], $_POST['password']);
           }
          ?>
           