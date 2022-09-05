<html>
  <head>
    <title>Hasil Hitung Kalkulator Sederhana</title>
  </head>
  <body>
    <h2>HASIL HITUNG RUMUS</h2>
    <?php
      $nilai1 = $_POST['nilai1'];
      $nilai2 = $_POST['nilai2'];
      $rumus = $_POST['rumus'];
      if ($rumus == 'segitiga') {
        $rumus_hitung = 0.5 * $nilai1 * $nilai2;
      } elseif ($rumus == 'persegi_panjang') {
        $rumus_hitung = $nilai1 * $nilai2;
      } else {
        echo 'Rumus tidak dipilih <br>';
      }
      if ((!empty($nilai1)) && (!empty($nilai2))) {
        echo "Nilai 1 adalah = $nilai1 <br>";
        echo "Nilai 2 adalah = $nilai2 <br>";
        echo "Rumus Yang Dipilih adalah = $rumus <br>";
        echo "Hasil Perhitungan Rumus = $rumus_hitung <br>";
      } else {
        echo "Tidak ada hasil perhitungan <br>";
      }
    ?>
  </body>
</html>