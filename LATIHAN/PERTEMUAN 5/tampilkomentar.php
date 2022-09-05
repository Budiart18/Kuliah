<html>
  <head>
    <title>Data Komentar</title>
  </head>
  <body>
    <h1>Data Komentar Anda</h1>
    <hr>
    <?php
    echo 'Nama Anda : '.$_POST["nama"].' <br>';
    echo 'Email Anda : '.$_POST["email"].' <br>';
    echo 'Komentar Anda : '.$_POST["komentar"].' <br>';
    ?>
    <a href="forminputkomentar.php">INPUT DATA LAGI</a>
  </body>
</html>
