<html>
  <head>
    <title>Form Registrasi</title>
  </head>
  <body>
    <h1>Form Registrasi</h1>
    <pre>Isi Data Dibawah Ini :</pre>
    <form action="Tugas03proses.php" method="post">
      <table>
        <tr>
          <td>Nama</td>
          <td> : </td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td> : </td>
          <td><textarea name="alamat" cols="40" rows="5"></textarea></td>
        </tr>
        <tr>
          <td>Tempat Lahir</td>
          <td> : </td>
          <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td> : </td>
          <td><input type="text" name="tanggal_lahir"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td> : </td>
          <td>
            <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
          </td>
        </tr>
        <tr>
          <td>Pendidikan</td>
          <td> : </td>
          <td>
            <select name="pendidikan">
              <option value="SMP">SMP</option>
              <option value="SMA/SMK">SMA/SMK</option>
              <option value="S1">S1</option>
              <option value="S2">S2</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <input type="submit" value="Submit">
            <input type="reset" value="Cancel">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>