!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
    <link rel="stylesheet" type="text/css" href="edit.css">
   </head>
   <body>
    <?php
    if(isset($_POST['hitung'])){
      $bil1 = $_POST['bil1'];
      $bil2 = $_POST['bil2'];
      $operasi = $_POST['operasi'];
      switch ($operasi) {
        case 'bagi';
          $hasil = $bil1/$bil2;
        break;
      }
     }
     ?>
          <div class="kalkulator">
        <h2 class="judul">===KALKULATOR FARA===</h2>
        
        <form method="post">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
            <select clas="opt" name="operasi">
                <option value="bagi">/</option>
              </select>
            <td><input type="submit" name="hitung" value="Hitung" class="tombol"></td>
            <td><input type="reset" name="reset" value="C" class="tombol"></td>
          </form>
          <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
          <?php }else { ?>
            <input type="text" value="0" class="bil">
          <?php } ?>
         </div>
        </body>
       </html>
