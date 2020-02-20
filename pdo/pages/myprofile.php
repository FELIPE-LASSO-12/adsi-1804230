<div id="wrapper">
    <?php include 'menu_teacher.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include 'navbar-teacher.php' ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
            <i class="fa fa-user"></i> 
            &nbsp;Mi Perfil</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-6 mb-4">
                <?php 
                  $id = $_SESSION['uid'];
                  $myprofile = showStudent($id, $conn);
                 ?>
              
              <table class="table table-striped table-bordered table-hover">
                <?php foreach ($myprofile as $mp): ?>
                <tr>
                  <td colspan="2" class="text-center bg-gradient-dark">
                    <img class="rounded-circle img-thumbnail" src="<?php echo $url.$mp['photo'] ?>"  style="width:14rem; height:14rem;" >
                    <div class="text-white"><h3>Profesor</h3></div>
                  </td>
                </tr>
                <tr>
                  <th>Nombre Completo</th>
                  <td><?php echo $mp['names'] ?></td>
                </tr>
                <tr>
                <th>Correo Electrónico</th>
                  <td><?php echo $mp['email'] ?></td>
                </tr>
                <tr>
                  <th>Fecha Nacimiento</th>
                  <td><?php echo $mp['birthdate'] ?></td>
                </tr>
                <tr>
                  <th>Estado</th>
                  <td><?php if($mp['status'] == "Active"): ?>
                                <span class="badge badge-success">
                                  <i class="fa fa-check"></i>&nbsp;Activo
                                </span>
                              <?php else: ?>
                                <span class="badge badge-danger">
                                  <i class="fa fa-times"></i>&nbsp;Inactivo
                                </span>
                      <?php endif ?>
                  </td>
                </tr>
                <tr>
                  <th>Rol</th>
                  <td><?php echo $mp['role'] ?></td>
                </tr>
                <?php endforeach ?>
                <tr>
                  <td colspan="2" class="text-center  bg-gradient-dark">
                    <a class="btn btn-light" href="myprofile/edit.php?id=<?php echo $id ?>">
                      <i class="fa fa-edit"></i>Modificar Datos
                    </a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Todos los Derechos Rreservados &copy; <?php echo date('Y') ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

