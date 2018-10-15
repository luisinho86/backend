<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pedidos</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="table-responsive">
			<div id="no-more-tables">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Fecha</th>
							<th class="numeric">Nombre</th>
							<th class="numeric">Teléfono</th>
							<th class="numeric">Población</th>
							<th class="numeric">Provincia</th>
							<th class="numeric">Importe</th>
							<th class="numeric">País</th>
							<th class="numeric">Ops</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-title="#">1000</td>
							<td data-title="Fecha"><?= date('d-m-Y H:i:s'); ?></td>
							<td data-title="Nombre">Usuario Tester</td>
							<td data-title="Teléfono" class="numeric">666999888</td>
							<td data-title="Población" class="numeric">Barcelona</td>
							<td data-title="Provincia" class="numeric">Barcelona</td>
							<td data-title="Importe" class="numeric">62 &euro;</td>
							<td data-title="País" class="numeric">España</td>
							<td data-title="Ops" class="numeric"><a href="#" class="show-order">Ver</a></td>
						</tr>
						<tr>
							<td data-title="#">1000</td>
							<td data-title="Fecha"><?= date('d-m-Y H:i:s'); ?></td>
							<td data-title="Nombre">Usuario Tester</td>
							<td data-title="Teléfono" class="numeric">666999888</td>
							<td data-title="Población" class="numeric">Barcelona</td>
							<td data-title="Provincia" class="numeric">Barcelona</td>
							<td data-title="Importe" class="numeric">62 &euro;</td>
							<td data-title="País" class="numeric">España</td>
							<td data-title="Ops" class="numeric"><a href="#" class="show-order">Ver</a></td>
						</tr>
						<tr>
							<td data-title="#">1000</td>
							<td data-title="Fecha"><?= date('d-m-Y H:i:s'); ?></td>
							<td data-title="Nombre">Usuario Tester</td>
							<td data-title="Teléfono" class="numeric">666999888</td>
							<td data-title="Población" class="numeric">Barcelona</td>
							<td data-title="Provincia" class="numeric">Barcelona</td>
							<td data-title="Importe" class="numeric">62 &euro;</td>
							<td data-title="País" class="numeric">España</td>
							<td data-title="Ops" class="numeric"><a href="#" class="show-order">Ver</a></td>
						</tr>
						<tr>
							<td data-title="#">1000</td>
							<td data-title="Fecha"><?= date('d-m-Y H:i:s'); ?></td>
							<td data-title="Nombre">Usuario Tester</td>
							<td data-title="Teléfono" class="numeric">666999888</td>
							<td data-title="Población" class="numeric">Barcelona</td>
							<td data-title="Provincia" class="numeric">Barcelona</td>
							<td data-title="Importe" class="numeric">62 &euro;</td>
							<td data-title="País" class="numeric">España</td>
							<td data-title="Ops" class="numeric"><a href="#" class="show-order">Ver</a></td>
						</tr>
						<tr>
							<td data-title="#">1000</td>
							<td data-title="Fecha"><?= date('d-m-Y H:i:s'); ?></td>
							<td data-title="Nombre">Usuario Tester</td>
							<td data-title="Teléfono" class="numeric">666999888</td>
							<td data-title="Población" class="numeric">Barcelona</td>
							<td data-title="Provincia" class="numeric">Barcelona</td>
							<td data-title="Importe" class="numeric">62 &euro;</td>
							<td data-title="País" class="numeric">España</td>
							<td data-title="Ops" class="numeric"><a href="#" class="show-order">Ver</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		</div>
	</div>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/popper-1.12.9.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>