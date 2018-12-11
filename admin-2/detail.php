<center><h2>detail pembelian</h2></center>
<?php 
	$ambil = $koneksi->query("SELECT * FROM pembelian JOIN user ON pembelian.id_pembelian=user.id_user WHERE pembelian.id_pembelian='$_GET[id] '");
	$detail = $ambil->fetch_assoc(); 
?>
<pre><?php print_r($detail); ?></pre>

<strong><?php echo $detail['nama']; ?></strong> <br>
<p>
	<?php echo $detail['alamat']; ?> <br>
	<?php echo $detail['username']; ?>
</p>

<h3>
	Tanggal: <?php echo $detail['tanggal_pembelian']; ?> <br>
	
</h3>
<table class="table table-bordered">
<thead>
	<tr>
		<th>no</th>
		<th>nama produk</th>
		<th>harga</th>
		<th>jumlah</th>
		<th>subtotal</th>
	</tr>
</thead>
<tbody>
	<?php $nomor=1; ?>
	<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk=produk.id_produk WHERE pembelian_produk.id_pembelian='$_GET[id]' ") ?>
	<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor;?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td><?php echo $pecah['harga_produk']; ?></td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td><?php echo $pecah['harga_produk']*$pecah['jumlah'];  ?></td>
		
		</tr>
		<?php $nomor++; ?>
		<?php  }?>
</tbody>
</table>
<h2>TOTAL:  <?php echo $detail['total_pembelian']; ?></h2>

