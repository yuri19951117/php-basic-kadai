<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <!-- PHPの埋め込み -->
    <?php
    // 連想配列に値を代入する
    $personal_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
    // 連想配列$personal_dataのキーと値を1つずつ順番に出力する
    foreach ($personal_data as $key => $value) {
    echo "{$key}：{$value}<br>";
    }
    ?>
</body>

</html>
