<!-- proses penyimpanan -->

<?php 
	include "koneksidb.php";

	//jika tombol simpan diklik
	if(isset($_POST['btnSimpan']))
	{
		//baca isi inputan form
		$id = $_POST['SKU'];
		$namabarang    = $_POST['nama_barang'];
        $kategori  = $_POST['kategori'];
        $jumlahstok  = $_POST['jumlah_stok'];
        $hargasatuan  = $_POST['harga_satuan'];

		//simpan ke tabel karyawan
		$simpan = mysqli_query($konek, "insert into data(SKU, nama_barang, kategori, jumlah_stok, harga_satuan)values('$id', '$namabarang', '$kategori', '$jumlahstok', '$hargasatuan')");

		//jika berhasil tersimpan, tampilkan pesan Tersimpan,
		if($simpan)
		{
			echo "
				<script>
					alert('Tersimpan');
					location.replace('data.php');
				</script>
			";
		}
		else
		{
			echo "
				<script>
					alert('Gagal Tersimpan');
					location.replace('data.php');
				</script>
			";
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data </title>

</head>
<body>


	<!-- isi -->
	<div class="container-fluid">
		<h3>Tambah Data </h3>

		<!-- form input -->
		<form method="POST">
		<div class="form-group">
				<label>SKU</label>
				<input type="text" name="SKU" id="SKU" placeholder="SKU" class="form-control" style="width: 400px">
			</div>
            <div class="form-group">
				<label>Nama Barang</label>
				<input type="text" name="nama_barang" id="nama_barang" placeholder="nama_barang" class="form-control" style="width: 400px">
            </div>
            <div class="form-group">
				<label>Kategori</label>
				<input type="text" name="kategori" id="kategori" placeholder="kategori" class="form-control" style="width: 400px">
            </div>
            <div class="form-group">
				<label>Jumlah Stok</label>
				<input type="text" name="jumlah_stok" id="jumlah_stok" placeholder="jumlah_stok" class="form-control" style="width: 400px">
            </div>
            <div class="form-group">
				<label>Harga Satuan</label>
				<input type="text" name="harga_satuan" id="harga_satuan" placeholder="harga_satuan" class="form-control" style="width: 400px">
			</div>




			<button class="btn btn-primary" name="btnSimpan" id="btnSimpan">Simpan</button>
		</form>
	</div>
</body>
</html>