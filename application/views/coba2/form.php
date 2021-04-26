 <?php 

$conn = new mysqli('localhost', 'root', '', 'test');


if (isset($_POST['submit'])) {
 $nb = $_POST['nama_barang'];
 $hrg = $_POST['harga'];
 $qty = $_POST['qty'];

 $q = mysqli_query($conn, "INSERT INTO produk (nama_barang, harga, qty) VALUES ('$nb', '$hrg', '$qty')");

 if($q) {
  header('Location: form.php');
 } else {
  echo "<script>alert('Gagal menambahkan data'); window.location.href = form.php;</script>";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Penjualan Bebek</title>

 <center><h1>Duck Man Shop</h1>
 
 <form method="POST" action="">
 <table border="0" cellpadding="10">
        <tr>
            <td><label for="nama_barang">Nama Barang </label></td>
     <td><select id="nama_barang" name="nama_barang">
  <option ></option>
  <option value="Bebek Hidup">Bebek Hidup</option>
  <option value="Bebek Potong">Bebek Potong</option>
  <option value="Telor Bebek">Telor Bebek</option>
</select></td>
        </tr>
        <tr>
            <td><label for="harga">Harga </label></td>
            <td><input type="text" name="harga" id="harga"></td>
        </tr>
        <tr>
            <td><label for="qty">Quantity </label></td>
            <td><select id="qty" name="qty" type="number">
  <option ></option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select></td>
        </tr>
        <td colspan="2" align="right" bgcolor="#f0f8ff"><button type="submit" name="submit" class="btn btn-primary">Hitung</button> <button type="reset" class="btn btn-danger">Reset</button></td>
    </table>
  </center>
</form>
    <table class="table table-bordered mt-5">
     <tr>
      <th>#</th>
      <th>Nama Barang</th>
      <th>Harga Satuan</th>
      <th>Qty</th>
      <th>Total</th>
      <th>Action</th>
     </tr>

     <?php
     
     $q = mysqli_query($conn, "SELECT * FROM produk");
     
     $total = 0;
     $tot_bayar = 0;
     $no = 1;

     while ($r = $q->fetch_assoc()) {
    
      $total = $r['harga'] * $r['qty'];
     
      $tot_bayar += $total;
     ?>

     <tr>
      <td><?= $no++ ?></td>
      <td><?= ucwords($r['nama_barang']) ?></td>
      <td><?= $r['harga'] ?></td>
      <td><?= $r['qty'] ?></td>
      <td><?= $total ?></td>

      <td>
        <a href="hapus.php?id_produk=<?=$r['id_produk'];?>"><button class="btn btn-warning">Hapus</button></a>
        
        
      </td>
     </tr>

     <?php   
     }
     ?>

     <tr>
      <th colspan="4">Total Bayar</th>
      <th><?= $tot_bayar ?></th>
     </tr>

   

    </table>
   </div>
  </div>
 </div>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
</html>