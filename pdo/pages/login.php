

<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">
                      <i class="fab fa-angellist"></i>
                    Ingreso de Usuarios</h1>
                  </div>
                  <form class="user" action="" method="post">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingrese su correo...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      <i class="far fa-arrow-alt-circle-right"></i>
                      Ingresar
                    </button>
                  </form>

                  <?php 

                  if ($_POST) {
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);
                    if(login($email,$password,$conn)) {
                      if($_SESSION['urole'] == "Student") {
                        echo "<script> window.location.replace('dashboard-student.php'); </script>";
                      }else if($_SESSION['urole'] == "Teacher") {
                        echo "<script> window.location.replace('dashboard-teacher.php'); </script>";
                      } 
                    }   
                  }

                   ?>
                  <hr>
                  <div class="text-center">
                    <a class="btn btn-link" href="register.php">
                      <i class="fa fa-user"></i>
                    Registrar Estudiante</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


  
