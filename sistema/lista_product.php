<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Product</h1>
		<a href="registro_producto.php" class="btn btn-primary">New</a>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>Importer/Manufacturer</th>
							<th>serial</th>
							<th>model</th>
							<th>caliber</th>
							<th>NFA</th>
							<th>quantity</th>
							<th>unitCost</th>
							<th>COD_idType</th>
							<?php if ($_SESSION['rol'] == 1) { ?>
							<th>Actions</th>
							<?php } ?>
						</tr>
					</thead>
					<tbody>
						<?php
						include "../conexion.php";

						$query = mysqli_query($conexion, "SELECT * FROM `product`");
						$result = mysqli_num_rows($query);
						if ($result > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr>
									<td><?php echo $data['idproduct']; ?></td>
									<td><?php echo $data['Importer/Manufacturer']; ?></td>
									<td><?php echo $data['serial']; ?></td>
									<td><?php echo $data['model']; ?></td>
									<td><?php echo $data['caliber']; ?></td>
									<td><?php echo $data['NFA']; ?></td>
									<td><?php echo $data['quantity']; ?></td>
									<td><?php echo $data['unitCost']; ?></td>
									<td><?php echo $data['COD_idType']; ?></td>
										<?php if ($_SESSION['rol'] == 1) { ?>
									<td>
										<a href="agregar_producto.php?id=<?php echo $data['idproduct']; ?>" class="btn btn-primary"><i class='fas fa-audio-description'></i></a>

										<a href="editar_producto.php?id=<?php echo $data['idproduct']; ?>" class="btn btn-success"><i class='fas fa-edit'></i></a>

										<form action="eliminar_producto.php?id=<?php echo $data['idproduct']; ?>" method="post" class="confirmar d-inline">
											<button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
										</form>
									</td>
										<?php } ?>
								</tr>
						<?php }
						} ?>
					</tbody>

				</table>
			</div>

		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php include_once "includes/footer.php"; ?>