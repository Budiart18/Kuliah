<html>
  <head>
    <title>Tugas 03</title>
  </head>
  <body>
    <?php
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $tempat_lahir = $_POST['tempat_lahir'];
      $tanggal_lahir = $_POST['tanggal_lahir'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $pendidikan = $_POST['pendidikan'];
    ?>
    <h1>Data Registrasi</h1>
    <table border="1" cellpadding="5">
      <tr>
        <td>Nama</td>
        <td><?php echo $nama; ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><?php echo $alamat; ?></td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td><?php echo $tempat_lahir; ?></td>
      </tr>
      <tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td><?php echo $tanggal_lahir; ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $jenis_kelamin; ?></td>
      </tr>
      <tr>
        <td>Pendidikan</td>
        <td><?php echo $pendidikan; ?></td>
      </tr>
    </table>
    <a href="Tugas03.php">Back To Home</a>
  </body>
</html>