<html>
  <head>
    <title>Data Mahasiswa</title>
  </head>
  <body>
    <?php
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $pekerjaan = $_POST['pekerjaan'];
      $hobi1 = $_POST['hobi1'];
      $hobi2 = $_POST['hobi2'];
      $hobi3 = $_POST['hobi3'];
    ?>
    <table border="1" bgcolor="cyan">
      <tr>
        <td colspan="2"> Data Mahasiswa</td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><?php echo $nama; ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><?php echo $alamat; ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $jenis_kelamin; ?></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td><?php echo $pekerjaan; ?></td>
      </tr>
      <tr>
        <td>Hobi</td>
        <td><?php echo "$hobi1,$hobi2$hobi3"; ?></td>
      </tr>
    </table>
    <a href="forminputmahasiswa.php">Input Data Lagi</a>
  </body>
</html>