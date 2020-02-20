		</div>
	</div>
	
	<script src="<?php echo $js ?>jquery-3.4.1.js"></script>
	<script src="<?php echo $js ?>bootstrap.min.js"></script>
	<script src="<?php echo $js ?>sweetalert2.all.min.js"></script>
	<script>
		$(document).ready(function() {
			//-------------------------------------------
			<?php if (isset($_SESSION['message'])): ?>
				Swal.fire(
				  'Felicidades!', '<?php echo $_SESSION['message']; ?>','success');
				setTimeout(function() {
					$.get('../unset.php', {action: 'unset'}, function(data) {
						console.log(data);
					});
				},1000);
			<?php endif ?>

			//-------------------------------------------
			$('.btn-delete').click(function(event) {
				$id = $(this).attr('data-id');
				Swal.fire({
					  title: 'Esta seguro !!',
					  text: "Deseas eliminar el campo ?",
					  type: 'warning',
					  showCancelButton: true,
					  confirmButtonColor: '#000',
					  cancelButtonColor: '#d33',
					  confirmButtonText: 'Cancelar',
					  confirmButtonText: 'OK bello'
					}).then((result) => {
					  if (result.value) {
					    window.location.replace('delete.php?id='+$id);
				  }
				})
			});
			//-------------------------------------------
		});
	</script>
</body>
</html>