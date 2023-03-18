

<?php include 'partials/header.php'?>

<center>
          <br>
          <h1 class="text-center">INICIAR SESION</h1><br><br>
      </center>
      <div class="row">
          <div class="col-lg-4 col-md-3 col-sm-2 col-1">
          </div>
          <div class="col-lg-4 col-md-6 col-sm-8 col-10">
              <form class="form-horizontal" action="/login" method = "POST">
                  <label for="">Usuario</label><br>
                  <input class="form-control" name="username" size="25" placeholder="jesus_trocha"><br>
                  <label for="">Contraseña</label><br>
                  <input class="form-control" name="password" type="password" ><br>
                  <a class="btn text-primary" href="" role="button">¿Olvidaste tu contraseña?</a> <a class="btn text-primary" href="" role="button">¿Aun no tiene cuenta?</a><br><br>
                  <input class="btn btn-primary form-control" type="submit" name="submit" value="Iniciar sesión"> <br><br>
                  
              </form>
          </div>
          <div class="col-lg-4 col-md-3 col-sm-2 col-1">
              
          </div>
      </div>

<?php include 'partials/footer.php'?>


