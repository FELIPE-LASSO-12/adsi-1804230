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
              <i class="fa fa-plus"></i> 
            &nbsp;Adicionar Calificación</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-6 mb-4">
              <form action="" method="post" enctype="multipart/form-data">
                <?php $id = $_GET['id']; ?>
                <?php $note = showNote($id,$conn); ?>
                <?php foreach ($note as $nt): ?>

                <div class="form-group">
                  <label for="names">Nombre Estudiante:</label>
                  <select name="user_id" class="form-control">
                    <?php $students = listStudents($conn); ?>
                    <option value="">Seleccione...</option>
                    <?php foreach ($students as $student): ?>
                    <option value="<?php echo$student['id']; ?>" <?php if($student['status'] 
                     == "Inactive") echo "disabled"; ?> <?php if($nt['user_id'] == $student['id']) echo "selected" ?>><?php echo $student['names']; ?>
                    </option>
                    <?php endforeach ?>
                  </select>
                </div>
                <!--  -->
                <div class="form-group">
                  <?php $subjects = listSubjects($conn); ?>
                  <label for="name">Nombre Materia:</label>
                  <select name="subject_id" class="form-control">
                    <option value="">Seleccione...</option>
                    <?php foreach ($subjects as $subject): ?>
                    <option value="<?php echo$subject['id']; ?>" <?php if($nt['subject_id'] == $subject['id']) echo "selected" ?>>
                      <?php echo $subject['name']; ?>
                    </option>
                    <?php endforeach ?>
                  </select>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="nt1">Nota 1:</label>
                  <input type="number" class="form-control" name="nt1" step="0.1" max="5" value="<?php echo $nt['nt1'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="nt2">Nota 2:</label>
                  <input type="number" class="form-control" name="nt2" step="0.1" max="5" value="<?php echo $nt['nt2'] ?>" required>
                </div>
                <div class="form-group">
                  <label for="nt3">Nota 3:</label>
                  <input type="number" class="form-control" name="nt3" step="0.1" max="5" value="<?php echo $nt['nt3'] ?>" required>
                </div>

                <div class="form-group">
                  <button class="btn btn-success">
                    <i class="fa fa-save"></i>
                    Modificar
                  </button>
                  <button type="reset" class="btn btn-danger">
                    <i class="fa fa-eraser"></i>
                    Limpiar
                  </button>
                </div>
                <?php endforeach ?>
              </form>

              <?php 
                if ($_POST) {
                  //var_dump($_POST);
                  //var_dump($_FILES);
                  $nt1        = $_POST['nt1'];
                  $nt2        = $_POST['nt2'];
                  $nt3        = $_POST['nt3'];
                  $user_id    = $_POST['user_id'];
                  $subject_id = $_POST['subject_id'];

                    if (updateNote($id,$nt1, $nt2, $nt3,$user_id,$subject_id, $conn)) {
                      $_SESSION['message'] = "Las Calificaciones  se modificaron con éxito!";
                      echo "<script>
                        setTimeout(function() {
                          window.location.replace('../mod-notes.php');
                          
                        }, 2200);
                        </script>";

                }
                }

               ?>
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

