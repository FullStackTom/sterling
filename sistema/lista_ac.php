<?php include_once "includes/header.php"; 
echo isset($_GET['search']) ? $_GET['search'] : '';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Product</h1>
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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Record</button>
<!-- Modal para agregar un registro -->
<div class="modal" id="addModal">
  <div class="modal-dialog modal-lg"> <!-- Agregamos la clase modal-lg para hacer el modal más grande -->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregar Registro</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <h5>Acquisition</h5>
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="acqTrx">AcqTrx</label>
                <input type="text" class="form-control" id="acqTrx" placeholder="AcqTrx">
              </div>
              <div class="form-group">
                <label for="source">Source</label>
                <input type="text" class="form-control" id="source" placeholder="Source">
              </div>
              <div class="form-group">
                <label for="sourceOrder">Source Order</label>
                <input type="text" class="form-control" id="sourceOrder" placeholder="Source Order">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="sourceCust">Source Cust</label>
                <input type="text" class="form-control" id="sourceCust" placeholder="Source Cust">
              </div>
              <div class="form-group">
                <label for="dateOrdered">Date Ordered</label>
                <input type="text" class="form-control" id="dateOrdered" placeholder="Date Ordered">
              </div>
              <div class="form-group">
                <label for="dateReceived">Date Received</label>
                <input type="text" class="form-control" id="dateReceived" placeholder="Date Received">
              </div>
            </div>
          </div>
        </form>

        <h5>Item</h5>
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="itemDescrip">Item Descrip</label>
                <input type="text" class="form-control" id="itemDescrip" placeholder="Item Descrip">
              </div>
              <div class="form-group">
                <label for="showroom">Showroom</label>
                <input type="text" class="form-control" id="showroom" placeholder="Showroom">
              </div>
              <div class="form-group">
                <label for="unitCost">Unit Cost</label>
                <input type="text" class="form-control" id="unitCost" placeholder="Unit Cost">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="netCost">Net Cost</label>
                <input type="text" class="form-control" id="netCost" placeholder="Net Cost">
              </div>
              <div class="form-group">
                <label for="fflAcq">FFL Acq</label>
                <input type="text" class="form-control" id="fflAcq" placeholder="FFL Acq">
              </div>
            </div>
          </div>
        </form>
        <h5>Tabla 3: Product</h5>
		<form>
		<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label for="serial">Serial</label>
				<input type="text" class="form-control" id="serial" placeholder="Serial">
			</div>
			<div class="form-group">
				<label for="manufacturer">Manufacturer</label>
				<input type="text" class="form-control" id="manufacturer" placeholder="Manufacturer">
			</div>
			<div class="form-group">
				<label for="caliber">Caliber</label>
				<input type="text" class="form-control" id="caliber" placeholder="Caliber">
			</div>
			<div class="form-group">
				<label for="msrp">MSRP</label>
				<input type="text" class="form-control" id="msrp" placeholder="MSRP">
			</div>
			<div class="form-group">
				<label for="condition">Condition</label>
				<input type="text" class="form-control" id="condition" placeholder="Condition">
			</div>
			<div class="form-group">
				<label for="taxible">Taxible</label>
				<input type="text" class="form-control" id="taxible" placeholder="Taxible">
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label for="type">Type</label>
				<input type="text" class="form-control" id="type" placeholder="Type">
			</div>
			<div class="form-group">
				<label for="model">Model</label>
				<input type="text" class="form-control" id="model" placeholder="Model">
			</div>
			<div class="form-group">
				<label for="nfa">NFA</label>
				<input type="text" class="form-control" id="nfa" placeholder="NFA">
			</div>
			<div class="form-group">
				<label for="competitorPrice">Competitor Price</label>
				<input type="text" class="form-control" id="competitorPrice" placeholder="Competitor Price">
			</div>
			<div class="form-group">
				<label for="sarPrice">SAR Price</label>
				<input type="text" class="form-control" id="sarPrice" placeholder="SAR Price">
			</div>
			<div class="form-group">
				<label for="fflDisposal">FFL Disposal</label>
				<input type="text" class="form-control" id="fflDisposal" placeholder="FFL Disposal">
			</div>
			</div>
		</div>
		</form>
		<h5>Tabla 4: Transfer</h5>
		<form>
		<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label for="transferDate">Transfer Date</label>
				<input type="text" class="form-control" id="transferDate" placeholder="Transfer Date">
			</div>
			<div class="form-group">
				<label for="customer">Customer</label>
				<input type="text" class="form-control" id="customer" placeholder="Customer">
			</div>
			<div class="form-group">
				<label for="statement">Statement</label>
				<input type="text" class="form-control" id="statement" placeholder="Statement">
			</div>
			<div class="form-group">
				<label for="qnum">Qnum</label>
				<input type="text" class="form-control" id="qnum" placeholder="Qnum">
			</div>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<label for="approval">Approval</label>
				<input type="text" class="form-control" id="approval" placeholder="Approval">
			</div>
			<div class="form-group">
				<label for="nfaCtrNo">NFA CTR No</label>
				<input type="text" class="form-control" id="nfaCtrNo" placeholder="NFA CTR No">
			</div>
			<div class="form-group">
				<label for="dueDate">Due Date</label>
				<input type="text" class="form-control" id="dueDate" placeholder="Due Date">
			</div>
			</div>
		 
		</form>
		 
</div>


        <!-- Agrega las tablas restantes según sea necesario -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="save">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


 
<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>
 


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
 
                        $sql = "SELECT * FROM `acqtrx` ";
						
						echo $search;

						if (!empty($search)) {
							$sql .= " WHERE `AcqTrx` LIKE '%$search%' OR `Source` LIKE '%$search%'";
						}
						$sql .= " ORDER BY `AcqTrx` ASC LIMIT 500;";
						echo $sql;
						$query = mysqli_query($conexion, $sql);

						//num
						$tamanio_tanda = 500;
						$sql1 = "SELECT count(*) as num FROM `acqtrx`";
						$query1 = mysqli_query($conexion, $sql1);
						$data1 = mysqli_fetch_assoc($query1);
						$num = $data1['num'];
						echo $num;
						$redondeado = round($num/$tamanio_tanda);
						echo "<br>";
						echo $redondeado;

						?>

<script>
 $(document).ready(function() {
      var totalPaginas = <?php echo $redondeado; ?>;
	  console.log(totalPaginas);

      // Cargar la primera página inicialmente
      cargarPagina(1);

      // Función para cargar una página específica
      function cargarPagina(pagina) {
        $.ajax({
          url: 'procesar_pagina.php', // Archivo PHP para procesar la página
          type: 'POST',
          data: { pagina: pagina },
          success: function(response) {
            $('#resultado').html(response);
          },
          error: function(xhr, status, error) {
            console.error(error);
          }
        });
      }

      // Manejar el evento de clic en los enlaces de página
      $(document).on('click', '.page-link', function(e) {
        e.preventDefault();
        var pagina = $(this).text();
        cargarPagina(pagina);
      });
    });
  </script>
						
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
						<?php

						$result = mysqli_num_rows($query);
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
										<a href="agregar_producto.php?id=<?php echo $data['AcqTrx']; ?>" class="btn btn-success">
										<i class="fas fa-tasks"></i>
										</a>

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