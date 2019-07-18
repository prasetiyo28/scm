<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="window.print()">
	<center>
		
		<h1>Quick Chicken</h1>
		
		<br>

		<table width="50%">
			<tr>
				<td>Nama Item</td>
				<td>Jumlah</td>
				<td>Harga</td>
				<td>Sub Total</td>
			</tr>
			<?php foreach ($cart as $c) {?>
				<tr>
					<td><?php echo $c['name']; ?></td>
					<td><?php echo $c['qty']; ?></td>
					<td><?php echo $c['price']; ?></td>
					<td><?php echo $c['subtotal']; ?></td>
				</tr>
			<?php } ?>
			<tr>
				<td  align="center" colspan="3"><b>Total :</b></td>
				<td>Rp. <?php echo number_format($total); ?></td>
			</tr>
			<tr>
				<td  align="center" colspan="3"><b>Bayar :</b></td>
				<td>Rp. <?php echo number_format($bayar); ?></td>
			</tr>
			<tr>
				<td  align="center" colspan="3"><b>Kembali :</b></td>
				<td>Rp. <?php $kembali = $bayar-$total; echo number_format($kembali);?></td>
			</tr>
		</table>

		<p>Terima Kasih Telah berbelanja</p>
	</center>
</body>
</html>