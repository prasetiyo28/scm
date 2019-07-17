<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Data Transaksi</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Transaksi				<!-- <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Ruangan</a> -->
				<a href="#" id="print" class="btn btn-info"> <i class="fa fa-print"></i>print</a>
			</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							
							<th>no</th>
							<th>Nama Cabang</th>
							<th>Kategori</th>
							<th>Jumlah</th>
							<th>Harga</th>
							<th>Total</th>
							<th>Tanggal</th>
							<!-- <th>Action</th> -->
						</tr>
					</thead>

					
					<tbody>
						<?php $no = 1; foreach ($transaksi as $r) { ?>
							<tr align="center">
								<td><?php echo $no++; ?></td>
								<td><?php echo $r->nama_cabang; ?></td>
								<td><?php echo $r->kategori; ?></td>
								<td><?php echo $r->jumlah; ?></td>
								<td><?php echo $r->harga; ?></td>
								<td><?php echo $r->total; ?></td>
								<td><?php echo $r->tanggal; ?></td>
							<!-- 	<td>
									<?php if ($r->status==0) { ?>
										<a class="btn btn-info" href="<?php echo base_url() ?>suplier/terima/<?php echo $r->id_stock ?>">Terima Pesanan</a>
									<?php }elseif($r->status == 1) { ?>
										<a class="btn btn-primary" href="<?php echo base_url() ?>suplier/kirim/<?php echo $r->id_stock ?>">Kirim</a>
									<?php } ?>
								</td> -->
							</tr>
						<?php } ?>



					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

<script type="text/javascript">
	function printData()
	{
		var divToPrint=document.getElementById("dataTable");
		newWin= window.open("");
		newWin.document.write(divToPrint.outerHTML);
		newWin.print();
		newWin.close();
	}

	$('#print').on('click',function(){
		printData();
	})
</script>

