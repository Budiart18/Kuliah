<html>
  <head>
    <title>Form Data Diri</title>
  </head>
  <body>
    <h1>Masukkan Identitas Anda</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <table>
        <tr>
          <td>Isikan Nama</td>
          <td> : </td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Isikan No. Telepon</td>
          <td> : </td>
          <td><input type="text" name="telp"><br></td>
        </tr>
        <tr>
          <td valign="top">Isikan Alamat</td>
          <td valign="top"> : </td>
          <td><textarea name="alamat" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
          <td colspan="3">
            <input type="submit" value="Tampil">
            <input type="reset" value="Batal">
          </td>
        </tr>
      </table>
    </form>
    <?php
      $nama = $_POST['nama'];
      $telp = $_POST['telp'];
      $alamat = $_POST['alamat'];
      if(!empty($nama)){
        echo "Nama : $nama <br>";
      }
      if(!empty($telp)){
        echo "No. Telepon : $telp <br>";
      }
      if(!empty($alamat)){
        echo "Alamat : $alamat <br>";
      }
    ?>
  </body>
</html>