<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Percetakan Buku</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<title>Beranda Staff Gudang</title>
</head>
<body>
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="#"> Percetakan Buku
			<img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
		</a>
		<div><a class="btn btn-primary" href="logout.php">Logout</button></a></div>
	</nav>
	<div class="container">
		<div class="header">
		</div>
		<div class="content">
			<h3>Data Pemesanan</h3>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<th>No</th>
					<th>Nama Pemesan</th>
					<th>Tanggal</th>
					<th>Detail</th>
					<th colspan="2">Aksi</th>
				</thead>
				<tbody>
					<?php
						include "koneksi.php";

						// query sql
						$sql = "SELECT * FROM permintaan";
						$query = mysqli_query($connect, $sql) or die (mysqli_error());

						$no = 1; // no. urut

						while($data = mysqli_fetch_array($query)){

							$pemesan = $data["nama"];
							$date = $data["tanggal"];
							$detail = $data["detail"];

							echo "<tr>
									<td>$no</td>
									<td>$pemesan</td>
									<td>$date</td>
									<td>$detail</td>
									<td>
										<button>Terima</button>
										<button>Tolak</button>
									</td>
								  </tr>";
							$no++;
						}
					?>
				</tbody>
			</table>
		</div>
		<div class="footer">
			<center>
				<button type="button" class="btn btn-success">Pesan Bahan Baku</button>
		        <button type="button" class="btn btn-success">Update Stock</button>
		        <button type="button" class="btn btn-success">Status Pemesanan</button>
		        <button type="button" class="btn btn-success">Laporan Produksi</button>
		        <button type="button" class="btn btn-success">Pembayaran</button>
			</center>
	    </div>
	</div>
</body>
</html>