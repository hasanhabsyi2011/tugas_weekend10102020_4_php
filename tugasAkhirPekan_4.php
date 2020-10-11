<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tugas akhir pekan 4</title>
  </head>
  <body>

    <?php

    $r = 14;
    $t = 10;

    function luasTabung($rusuk, $tinggi){
        return 2 * pi() * $rusuk * ($rusuk+$tinggi);
        }
   ?>



    <h3>Soal Nomor 4</h3>
    <p>Sebuah tabung memiliki jari-jari 14 cm dan tingginya 10 cm,
      maka tentukanlah luasnya?</p>

    <br><br>
    <h3>Jawaban</h3>

    <p><b>Jadi, luasnya adalah :
    <?php echo luasTabung($r, $t); ?>


  </body>
</html>
