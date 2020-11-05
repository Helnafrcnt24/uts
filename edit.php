<!-- proses penyimpanan -->

<?php 
	include "koneksidb.php";

	//baca ID data yang akan di edit
	$id = $_GET['id'];

	//baca data karyawan berdasarkan id
	$cari = mysqli_query($konek, "select * from data where SKU='$id'");
	$hasil = mysqli_fetch_array($cari);


	//jika tombol simpan diklik
	if(isset($_POST['btnSimpan']))
	{
		//baca isi inputan form
		$id = $_POST['SKU'];
		$namabarang    = $_POST['nama_barang'];
        $kategori  = $_POST['kategori'];
        $jumlahstok  = $_POST['jumlah_stok'];
        $hargasatuan  = $_POST['harga_satuan'];


		//simpan ke tabel data
		$simpan = mysqli_query($konek, "update data set SKU='$id', nama_barang='$namabarang', kategori='$kategori',jumlah_stok='$jumlahstok',harga_satuan='$hargasatuan' where SKU='$id'");
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
	<title>Tambah Data</title>
</head>
<body>

<!-- isi -->
<div class="container-fluid">
		<h3>Tambah Data </h3>

		<!-- form input -->
		<form method="POST">
			<div class="form-group">
				<label>SKU</label>
				<input type="text" name="SKU" id="SKU" placeholder="SKU" class="form-control" style="width: 200px" value="<?php echo $hasil['SKU']; ?>">
			</div>
			<div class="form-group">
				<label>Nama Barang</label>
				<input type="text" name="nama_barang" id="nama_barang" placeholder="nama_barang" class="form-control" style="width: 400px" value="<?php echo $hasil['nama_barang']; ?>">
			</div>
			<div class="form-group">
				<label>Kategori</label>
				<textarea class="form-control" name="kategori" id="kategori" placeholder="kategori" style="width: 400px"><?php echo $hasil['kategori']; ?></textarea>
            </div>
            <div class="form-group">
				<label>Jumlah Stok</label>
				<textarea class="form-control" name="jumlah_stok" id="jumlah_stok" placeholder="jumlah_stok" style="width: 400px"><?php echo $hasil['jumlah_stok']; ?></textarea>
            </div>
            <div class="form-group">
				<label>Harga Satuan</label>
				<textarea class="form-control" name="harga_satuan" id="harga_satuan" placeholder="harga_satuan" style="width: 400px"><?php echo $hasil['harga_satuan']; ?></textarea>
			</div>

			<button class="btn btn-primary" name="btnSimpan" id="btnSimpan">Simpan</button>
		</form>
	</div>


</body>
</html>