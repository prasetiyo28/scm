<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Data Paket</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Stock <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-success"><i class="fa fa-plus"></i>Tambah Stock</a></h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							
							<th>id</th>
							<th>Tanggal</th>
							<th>Jumlah</th>
							<th>Action</th>
						</tr>
					</thead>

					
					<tbody>
						<?php foreach ($datastock as $r) { ?>
							<tr>
								<td><?php echo $r->id_stock; ?></td>
								<td><?php echo $r->tanggal; ?></td>
								<td><?php echo $r->jumlah; ?></td>
								<?php if ($r->status == 0) { ?>
									<td>
										<a href="<?php echo base_url() ?>cabang/hapus_pengeluaran/<?php echo $r->id_stock ?>" class="btn btn-danger">Delete</a>
										<a href="#" class="btn btn-warning">Edit</a>
									</td>
								<?php }elseif($r->status == 1){ ?>
									<td>
										<a href="javascript:void(0);" class="btn btn-warning"><i class="fa fa-box"></i> Sedang diproses</a>
									</td>

								<?php }elseif($r->status == 2){ ?>
									<td>
										<a href="<?php echo base_url() ?>cabang/terima/<?php echo $r->id_stock  ?>" class="btn btn-info"><i class="fa fa-truck"></i> Sedang dikirim</a>
									</td>
								<?php }else{ ?>
									<td>
										<a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-check"></i> Diterima</a>
									</td>
								<?php } ?>
							</tr>
						<?php } ?>



					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Pengeluaran Hari Ini</h5>
				<a href="#" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</a>
			</div>
			<div class="modal-body">
				<form action='<?php echo base_url() ?>cabang/save_pengeluaran' method="POST" enctype="multipart/form-data">

					<div class="form-group">
						<label for="inputText3" class="col-form-label">Jumlah Pengeluaran Hari Ini</label>
						<input id="inputText3" name="jumlah" max="<?php echo $stock ?>" min="0" type="number" class="form-control" placeholder="Jumlah pegeluaran hari ini...">

					</div>


					<!-- <div class="form-group">
						<label for="inputText3" class="col-form-label">Detail Foto</label>
						<p>*file yang diterima hanya berekstensi .jpg, .jpeg, .png</p>
						<input type="file" accept="image/jpg, image/jpeg, image/png" name="foto">

					</div> -->

					

					<div class="modal-footer">
						<a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
						<input type="submit" value="Simpan" class="btn btn-success">
					</div>


				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#DetailRuang').on('show.bs.modal', function (e) {
			var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
            	type : 'post',
            	url : '<?php echo base_url() ?>mitra/detail',
            	data :  'id_paket='+ rowid,
            	success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
            }
        });
        });
	});
</script>

<div class="modal fade" id="DetailRuang" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Detail Paket</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="fetched-data"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
			</div>
		</div>
	</div>
</div>