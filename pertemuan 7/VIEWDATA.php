<!DOCTYPE html>
<html lang="en">
<body>
<div class="container mt-3">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th><input typr="chekbox" id="select_all"></th>
        <th>ID</th>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
<?php
include "koneksi.php";
$sql = "SELECT * FROM biodata ORDER BY id DESC";
$hasil = mysqli_query($koneksi, $sql);
if (mysqli_num_rows)($hasil) == 0 {
  echo"
        <tr>
          <td colspan='5'>Data Kosong</td>
        </tr>
      ";
}
else {

}
      <tr>
        <td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <a href='editdata.php' class='btn btn-warning btn-sm'>Edit</a>
            <a href='hapusdata.php' class='btn btn-danger btn-sm'>Hapus</a>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
