<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>phpテスト</title>
</head>
<body>
  <table border="1" style="border-collapse: collapse">
<?php
  for ($a = 1; $a <= 9; $a++){
  echo'<tr>';
  for ($b = 1; $b <= 9; $b++){
    echo'<td>' . $a * $b . '</td>';
  }
  echo'</tr>';
}
?>
</table>
  
</body>
</html>