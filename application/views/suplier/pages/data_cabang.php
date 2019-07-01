<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Data Cabang</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Cabang				<!-- <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Ruangan</a> -->
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
							<th>Alamat</th>
							<th>No Telpon</th>
							<th>Action</th>
						</tr>
					</thead>

					
					<tbody>
						<?php $no = 1; foreach ($cabang as $r) { ?>
							<tr align="center">
								<td><?php echo $no++; ?></td>
								<td><?php echo $r->nama_cabang; ?></td>
								<td><?php echo $r->alamat; ?></td>
								<td><?php echo $r->no_telp; ?></td>
								<td>
									<a 
									href="javascript:;"
									data-id="<?php echo $r->id_cabang ?>"
									data-nama="<?php echo $r->nama_cabang ?>"
									data-alamat="<?php echo $r->alamat ?>"
									data-telp="<?php echo $r->no_telp ?>"
									data-toggle="modal" data-target="#edit-data">
									<button  data-toggle="modal" data-target="#ubah-data" class="btn btn-warning">Edit</button>
								</td>
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


<!-- Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Ubah Data</h4>
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
				
			</div>
			<form class="form-horizontal" action="<?php echo base_url('suplier/update_cabang')?>" method="post" enctype="multipart/form-data" role="form">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-lg-4 col-sm-4 control-label">Nama Cabang</label>

						<div class="col-lg-12">
							<input type="hidden" id="id" name="id">
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Cabang">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-lg-4 col-sm-4 control-label">No. Telp</label>
						<div class="col-lg-12">
							<input type="text" class="form-control" id="telp" name="telp" placeholder="No. Telp">
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-4 col-sm-4 control-label">Alamat</label>
						<div class="col-lg-12">
							<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
						</div>
					</div>
					

				</div>
				<div class="modal-footer">
					<button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
					<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- END Modal Ubah -->

<script>
	$(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#nama').attr("value",div.data('nama'));
            modal.find('#telp').attr("value",div.data('telp'));
            modal.find('#alamat').attr("value",div.data('alamat'));

        });
    });
</script>
