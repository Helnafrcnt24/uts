<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
</head>
<body>
	<!--isi -->
	<div class="container-fluid">
		<center><h3>Data Barang</h3></center>
		<table class="table table-bordered">
			<thead>
				<tr style="background-color: grey; color: white;">
					<th style="width: 10px; text-align: center">SKU.</th>
					<th style="width: 200px; text-align: center">Nama Barang</th>
					<th style="width: 400px; text-align: center">Kategori</th>
					<th style="width: 400px; text-align: center">Jumlah Stok</th>
                    <th style="width: 100px; text-align: center">Harga Satuan</th>
                    <th style="width: 100px; text-align: center">Aksi</th>
				</tr>
			</thead>
			<tbody>

				<?php
					//koneksi ke database
					include "koneksidb.php";

					//baca data karyawan
					$sql = mysqli_query($konek, "select * from data");
					$no = 0;
					while($data = mysqli_fetch_array($sql))
					{
						$no++;
				?>

				<tr>
					<td> <?php echo $data['SKU']; ?> </td>
					<td> <?php echo $data['nama_barang']; ?> </td>
                    <td> <?php echo $data['kategori']; ?> </td>
                    <td> <?php echo $data['jumlah_stok']; ?> </td>
                    <td> <?php echo $data['harga_satuan']; ?> </td>
					<td>
						<a href="edit.php?id=<?php echo $data['SKU']; ?>"> Edit</a> | <a href="hapus.php?id=<?php echo $data['SKU']; ?>"> Hapus</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>

		<!-- tombol tambah data  -->
        <center><a href="tambah.php"> <button class="btn btn-primary">Tambah Data</button> </a></center>
        <!-- tombol search data -->
        <br><center><a href="search.php"> <button class="btn btn-primary">Cari Data</button> </a></br></center>
        <!-- tombol search data -->
        <br><center><a href="filter.php"> <button class="btn btn-primary">Filter Harga</button> </a></br></center>
	</div>
</body>
</html>