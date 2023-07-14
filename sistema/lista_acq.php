<?php include_once "includes/header.php"; ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">acqtrx</h1>
		<a href="registro_producto.php" class="btn btn-primary">New</a>
	</div>

	<div class="row">
    <div class="col-lg-12">
        <form method="GET" action="">
            <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
</div>


	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="table">
					<thead class="thead-dark">
						<tr>
						<th>AcqTrx</th>
						<th>Source</th>
						<th>Source Order</th>
						<th>Source Cust</th>
						<th>Date Ordered</th>
						<th>Date Received</th>
						<th>Qty</th>
						<th>Source_Item</th>
						<th>Item Descrip</th>
						<th>Showroom</th>
						<th>Unit Cost</th>
						<th>Net Cost</th>
						<th>FFL Acq</th>
						<th>Serial</th>
						<th>Type</th>
						<th>Manufacturer</th>
						<th>Model</th>
						<th>Caliber</th>
						<th>NFA</th>
						<th>MSRP</th>
						<th>Competitor Price</th>
						<th>SAR Price</th>
						<th>Condition</th>
						<th>Taxible</th>
						<th>FFL Disposal</th>
						<th>Transfer Date</th>
						<th>Customer</th>
						<th>Statement</th>
						<th>Qnum</th>
						<th>Approval</th>
						<th>NFA CTR No</th>
						<th>Due Date</th>
						<th>Assignment</th>
						<th>Task(1)</th>
						<th>Task(2)</th>
						<th>Task(3)</th>
						<th>Task(4)</th>
						<th>TimeIn(Task1)</th>
						<th>TimeOut(Task1)</th>
						<th>TimeIn(Task2)</th>
						<th>TimeOut(Task2)</th>
						<th>TimeIn(Task3)</th>
						<th>TimeOut(Task3)</th>
						<th>TimeIn(Task4)</th>
						<th>TimeOut(Task4)</th>
						<th>Task(1) NOTES</th>
						<th>Task(2) NOTES</th>
						<th>Task(3) NOTES</th>
						<th>Task(4) NOTES</th>
							<?php if ($_SESSION['rol'] == 1) { ?>
							<th>Actions</th>
							<?php } ?>
						</tr>
					</thead>
					<tbody>
						<?php
						include "../conexion.php";

						$search = isset($_GET['search']) ? $_GET['search'] : '';

						$query = "SELECT * FROM `acqtrx` ";
						if (!empty($search)) {
							$query .= " WHERE `AcqTrx` LIKE '%$search%' OR `Source` LIKE '%$search%'";
						}
						$query .= " ORDER BY `AcqTrx` ASC LIMIT 100;";
						
						$result = mysqli_query($conexion, $query);
						$result = 1;
                        //num
						$tamanio_tanda = 500;
						$sql = "SELECT count(*) as num FROM `acqtrx`";
						$data = mysqli_fetch_assoc($sql);
						$num = $data['num'];
						echo $num;

						//$count = mysqli_num_rows($result);

						if ($result > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr>
								<td><?php echo $data['AcqTrx']; ?></td>
								<td><?php echo $data['Source']; ?></td>
								<td><?php echo $data['Source Order']; ?></td>
								<td><?php echo $data['Source Cust']; ?></td>
								<td><?php echo $data['Date Ordered']; ?></td>
								<td><?php echo $data['Date Received']; ?></td>
								<td><?php echo $data['Qty']; ?></td>
								<td><?php echo $data['Source_Item']; ?></td>
								<td><?php echo $data['Item Descrip']; ?></td>
								<td><?php echo $data['Showroom']; ?></td>
								<td><?php echo $data['Unit Cost']; ?></td>
								<td><?php echo $data['Net Cost']; ?></td>
								<td><?php echo $data['FFL Acq']; ?></td>
								<td><?php echo $data['Serial']; ?></td>
								<td><?php echo $data['Type']; ?></td>
								<td><?php echo $data['Manufacturer']; ?></td>
								<td><?php echo $data['Model']; ?></td>
								<td><?php echo $data['Caliber']; ?></td>
								<td><?php echo $data['NFA']; ?></td>
								<td><?php echo $data['MSRP']; ?></td>
								<td><?php echo $data['Competitor Price']; ?></td>
								<td><?php echo $data['SAR Price']; ?></td>
								<td><?php echo $data['Condition']; ?></td>
								<td><?php echo $data['Taxible']; ?></td>
								<td><?php echo $data['FFL Disposal']; ?></td>
								<td><?php echo $data['Transfer Date']; ?></td>
								<td><?php echo $data['Customer']; ?></td>
								<td><?php echo $data['Statement']; ?></td>
								<td><?php echo $data['Qnum']; ?></td>
								<td><?php echo $data['Approval']; ?></td>
								<td><?php echo $data['NFA CTR No']; ?></td>
								<td><?php echo $data['Due Date']; ?></td>
								<td><?php echo $data['Assignment']; ?></td>
								<td><?php echo $data['Task(1)']; ?></td>
								<td><?php echo $data['Task(2)']; ?></td>
								<td><?php echo $data['Task(3)']; ?></td>
								<td><?php echo $data['Task(4)']; ?></td>
								<td><?php echo $data['TimeIn(Task1)']; ?></td>
								<td><?php echo $data['TimeOut(Task1)']; ?></td>
								<td><?php echo $data['TimeIn(Task2)']; ?></td>
								<td><?php echo $data['TimeOut(Task2)']; ?></td>
								<td><?php echo $data['TimeIn(Task3)']; ?></td>
								<td><?php echo $data['TimeOut(Task3)']; ?></td>
								<td><?php echo $data['TimeIn(Task4)']; ?></td>
								<td><?php echo $data['TimeOut(Task4)']; ?></td>
								<td><?php echo $data['Task(1) NOTES']; ?></td>
								<td><?php echo $data['Task(2) NOTES']; ?></td>
								<td><?php echo $data['Task(3) NOTES']; ?></td>
								<td><?php echo $data['Task(4) NOTES']; ?></td>
										<?php if ($_SESSION['rol'] == 1) { ?>
									<td>
										<a href="agregar_producto.php?id=<?php echo $data['AcqTrx']; ?>" class="btn btn-primary"><i class='fas fa-audio-description'></i></a>

										<a href="editar_producto.php?id=<?php echo $data['AcqTrx']; ?>" class="btn btn-success"><i class='fas fa-edit'></i></a>

										<form action="eliminar_producto.php?id=<?php echo $data['AcqTrx']; ?>" method="post" class="confirmar d-inline">
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