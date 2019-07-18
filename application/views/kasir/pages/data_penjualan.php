<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Data Paket</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Penjualan </h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							
							<th>No</th>
							<th>Nama Paket</th>
							<th>Jumlah</th>
							<th>harga</th>
							<th>Total</th>
							<th>Tanggal</th>
						</tr>
					</thead>

					
					<tbody>
						<?php $no=1; foreach ($penjualan as $r) { ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $r->nama; ?></td>
								<td><?php echo $r->jumlah; ?></td>
								<td><?php echo $r->harga; ?></td>
								<td><?php echo (intval($r->jumlah)*intval($r->harga)); ?></td>
								<td><?php echo $r->tanggal; ?></td>

							</tr>
						<?php } ?>



					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->


