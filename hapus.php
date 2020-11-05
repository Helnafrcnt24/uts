<?php
	include "koneksidb.php";
    
	//baca id data yang akan dihapus
	$id = $_GET['id'];

	//hapus data
	$hapus = mysqli_query($konek, "delete from data where SKU='$id'");

	//jika berhasil terhapus tampilkan pesan Terhapus
	if($hapus)
	{
		echo "
			<script>
				alert('Terhapus');
				location.replace('data.php');
			</script>
		";
	}
	else
	{
		echo "
			<script>
				alert('Gagal Terhapus');
				location.replace('data.php');
			</script>
		";
	}

?>