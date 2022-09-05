<html>
  <head>
    <title>Kalkulator Sederhana</title>
  </head>
  <body>
    <div style="align:center">
    <h1>Rumus - Rumus</h1>
    <form action="Tugas04output.php" method="post">
      <table border="1" cellpadding="5">
        <tr>
          <td>Nilai 1</td>
          <td><input type="number" name="nilai1"></td>
        </tr>
        <tr>
          <td>Nilai 2</td>
          <td><input type="number" name="nilai2"></td>
        </tr>
        <tr rowspan="2">
          <td colspan="2">
            <input type="radio" name="rumus" value="segitiga"> Segitiga
          </td>
        </tr>
        <tr>
          <input type="radio" name="rumus" value="persegi_panjang"> Persegi Panjang
        </tr>
      </table>
      <br>
      <input type="submit" value="Hitung">
      <input type="reset" value="Batal">
    </form>
    </div>
  </body>
</html>