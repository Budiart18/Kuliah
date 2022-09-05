<html>
  <head>
    <title>Form Komentar</title>
  </head>
  <body>
    <h1>BUKU TAMU</h1>
    <p>Komentar dan Saran Anda Sangat Kami Butuhkan
    <br>Untuk Meningkatkan Kualitas Situs Kami</p>
    <hr>
    <form action="tampilkomentar.php" method="post">
    <table>
      <tr>
        <td>Nama Anda</td>
        <td> : </td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Email Anda</td>
        <td> : </td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td>Komentar Anda</td>
        <td> : </td>
        <td><textarea name="komentar" cols="30" rows="4"></textarea></td>
      </tr>
      <tr>
        <td colspan="3">
          <input type="submit" value="Kirim">
          <input type="reset" value="Batal">
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>