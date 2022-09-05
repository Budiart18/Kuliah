<html>
  <head>
    <title>Input Data Mahasiswa</title>
  </head>
  <body bgcolor='green'>
    <h2>Pengelolaan Data Mahasiswa</h2>
    <form action="tampilmahasiswa.php" method="post">
    Nama : <input type="text" name="nama"><br>
    Alamat : <input type="text" name="alamat"><br>
    Jenis Kelamin : <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
    <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan <br>
    Pekerjaan : <select name="pekerjaan">
      <option value="Pelajar">Pelajar</option>
      <option value="Karyawan">Karyawan</option>
      <option value="Wirausaha">Wirausaha</option>
      <option value="Lain-lain">Lain Lain</option>
    </select><br>
    Hobi : <input type="checkbox" name="hobi1" value="olahraga"> Olahraga
    <input type="checkbox" name="hobi2" value="musik"> Musik
    <input type="checkbox" name="hobi3" value="jalan-jalan"> Jalan-jalan <br>
    <input type="submit" value="Kirim"> 
    <input type="reset" value="Batal">
    </form> 
  </body>
</html>