<?php include '../config/app.php'; ?>
<?php include '../config/database.php'; ?>
<?php include '../config/security-teacher.php'; ?>
<?php include '../includes/header.php';?>


<?php 

	if ($_GET) {
		$id = $_GET['id'];

		if(deleteSubject($id, $conn)) {
       		 $_SESSION['message'] = "La materia fue eliminado con éxito!!";
        		echo "<script>
              	   setTimeout(function() {
              	    window.location.replace('../mod-subjects.php');
              	    			
		            }, 2000);
		      		</script>";
      }
	}

 ?>

<?php $conn = null; ?>
<?php include '../includes/footer.php';?>