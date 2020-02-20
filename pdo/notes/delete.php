<?php include '../config/app.php'; ?>
<?php include '../config/database.php'; ?>
<?php include '../config/security-teacher.php'; ?>
<?php include '../includes/header.php';?>


<?php 

	if ($_GET) {
		$id = $_GET['id'];

		if(deleteNote($id, $conn)) {
       		 $_SESSION['message'] = "La calificación fue eliminado con éxito!!";
        		echo "<script>
              	   setTimeout(function() {
              	    window.location.replace('../mod-notes.php');
              	    			
		            }, 2200);
		      		</script>";
      }
	}

 ?>

<?php $conn = null; ?>
<?php include '../includes/footer.php';?>