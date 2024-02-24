<!DOCTYPE html>
<html lang="ja">    

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <!-- PHPの埋め込み -->
    <?php
    $nums = [15, 4, 18, 23, 10];

function sort_2way($arrays, $order)
{
    

    if ($order) {
        echo "昇順にソートします。<br>";
        sort($arrays);
        foreach ($arrays as $num) {
            echo $num . '<br>';
        }
    } else {
        echo "降順にソートします。<br>";
        rsort($arrays);
        foreach ($arrays as $num) {
            echo $num . '<br>';
        }
    }
}

sort_2way($nums, true);
sort_2way($nums, false);
?>


</body>

</html>