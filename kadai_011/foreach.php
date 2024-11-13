<!DOCTYPE html>
<html lang="ja">

<html>
  <meta charset="utf-8">
  <title>PHP課題</title>
</html>

<body>
  <p>
    <?php

    $vegetables = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($vegetables as $key => $value) {
      echo "{$key} : {$value}<br>";
    }

    ?>

  </p>
</body>

</html>