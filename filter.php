<?php  
  include ('koneksidb.php'); 
        if (isset($_POST['filter'])) { 
          $max = $_POST['max']; 
          $min = $_POST['min']; 
 
          $query = "SELECT * FROM data WHERE harga_satuan BETWEEN '$min' AND '$max' "; 
          $result =mysqli_query($konek,$query);  
        } 
        else { 
          $result = mysqli_query($konek,"SELECT * FROM data"); 
        } 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>Filter</title>
 <style> 
   .menu ul{ 
    display: flex; 
   } 
   .menu ul li{ 
    flex-grow: 1; 
    list-style: none; 
    font-size: 25px; 
   } 
   .menu ul li a{ 
    color: #800000; 
   } 
   .tabel tr td { 
    text-align: center; 
   } 
   h2{ 
    text-align: center; 
    color: grey; 
    font-size: 20px; 
   } 
    .filter{ 
      text-align: center; 
    } 
    .cari{ 
      text-align: center; 
    } 
  </style> 
</head> 
<body> 
<center><h3>Filter</h3></center>
 <div class="filter"> 
    <form action="filter.php" method="POST"> 
    <label>MASUKKAN RENTANG HARGA</label> 
    <input type="text" name="min" placeholder="Masukkan MIN Harga" required="required"> 
    <label>SAMPAI</label> 
    <input type="text" name="max" placeholder="Masukkan MAX Harga" required="required"> 
    <input type="submit" name="filter" value="FILTER"> 
    </form> 
  </div> 
  <br><br> 
  <div class="tabel"> 
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
       <?php while($data = mysqli_fetch_array($result)): ?> 
                  <tr> 
                    <td><?php echo $data['SKU'];  ?></td> 
                    <td><?php echo $data['nama_barang'];  ?></td> 
                    <td><?php echo $data['kategori'];  ?></td> 
                    <td><?php echo $data['jumlah_stok'];  ?></td> 
                    <td><?php echo $data['harga_satuan'];  ?></td> 
                  </tr> 
         <?php endwhile ?> 
  </table> 
 </div> 
         <!-- tombol kembali  -->
         <br><center><a href="data.php"> <button class="btn btn-primary">KEMBALI</button> </a></br></center>
</body> 
</html>