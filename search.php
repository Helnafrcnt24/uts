<?php 
    include 'koneksidb.php';
?>
<center><h3>Search</h3></center>
<form action="search.php" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil pencarian : ".$cari."</b>";
    }
?>
<table border="1">
<thead>
				<tr style="background-color: grey; color: white;">
					<th style="width: 10px; text-align: center">SKU.</th>
					<th style="width: 200px; text-align: center">Nama Barang</th>
					<th style="width: 400px; text-align: center">Kategori</th>
					<th style="width: 400px; text-align: center">Jumlah Stok</th>
                    <th style="width: 100px; text-align: center">Harga Satuan</th>
				</tr>
			</thead>
<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysqli_query($konek,"select * from data where SKU like '%".$cari."%'"); 
    }
    else{
        return;
    }
    while($d = mysqli_fetch_array($data)){
?>
    <tr>
        <td><?php echo $d['SKU']; ?></td>
        <td><?php echo $d['nama_barang']; ?></td>
        <td><?php echo $d['kategori']; ?></td>
        <td><?php echo $d['jumlah_stok']; ?></td>
        <td><?php echo $d['harga_satuan']; ?></td>
    </tr>
<?php 
    } 
?>
</table>
        <!-- tombol kembali  -->
        <a href="data.php"> <button class="btn btn-primary">KEMBALI</button> </a>