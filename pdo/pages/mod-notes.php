<div id="wrapper">

    <?php include 'menu_teacher.php'; ?>
    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include 'navbar-teacher.php' ?>
       

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-id-badge"></i> 
            &nbsp;Módulo Calificaciones</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-12 mb-4">
              <a class="btn btn-success" href="notes/add.php">
                <i class="fa fa-plus"></i>
                Adicionar
              </a>
              <hr>
                <?php $notes = listNotes($conn); ?>
                <table id="dataTable" class="table table bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th>Nombre Estudiante</th>
                      <th>Nombre Materia</th>
                      <th>Nota Final</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($notes as $note): ?>
                      <tr>
                        <td><?php echo $note['uname']; ?></td>
                        <td><?php echo $note['sname']; ?></td>
                        <td>
                          <?php if (round($note['fnote'],1) >= 3.5): ?>
                            <span class="badge badge-success">
                              <?php echo round($note['fnote'],1); ?>
                            </span>
                            <?php else: ?>
                              <span class="badge badge-danger">
                                <?php echo round($note['fnote'],1); ?>
                              </span>
                            <?php endif ?>
                          </td>
                        <td>
                          <a class="btn btn-sm btn-light" href="notes/show.php?id=<?php echo $note['id']; ?>"><i class="fa fa-search"></i></a>
                          <a class="btn btn-sm btn-info" href="notes/edit.php?id=<?php echo $note['id']; ?>"><i class="fa fa-edit"></i></a>
                          <a class="btn btn-sm btn-danger btn-delete" href="javascript:;" data-id="<?php echo $note['id']; ?>" data-dir="notes"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Nombre Estudiante</th>
                      <th>Nombre Materia</th>
                      <th>Nota Final</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
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

