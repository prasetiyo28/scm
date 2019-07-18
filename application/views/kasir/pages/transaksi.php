<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Kasir</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Pengeluaran </h6>
		</div>
		<div class="card-body">
			<div class="container"><br/>
				<div class="row">
					<div class="col-md-12">
						<h4>Paket</h4>
						<hr/>
						<table class="table table-striped">
							<tr>
								<td>Nama Paket</td>
								<td>Harga</td>
								<td>Keterangan</td>
								<td>Jumlah</td>
								<td>Action</td>
							</tr>
							<?php foreach ($data as $row) : ?>
								<tr>
									<td><?php echo $row->nama;?></td>
									<td><?php echo 'Rp '.number_format($row->harga);?></td>
									<td><?php echo $row->keterangan;?></td>
									<td><input type="number" name="quantity" id="<?php echo $row->id_paket;?>" value="1" class="quantity form-control"></td>

									<td><button class="add_cart btn btn-success btn-block" data-produkid="<?php echo $row->id_paket;?>" data-produknama="<?php echo $row->nama;?>" data-produkharga="<?php echo $row->harga;?>">Add To Cart</button></td>
								</tr>
							<?php endforeach;?>


						</table>
						

					</div>
					<div class="col-md-12">
						<h4>Cart</h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Produk</th>
									<th>Harga</th>
									<th>Qty</th>
									<th>Subtotal</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody id="detail_cart">

							</tbody>
							<form action="<?php echo base_url() ?>Kasir/checkout" method="POST" target="_blank">
								<tr>
									<td colspan="3">Bayar</td>
									<td colspan="2"><input required class="form-control" type="number" name="bayar"></td>
								</tr>	

								<tr>
									<td colspan="5"> <button class="btn btn-success btn-block" onclick="location.reload();" type="submit">Bayar</button> </td>
								</tr>
							</form>
						</table>
					</div>
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




<!-- Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Ubah Data</h4>
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
				
			</div>
			<form class="form-horizontal" action="<?php echo base_url('cabang/update_pengeluaran')?>" method="post" enctype="multipart/form-data" role="form">
				<div class="modal-body">
					<div class="form-group">
						<label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
						<div class="col-lg-10">
							<input type="text" readonly class="form-control" id="tanggal" name="tanggal" placeholder="tanggal">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-lg-2 col-sm-2 control-label">Jumlah</label>
						<div class="col-lg-10">
							<input type="hidden" id="id" name="id">
							<input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Id Pengeluaran">
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
            modal.find('#jumlah').attr("value",div.data('jumlah'));
            modal.find('#tanggal').attr("value",div.data('tanggal'));

        });
    });
</script>


<script type="text/javascript">
	$(document).ready(function(){
		$('.add_cart').click(function(){
			var produk_id    = $(this).data("produkid");
			var produk_nama  = $(this).data("produknama");
			var produk_harga = $(this).data("produkharga");
			var quantity     = $('#' + produk_id).val();
			$.ajax({
				url : "<?php echo base_url();?>kasir/add_to_cart",
				method : "POST",
				data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, quantity: quantity},
				success: function(data){
					$('#detail_cart').html(data);
				}
			});
		});

        // Load shopping cart
        $('#detail_cart').load("<?php echo base_url();?>kasir/load_cart");

        //Hapus Item Cart
        $(document).on('click','.hapus_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
            	url : "<?php echo base_url();?>kasir/hapus_cart",
            	method : "POST",
            	data : {row_id : row_id},
            	success :function(data){
            		$('#detail_cart').html(data);
            	}
            });
        });
    });
</script>