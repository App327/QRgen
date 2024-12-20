<?php

header('HTTP/1.1 200 OK');

echo '<!DOCTYPE html>
<html lang="ru" dir="ltr">
 <head>
  <meta charset="utf-8" />
  <title>QRgen</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="stylesheet" href="/styles.css" media="all" type="text/css" />
  <link rel="icon" href="/favicon.png" type="image/png" />  
 </head>
 <body>
  <h1>QRgen</h1>
  <p class="site-decription">Генератор QR-кодов</p>
  <hr noshade color="lightgrey" />

  <form action="/qr.php" method="get">
   <label>Текст: <textarea placeholder="Введите текст..." name="txt" cols="30" rows="10" required></textarea></label><br />
   <label>Коррекция ошибок: <select name="level" required><option>L</option><option selected>M</option><option>H</option><option>Q</option></select></label><br />
   <label>Размер пикселя: <input type="number" name="size" value="3" required /></label><br />
   <label>Отступ: <input type="number" name="margin" value="5" required /></label><br />
   <input type="submit" value="Сгенерировать ›" />
  </form>
 </body>
</html>';

?>